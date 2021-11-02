<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Config\Option;

?>
<footer class="container-block footer">
    <a href="/"><img
                src="<?= SITE_TEMPLATE_PATH ?><?= Option::get('sp.tools', 'tq_module_param_obshchie_nastroyki_logo') ?>"
                class="footer__logo"></a>
    <a href="<?= Option::get('sp.tools', 'tq_module_param_obshchie_nastroyki_link') ?>"
       class="footer__privacy"><?= Option::get('sp.tools', 'tq_module_param_obshchie_nastroyki_result_text') ?></a>
    <a href="tel:<?= Option::get('sp.tools', 'tq_module_param_obshchie_nastroyki_phone_call') ?>" class="footer__tel">
        <img src="<?= SITE_TEMPLATE_PATH ?>/img/phone-icon.png"><?= Option::get('sp.tools',
            'tq_module_param_obshchie_nastroyki_phone') ?>
    </a>
</footer>
</body>
</html>
