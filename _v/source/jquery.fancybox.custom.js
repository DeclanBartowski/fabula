jQuery.fancybox.defaults.backFocus = false;
jQuery.fancybox.defaults.autoFocus = false;
jQuery.fancybox.defaults.ajaxTpl = '<section class="fancybox-custom-modal fancybox-container" role="dialog" tabindex="-1">' +
	'<div class="fancybox-bg"></div>' +
	'<div class="fancybox-infobar"><span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span></div>' +
	'<div class="fancybox-toolbar">{{buttons}}</div>' +
	'<div class="fancybox-navigation">{{arrows}}</div>' +
	'<div class="fancybox-custom-inner"><div class="fancybox-stage"></div></div>' +
	'<div class="fancybox-caption"><div class=""fancybox-caption__body"></div></div>' +
	'</section>';

// jQuery.fancybox.defaults.spinnerTpl = '<div class="ui-progress">' +
// 	'<svg class="icon" width="22" height="22" viewBox="22 22 44 44">' +
// 	'<circle class="CircularProgress-circle" cx="44" cy="44" r="20.2" fill="none" stroke-width="3.6">' +
// 	'</circle>' +
// 	'</svg>' +
// 	'</div>';
jQuery.fancybox.defaults.initModal = setFancybox;
jQuery.fancybox.openModal = openModal;

function openModal(src, ...options) {
	$.fancybox.open({
		src: src,
		type: 'ajax',
		touch: false,
		baseTpl: jQuery.fancybox.defaults.ajaxTpl,
		buttons:[],
		
		...options,
		afterLoad: (opt, obj) => {
			maskedInputInit();
			jQuery.fancybox.defaults.initModal();
		}
	});
}

function setFancybox() {
	$('[data-fancybox-modal]').fancybox({
		type: 'ajax',
		touch: false,
		baseTpl: jQuery.fancybox.defaults.ajaxTpl,
		buttons:[],
		
		afterLoad: (opt, obj) => {
			maskedInputInit();
			jQuery.fancybox.defaults.initModal();
		}
	});
}


jQuery(document).ready(function () {
	jQuery.fancybox.defaults.initModal();

});


