new WOW({
    offset: 100,
}).init();

$(document).on('submit', '.presentation-block-form, .effect-business-form', function (e) {
    e.preventDefault();
    let tthis = this;
    BX.ajax.runComponentAction('sp:iblock.form',
        'sendForm', {
            mode: 'class',
            data: {post: $(this).serializeArray()},
            signedParameters: $(this).data('signed')
        })
        .then(function (response) {
            if (response.data.status) {
                jQuery.fancybox.close();
                if ($(tthis).find('.openFile').attr('href').length > 0) {
                    window.open($(tthis).find('.openFile').attr('href'));
                }
                jQuery.fancybox.openModal('/local/include/modal_success.php');
            } else {
                alert(response.data.msg);
            }
        });
});


$(document).on('submit', '.subscribeForm', function (e) {
    e.preventDefault();
    let tthis = this;
    BX.ajax.runComponentAction('sp:iblock.form',
        'subscribe', {
            mode: 'class',
            data: {post: $(this).serializeArray()},
            signedParameters: $(this).data('signed')
        })
        .then(function (response) {
            if (response.data.status) {
                jQuery.fancybox.close();
                jQuery.fancybox.openModal('/local/include/modal_success.php');
            } else {
                alert(response.data.msg);
            }
        });
});


$(document).on('click', '[data-show-modal]', function () {
    jQuery.fancybox.openModal('/ajax/form_modal.php');
})


$(document).on('click', '[data-show-more]', function () {
    var btn = $(this);
    var page = btn.attr('data-next-page');
    var id = btn.attr('data-show-more');
    var bx_ajax_id = btn.attr('data-ajax-id');
    var block_id = "#comp_" + bx_ajax_id;
    $('.contentPageMore').remove();
    var data = {
        bxajaxid: bx_ajax_id
    };
    data['PAGEN_' + id] = page;
    $.ajax({
        type: "GET",
        url: window.location.href,
        data: data,
        timeout: 3000,
        success: function (data) {
            $('.contentMore').last().after($(data).find('.contentMore'));
            $('.contentMore').last().after($(data).find('.contentPageMore'));
        }
    });
});



$(document).on('click', '[data-show-more-news]', function () {
    var btn = $(this);
    var page = btn.attr('data-next-page');
    var id = btn.attr('data-show-more-news');
    var bx_ajax_id = btn.attr('data-ajax-id');
    var block_id = "#comp_" + bx_ajax_id;
    $('.contentPageMoreNews').remove();
    var data = {
        bxajaxid: bx_ajax_id
    };
    data['PAGEN_' + id] = page;
    $.ajax({
        type: "GET",
        url: window.location.href,
        data: data,
        timeout: 3000,
        success: function (data) {
            $('.container-block.base').last().after(data);
        }
    });
});