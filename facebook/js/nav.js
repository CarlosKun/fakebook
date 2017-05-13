/**
 * Created by webpro1-vdpflm on 07/04/2017.
 */
(function () {
    var $side_menu = $('.menu-navigator');
    var $close = $('.close-second-menu');
    $('.nav-menu-mobile').on('click', function () {
        if(!$(this).hasClass('hide-menu')){
            $side_menu.show("slow");
            $(this).addClass('hide-menu');

        }else{
            $side_menu.hide('slow');
            $(this).removeClass('hide-menu');
            $close.css('display', 'none');
        }
    });
    $('.soons').on('click', function () {
        var $widh = $( window ).width();
        if($widh < 425 && (!$close.hasClass('exit'))){
            $close.css('display', 'block').addClass('exit');
        }
    });
    $($close).on('click', function () {
        $(this).css('display', 'none').removeClass('exit');
    })

    $('#promoModal').on('show.bs.modal', function (event) {
        var promo = $(event.relatedTarget); // Button that triggered the modal
        var img  = promo.find('media-left img').attr('src');
        console.log(img);
        var modal = $(this);
        modal.find('.image-modal img').attr('src', img);
    })

})();