/**
 * Created by webpro1-vdpflm on 23/05/2017.
 */
(function () {
    var cookies = [];
    var $item = '';
    var $counter = $('#counter');
    var $offers = $('#saved-offers');

    function like(promoLike, resort) {
        var lower = promoLike.toLowerCase();
        var rLower = resort.toLowerCase();
        var clear = lower.replace(' ', '-');
        var promoCookie = clear+"-"+rLower+'-cookie';

        $item = '<a href=""><li class="fb-item">'+ promoLike +'</li></a>';
        //ADD ELEMENT
        $($offers).after($item);
        cookies.push(promoCookie);
        Cookies.set(promoCookie, promoLike);
    }

    function disLike(promoLike, resort) {
        var lower = promoLike.toLowerCase();
        var rLower = resort.toLowerCase();
        var clear = lower.replace(' ', '-');
        var promoCookie = clear+"-"+rLower+'-cookie';
        //Remove
        var remove = cookies.indexOf(promoCookie);
        cookies.splice(remove,1);
        if(cookies.length <= 0){
            $counter.css('display', 'none');
        }else{
            $counter.text(cookies.length);
        }
        Cookies.remove(promoCookie);
    }

    $('.favorite img').on('click', function () {
        // DATAS
        var iLiked = $(this).data('promo');
        var resort = $(this).data('resort');

        if($(this).hasClass("fav")){
            disLike(iLiked, resort);
            $(this).attr('src', "images/thumbs-up.png").removeClass('fav');
        }else{
            like(iLiked, resort);
            if (cookies.length > 0){
                $counter.css('display', 'inline');
                $counter.text(cookies.length);
            }
            $(this).attr('src', "images/thumbs-up2.png").addClass('fav');
        }
    });

})();