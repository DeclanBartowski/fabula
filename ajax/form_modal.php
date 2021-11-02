<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';
?>

<? $APPLICATION->IncludeComponent(
    "sp:iblock.form",
    "presentation-modal",
    array(
        "IBLOCK_ID" => "17",
        "EMAIL_ID" => "13",
        "COMPONENT_TEMPLATE" => "presentation-modal",
        "FORM_NAME" => "Заполните форму",
        "DESC_NAME" => "и наш менеджер перезвонит вам в течении 15 минут",
    ),
    false
); ?>
