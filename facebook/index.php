<?php include 'functions/Db.php' ;
$date =  date("Y-m-d H:i");
$counter = 1;
$resorts_name = array(
    'VDPCSL'  => 'Villa del Palmar Cabo San Lucas',
    'VDACSL'  => 'Villa del Arco Cabo San Lucas',
    'VLECSL'  => 'Villa la Estancia Cabo San Lucas',
    'VDMPV'  => 'Villa del Mar Puerto Vallarta',
    'VDPPV'  => 'Villa del Palmar Puerto Vallarta',
    'VDPFLM'  => 'Villa del Palmar Flamingos',
    'VLERN'  => 'Villa la Estancia Riviera Nayarit',
);
$db = Db::getInstance(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="stylesheet" href="css/scroll-animate.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/daterangepicker.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top cd-auto-hide-header">
    <a class="link-home" href="http://www.villagroupresorts.com"><div class="img-home"></div></a>
    <div class="close-second-menu"><img src="images/cancel.png" alt=""></div>
    <div class="brand-menu cd-primary-nav">
        <ul class="phone-menu">
            <li><img src="images/share.png" alt="">
                <ul class="list-social">
                    <li><a href="http://www.facebook.com/villagroup" target="_blank"><img src="images/facebook.png" alt=""></a></li>
                    <li><a href="http://www.twitter.com/villagroup" target="_blank"><img src="images/twitter.png" alt=""></a></li>
                    <li><a href="https://www.instagram.com/villagroupresorts/" target="_blank"><img src="images/instagram.png" alt=""></a></li>
                    <li><a href="http://www.villagroupresorts.com/news/" target="_blank"><img src="images/blogger.png" alt=""></a></li>
                    <li><a href="https://plus.google.com/116325984983783715126" target="_blank"><img src="images/google-plus.png" alt=""></a></li>
                    <li><a href="http://www.youtube.com/VillaGroupResorts" target="_blank"><img src="images/youtube.png" alt=""></a></li>
                </ul>
            </li>
        </ul>
        <ul class="lang-menu">
            <?php   /////////////////////////////////// FACEBOOK END////////////////////////////////////////////  ?>
            <li class="login-fb">
                <img src="images/Donkey_Kong_Profile_Artwork.jpg" alt="" class="fb-img">
                <div class="user-name">Hi Donkey!</div>
                <div>
                    <span id="counter">2</span>
                </div>
                <span><img src="images/arrow-down-sign-to-navigate.png" class="fb-arrow" alt=""></span>
                <ul>
                    <img class="up-arrow" src="images/drop-up-arrow.png" alt="">
                    <a id="saved-offers" href="#!"><li>Your saved offers</li></a>
                    <a href="#!"><li class="fb-logout fb-item">Log out</li></a>
                </ul>
            </li>
            <?php  //////////////////////////////////// FACEBOOK END////////////////////////////////////////////  ?>
            <li><a href="tel:018006818150" class="number"><span>USA </span>1 800 831 1191</a></li>
            <li><a href="#!" class="number">ES</a></li>
            <li><a href="tel:018006818150" class="phone-icon"><img src="images/telephone.png" alt=""></a></li>
            <li class="nav-menu-mobile"><a href="#!"><img src="images/menu.png" alt=""></a></li>
        </ul>
    </div>
    <ul class="menu-navigator cd-secondary-nav">
        <li class=""><a href="http://www.villagroupresorts.com">Home</a></li>
        <li class="soons"><a href="#!">Destinations<span class="img-span"><img class="arrow-menu" src="images/arrow-down-sign-to-navigate.png" alt=""></span></a>
            <ul>
                <li><a href="http://www.villagroupresorts.com/destinations/cabo-san-lucas">Los Cabos</a></li>
                <li><a href="http://www.villagroupresorts.com/destinations/puerto-vallarta">Puerto Vallarta</a></li>
                <li><a href="http://www.villagroupresorts.com/destinations/riviera-nayarit">Riviera Nayarit</a></li>
                <li><a href="http://www.villagroupresorts.com/destinations/cancun">Cancun</a></li>
                <li><a href="http://www.villagroupresorts.com/destinations/loreto">Islas de Loreto</a></li>
            </ul>
        </li>
        <li class="soons"><a href="#!">Resorts<span class="img-span"><img class="arrow-menu" src="images/arrow-down-sign-to-navigate.png" alt=""></span></a>
            <ul class="images-destinos">
                <div>
                    <li id="vdplc">
                        <div class="opacity-menu2">
                            <a href="http://www.villagroupresorts.com/resorts/villa-del-palmar-cabo"><img src="images/vdplc.png" alt="">Villa del Palmar Cabo San Lucas</a>
                        </div>
                        <div class="opacity-menu">
                            <a href="http://www.villagroupresorts.com/resorts/villa-del-palmar-cabo"><img src="images/vdplc.png" alt="">Villa del Palmar Cabo San Lucas</a>
                        </div>
                    </li>
                    <li id="vda">
                        <div class="opacity-menu2">
                            <a href="http://www.villagroupresorts.com/resorts/villa-del-arco"><img src="images/vda.png" alt="">Villa del Arco Cabo San Lucas</a>
                        </div>
                        <div class="opacity-menu">
                            <a href="http://www.villagroupresorts.com/resorts/villa-del-arco"><img src="images/vda.png" alt="">Villa del Arco Cabo San Lucas</a>
                        </div>
                    </li>
                    <li id="vlec">
                        <div class="opacity-menu2">
                            <a href="http://www.villagroupresorts.com/resorts/villa-la-estancia-cabo"><img src="images/vlelc.png" alt="">Villa La Estancia Los Cabos</a>
                        </div>
                        <div class="opacity-menu">
                            <a href="http://www.villagroupresorts.com/resorts/villa-la-estancia-cabo"><img src="images/vlelc.png" alt="">Villa La Estancia Los Cabos</a>
                        </div>
                    </li>
                </div>
                <div>
                    <li id="vdm">
                        <div class="opacity-menu2">
                            <a href="http://www.villagroupresorts.com/resorts/villa-del-mar"><img src="images/vdm.png" alt="">Villa del Mar Puerto Vallarta</a>
                        </div>
                        <div class="opacity-menu">
                            <a href="http://www.villagroupresorts.com/resorts/villa-del-mar"><img src="images/vdm.png" alt="">Villa del Mar Puerto Vallarta</a>
                        </div>
                    </li>
                    <li id="vdppv">
                        <div class="opacity-menu2">
                            <a href="http://www.villagroupresorts.com/resorts/villa-del-palmar-puerto-vallarta"><img src="images/vdppv.png" alt="">Villa del Palmar Puerto Vallarta</a>
                        </div>
                        <div class="opacity-menu">
                            <a href="http://www.villagroupresorts.com/resorts/villa-del-palmar-puerto-vallarta"><img src="images/vdppv.png" alt="">Villa del Palmar Puerto Vallarta</a>
                        </div>
                    </li>
                    <li id="vdpf">
                        <div class="opacity-menu2">
                            <a href="http://www.villagroupresorts.com/resorts/villa-del-palmar-flamingos"><img src="images/vdpfl.png" alt="">Villa del Palmar Flamingos Riviera Nayarit</a>
                        </div>
                        <div class="opacity-menu">
                            <a href="http://www.villagroupresorts.com/resorts/villa-del-palmar-flamingos"><img src="images/vdpfl.png" alt="">Villa del Palmar Flamingos Riviera Nayarit</a>
                        </div>
                    </li>
                    <li id="vlern">
                        <div class="opacity-menu2">
                            <a href="http://www.villagroupresorts.com/resorts/villa-la-estancia-riviera-nayarit"><img src="images/vlern.png" alt="">Villa La Estancia Riviera Nayarit</a>
                        </div>
                        <div class="opacity-menu">
                            <a href="http://www.villagroupresorts.com/resorts/villa-la-estancia-riviera-nayarit"><img src="images/vlern.png" alt="">Villa La Estancia Riviera Nayarit</a>
                        </div>
                    </li>
                </div>
                <li id="vdpc">
                    <div class="opacity-menu2">
                        <a href="http://www.villagroupresorts.com/resorts/villa-del-palmar-cancun"><img src="images/vdpcn.png" alt="">Villa del Palmar Cancún</a>
                    </div>
                    <div class="opacity-menu">
                        <a href="http://www.villagroupresorts.com/resorts/villa-del-palmar-cancun"><img src="images/vdpcn.png" alt="">Villa del Palmar Cancún</a>
                    </div>
                </li>
                <li id="vdpl">
                    <div class="opacity-menu2">
                        <a href="http://www.villagroupresorts.com/resorts/villa-del-palmar-loreto"><img src="images/vdplto.png" alt="">Villa del Palmar at the Islands of Loreto</a>
                    </div>
                    <div class="opacity-menu">
                        <a href="http://www.villagroupresorts.com/resorts/villa-del-palmar-loreto"><img src="images/vdplto.png" alt="">Villa del Palmar at the Islands of Loreto</a>
                    </div>
                </li>
            </ul>
        </li>
        <li class="soons"><a href="#!">Spa collection<span class="img-span"><img class="arrow-menu" src="images/arrow-down-sign-to-navigate.png" alt=""></span></a>
            <ul>
                <li><a href="http://www.villagroupresorts.com/resorts/villa-del-arco/the-desert-spa">The Desert Spa </a></li>
                <li><a href="http://www.villagroupresorts.com/resorts/villa-del-palmar-cancun/spa">The Village Spa</a></li>
                <li><a href="http://www.villagroupresorts.com/resorts/villa-del-palmar-loreto/spa">Sabila Spa </a></li>
                <li><a href="http://www.villagroupresorts.com/resorts/villa-del-palmar-puerto-vallarta/bay-breeze-spa">Bay Breeze Spa</a></li>
                <li><a href="http://www.villagroupresorts.com/resorts/villa-del-palmar-flamingos/tatewari-spa">Tatewari Spa</a></li>
            </ul>
        </li>
        <li class="soons"><a href="#!">Our brands<span class="img-span"><img class="arrow-menu" src="images/arrow-down-sign-to-navigate.png" alt=""></span></a>
            <ul>
                <li><a href="http://www.villalaestancia.com">Villa la Estancia</a></li>
            </ul>
        </li>
        <li class="soons"><a href="#!">weddings and meetings<span><img class="arrow-menu" src="images/arrow-down-sign-to-navigate.png" alt=""></span></a>
            <ul>
                <li><a href="http://www.villagroupresorts.com/groups/weddings">Weddings<span class="img-span"></a></li>
                <li><a href="http://www.villagroupresorts.com/meetings">Meetings<span class="img-span"></a></li>
            </ul>
        </li>
    </ul>
    <?php ///////////////////////////////////////////// FACEBOOK MOBILE////////////////////////////////////////////// ?>
    <div class="mobil-profile">
        <img src="/images/fb/Donkey_Kong_Profile_Artwork.jpg" alt="">
        <span>Hi Donkey!</span>
        <div>
            <span id="counter">2</span>
            <img src="images/arrow-down-sign-to-navigate.png" alt="">
        </div>
    </div>
    <ul class="fb-menu-mobile">
        <div>
            <a href=""><li>Your save offers</li></a>
            <a href=""><li class="fb-item">Villa Saver</li></a>
            <a href=""><li class="fb-item"> Mother´s Day</li></a>
            <a href=""><li class="fb-item">Springtacular sale</li></a>
            <a href=""><li class="fb-item">Log out</li></a>
        </div>
    </ul>
    <?php ///////////////////////////////////////////// FACEBOOK MOBILE END ///////////////////////////////////////// ?>
</nav>

<div class="fb-wrapper">
    <div class="container">
        <aside class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">Select your Resorts</div>
                <div class="panel-body">
                    <div class="fb-destination simplefilter">
                        <!--<li data-filter="10" class="filter active"><a href="#inicio">Home</a></li> -->
                        <h4>Los Cabos</h4>
                        <li data-filter="1" class="filter active"><img src="images/fb_vdplc.png" alt=""><a href="#!">VILLA DEL PALMAR CABO SAN LUCAS</a></li>
                        <li data-filter="2" class="filter"><img src="images/fb_vdalc.png" alt=""><a href="#!">VILLA DEL ARCO CABO SAN LUCAS</a></li>
                        <li data-filter="3" class="filter"><img src="images/fb_vlelc.jpg" alt=""><a href="#!">VILLA LA ESTANCIA LOS CABOS</a></li>
                    </div>
                    <div class="fb-destination">
                        <h4>Vallarta - Nayarit</h4>
                        <li data-filter="4" class="filter"><img src="images/fb_vdppv.png" alt=""><a href="#!">VILLA DEL MAR PUERTO VALLARTA</a></li>
                        <li data-filter="5" class="filter"><img src="images/fb_vdppv.png" alt=""><a href="#!">VILLA DEL PALMAR PUERTO VALLARTA</a></li>
                        <li data-filter="6" class="filter"><img src="images/fb_flamingos.png" alt=""><a href="#!">VILLA DEL PALMAR FLAMINGOS RIVIERA NAYARIT</a></li>
                        <li data-filter="7" class="filter"><img src="images/fb_vlern.png" alt=""><a href="#!">VILLA LA ESTANCIA RIVIERA NAYARIT</a></li>
                    </div>
                    <div class="fb-destination">
                        <h4>Cancun</h4>
                        <li data-filter="7" class="filter"><img src="images/fb_cancun.png" alt=""><a href="#inicio">VILLA DEL PALMAR CANCÚN</a></li>
                    </div>
                    <div class="fb-destination">
                        <h4>Loreto</h4>
                        <li data-filter="8" class="filter"><img src="images/fb_loreto.png" alt=""><a href="#inicio">VILLA DEL PALMAR AT THE ISLANDS OF LORETO</a></li>
                    </div>
                </div>
            </div>
        </aside>

        <section class="timeline col-sm-9 filtr-container" id="inicio">
            <?php foreach ($resorts_name as $i => $resort){
                $json = $db->getPromos($i);
                foreach ($json as $k => $single){
                    $available = $db->validateDays($single['star_date'], $single['end_date'], $date );
                    $validaPromo = $db->validatePromo($single['title']);
                    if ($available[1] > 0 and $available[0] <= 0 and $validaPromo){ ?>
                        <div class="thumbnail thumbnail-post filtr-item" data-category="<?= $counter ?>">
                            <div class="post-wrapper">
                                <div class="caption" data-toggle="modal" data-target="#promoModal">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#!" class="image-post">
                                                <img src="images/fb.png">
                                            </a>
                                            <img class="img-profile" src="images/Donkey_Kong_Profile_Artwork.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <a class="media-heading title-post" href="#"><?= $resorts_name[$single['Resort']]; ?></a>
                                        </div>
                                    </div>
                                    <p><span class="fb-title"><?= $single['title']." " ?></span><?= $single['sub_title']." ".$single['plus'] ?></p>
                                    <div class="img-flow">
                                        <a href="#!"><img src="images/promo.jpg" data-holder-rendered="true"  class="image-post-full"></a>
                                    </div>
                                    <div class="hidden-info">
                                        <span><?php $single['promocode'] ?></span>
                                    </div>
                                </div>
                                <div class="links-post">
                                    <div class="favorite">
                                        <img data-promo="<?= $single['title'] ?>" data-resort="<?= $single['Resort'] ?>" src="images/thumbs-up.png" alt="">
                                    </div>
                                    <div class="btn-terms" data-toggle="modal" data-target="#termsModal">
                                        <a class="btn btn-default" href="#!" role="button">Terms and conditions</a>
                                        <div class="hidden-info">
                                            <div>
                                                <?= $single['terms-conditions']['processed'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                } $counter++;
            } ?>
        </section>
    </div><!--#container-->
</div>

<div class="modal fade" id="promoModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="row modal-wrapper">
            <div class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></div>
            <div class="col-sm-12 col-md-6 col-lg-6 image-modal">
                <img src="" alt="" class="img-responsive">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 fb-modal-content">
                <img src="images/Donkey_Kong_Profile_Artwork.jpg" alt=""><h3 class="title-post">Donkey!</h3>
                <div>
                    <h3>Book now!</h3>
                    <form action="" id="frm-booking">
                        <input type="hidden" class="form-control item-form" value="Villa del Palmar Puerto Vallarta" readonly>
                        <h5>Villa del Palmar Puerto Vallarta</h5>
                        <input type="hidden" id="promocode" value="">
                        <input type="text" name="daterange" class="form-control item-form" value="<?= $today." - ".$tomorrow ?>" readonly=""/>
                        <input type="submit" class="form-control btn-book" value="check availability">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" data-backdrop=”static” data-keyboard=”false”>
    <div class="modal-dialog modal-lg" role="document">
        <div class="row modal-wrapper">
            <div class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></div>
            <div class="col-sm-12 terms-content">
                <h3>Terms and conditions</h3>
                <div></div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/nav.js"></script>
<script src="js/scroll-animate.js"></script>
<script src="js/jquery.filterizr.min.js"></script>
<script src="js/controls.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/js.cookie.js"></script>
<script src="js/cookies.js"></script>

<!-- Kick off Filterizr -->
<script type="text/javascript">
    $(function() {
        //Initialize filterizr with default options
        $('.filtr-container').filterizr('setOptions',{
            layout: 'sameWidth'
        });

        // Hiddes
        if(screen.width < 767){
            var body = $('.panel-body');
            var panel = $('.panel-heading');
            var lis = $(".fb-destination li");

            body.hide();
            lis.hide();

            $(panel).on('click',function () {
                if(body.is(":hidden")){
                    $(this).next().show(500);
                }else{
                    $(this).next().hide("slow");
                }
            });
            $('.fb-destination').on('click', function () {
                $(lis).slideUp(500);
                $(this).children('li').slideDown(200);
            });
            $('.filter').on('click', function () {
                $(panel).next().hide("slow");
            })
        }

    });
</script>
</body>
</html>
