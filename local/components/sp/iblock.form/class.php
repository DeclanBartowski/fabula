<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Loader;

class iBlockFormComponent extends \CBitrixComponent implements Controllerable
{
    private $msg = '';

    public function configureActions()
    {
        return [
            'sendForm' => [
                'prefilters' => [],
            ],

            'subscribe' => [
                'prefilters' => [],
            ],
        ];
    }

    protected function listKeysSignedParameters()
    {
        return [
            'EMAIL_ID',
            'IBLOCK_ID',
        ];
    }

    private function prepareData($post): array
    {
        $result = [];
        foreach ($post as $item) {
            $result[$item['name']] = $item['value'];
        }
        return $result;
    }

    private function sendMail($post)
    {
        if (!empty($this->arParams['EMAIL_ID']) && empty($el->LAST_ERROR)) {
            \CEvent::Send('FEEDBACK_FORM', SITE_ID, $post, 'Y', $this->arParams['EMAIL_ID']);
        }
    }

    private function addIBlockElement($post)
    {
        if (!empty($this->arParams['IBLOCK_ID'])) {
            Loader::includeModule('iblock');
            $el = new \CIBlockElement;
            $arLoadProductArray = [
                'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
                'NAME' => date('d.m.Y H:i:s'),
                'PROPERTY_VALUES' => $post
            ];
            $el->Add($arLoadProductArray);
            if (!empty($el->LAST_ERROR)) {
                $this->msg = $el->LAST_ERROR;
            }
        }
    }

    public function sendFormAction($post): array
    {
        $post = $this->prepareData($post);
        $this->addIBlockElement($post);
        $this->sendMail($post);
        return [
            'status' => empty($this->msg),
            'msg' => $this->msg,
        ];
    }

    public function subscribeAction($post): array
    {
        $post = $this->prepareData($post);
        $this->checkEmailSubscribe($post['EMAIL']);
        if (empty($this->msg)) {
            $this->addIBlockElement($post);
            $this->sendMail($post);
        }

        return [
            'status' => empty($this->msg),
            'msg' => $this->msg,
        ];
    }

    private function checkEmailSubscribe($email = '')
    {
        Loader::includeModule('iblock');
        $res = \CIBlockElement::GetList(array(), [
            'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
            'PROPERTY_EMAIL' => $email
        ], false, false, ['ID', 'IBLOCK_ID']);
        if ($res->Fetch()) {
            $this->msg = 'Email уже подписан!';
        }
    }


    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}
