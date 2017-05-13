$(function() {
    //Simple filter controls
    $('.simplefilter li').click(function() {
        $('.simplefilter li').removeClass('active');
        $(this).addClass('active');
    });
    //Multifilter controls
    $('.multifilter li').click(function() {
        $(this).toggleClass('active');
    });
    //Shuffle control
    $('.shuffle-btn').click(function() {
        $('.sort-btn').removeClass('active');
    });
    //Sort controls
    $('.sort-btn').click(function() {
        $('.sort-btn').removeClass('active');
        $(this).addClass('active');
    });
    $('.mobil-profile').on('click', function () {
        var menu = $('.fb-menu-mobile');
        if ( $(menu).is( ":hidden" ) ) {
            $(menu).slideDown( "slow" );
        } else {
            $(menu).hide('slow');
        };
    })
});

$(function() {
    var today = new Date();
    $('input[name="daterange"]').daterangepicker({
//                singleDatePicker: true,
            autoUpdateInput: false,
            showDropdowns: false,
            autoApply: false,
            opens: "center",
            minDate: today,
            autoupdate: true,
            "drops": "up"
        },

        // Construcción de URL de Roiback
        function(start, end, label) {

            var startD = start.format('YYYY-MM-DD');
            var endD = end.format('YYYY-MM-DD');
            var st = start.format('MMM DD YYYY');
            var en = end.format('MMM DD YYYY');
            var rbhotel = $('input.url-builder').data('rbhotel');

            //console.log(endD);

            $('input[name="daterange"]').parent().attr('action', 'http://booking.villagroupresorts.com/bookcore/availability/'+ rbhotel +'/'+ startD +'/'+ endD +'/');

            $('input[name="daterange"]').on('apply.daterangepicker', function() {
                $(this).val('From ' + st + ' To ' + en);
                $('input.sendtorb').prop('disabled', false);
            });


            $('input[name="daterange"]').on('cancel.daterangepicker', function() {
                $(this).val('');
                $('input.sendtorb').prop('disabled', true);
            });

            $('.close-calendar').on('click', function(){
                $('input.[name="daterange"]').val('');
                $('input.sendtorb').prop('disabled', true);
            });

        });
});