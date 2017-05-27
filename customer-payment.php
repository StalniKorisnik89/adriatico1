<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adriatico-Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Scroll effect -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/component.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link href="assets/css/hover-min.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>

</head>
<body data-spy="spyscroll" data-target=".button-group">

<!-- Loader gif -->
<div id="loading"></div>
<!-- Loader gif -->

<div class="container-fluid no-padding search-single-header">
    <div class="row no-margin">
        <nav class="navbar navbar-inverse navbar-static-top sticky-top">
            <div class="container-fluid no-padding relative">
                <div class="desktopNav">
                    <div class="navbar-header none-mq">
                        <a class="navbar-brand" href="/elsan">
                            <img src="assets/img/adriatico%20travel%20logo.png" alt="">
                        </a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Destination</a>
                            <ul>
                                <li><a href="#">Home page 01</a></li>
                                <li><a href="#">Home page 02 <i class="fa fa-caret-right"
                                                                aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a href="#">CACAK <i class="fa fa-caret-right"
                                                                 aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="#">RACING</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">KRALJEVO</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Home page 03</a></li>
                                <li><a href="#">Home page 04</a></li>
                                <li><a href="#">Home page 05 <i class="fa fa-caret-right"
                                                                aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a href="#">CACAK <i class="fa fa-caret-right"
                                                                 aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="#">RACING</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">KRALJEVO</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Accommodation</a></li>
                        <li><a href="#">Trips</a></li>
                        <li><a href="#">Activity</a></li>
                        <li><a href="#">Transfer/Transport </a></li>
                        <li><a href="#">Rent a …</a></li>
                        <li class="my-dropdown padd-top">
                            <button onclick="myFunction()" class="dropbtn">
                                <a>
                                    MORE<span class="glyphicon glyphicon-menu-hamburger"></span>
                                </a>
                                <div id="myDropdown" class="my-dropdown-content">
                                    <a href="#">Link 1</a>
                                    <a href="#">Link 2</a>
                                    <a href="#">Link 3</a>
                                </div>
                            </button>
                        </li>
                        <li>
                            <a class="white" data-toggle="modal" data-target="#modal-login">
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="dropdown shop">
                            <a class="white">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                            <div class="col-xs-12">
                                <div id="myDropdown" class="dropdown-content">
                                    <div class="card-container">
                                        <div class="card">
                                            <h4>SHOPPING CARD</h4>
                                            <div class="thumb-container">
                                                <a href="">
                                                    <img class="img-style" src="assets/img/tw.png">
                                                </a>
                                            </div>
                                            <div class="text-holder">
                                                <h6 class="padd-bot">WEEKEND AT PARADISE</h6>
                                                <h6 class="price">$124</h6>
                                            </div>
                                            <span class="amount">x 4</span>
                                        </div>
                                        <div class="card">
                                            <h4>SHOPPING CARD</h4>
                                            <div class="thumb-container">
                                                <a href="">
                                                    <img class="img-style" src="assets/img/tw.png">
                                                </a>
                                            </div>
                                            <div class="text-holder">
                                                <h6 class="padd-bot">WEEKEND AT PARADISE</h6>
                                                <h6 class="price">$124</h6>
                                            </div>
                                            <span class="amount">x 4</span>
                                        </div>
                                        <div class="card">
                                            <h4>SHOPPING CARD</h4>
                                            <div class="thumb-container">
                                                <a href="">
                                                    <img class="img-style" src="assets/img/tw.png">
                                                </a>
                                            </div>
                                            <div class="text-holder">
                                                <h6 class="padd-bot">WEEKEND AT PARADISE</h6>
                                                <h6 class="price">$124</h6>
                                            </div>
                                            <span class="amount">x 4</span>
                                        </div>
                                        <div class="card-footer">
                                            <h4 class="total">$ 2400</h4>
                                            <a href="Cart.aspx.html">
                                                <h4 class="btn-card">VIEW CARD</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="bts-ex-1" class="selectpicker">
                                <button data-id="prov" type="button" class="btn-block dropdown-toggle">
                                    <span class="placeholder"><img src="assets/img/1493319588_flag-united-kingdom.png" alt=""></span>
                                    <span class="caret"></span>
                                </button>
                                <div class="dropdown-menu">
                                    <ul class="list-unstyled">
                                        <li class="items" data-value="1"><img src="assets/img/1493319695_flag-sweden2x.png" alt=""></li>
                                        <li class="items" data-value="2"><img src="assets/img/1493319788_flag-germany.png" alt=""></li>
                                        <li class="items" data-value="3"><img src="assets/img/1493319695_flag-sweden2x.png" alt=""></li>
                                        <li class="items" data-value="4"><img src="assets/img/1493319905_flag-france.png" alt=""></li>
                                    </ul>
                                </div>
                                <input type="hidden" name="bts-ex-1" value="">
                            </div>
                        </li>
                        <li data-toggle="modal" data-target="#myModal">
                            <a class="white">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <ul class="nav navbar-nav vissible-mq block-mq">
                    <li style="z-index: 99999">
                        <a class="white" data-toggle="modal" data-target="#modal-login">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li style="z-index: 9999" data-toggle="modal" data-target="#myModal">
                        <a class="white">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
                <!-- /dropdown menu -->


            </div>
            <!-- mobile menu -->
            <div class="demo-2">
                <div class="main">
                    <div class="column">
                        <div id="dl-menu" class="dl-menuwrapper">
                            <button class="dl-trigger">Open Menu</button>
                            <ul class="dl-menu">
                                <li>
                                    <a href="#">Fashion</a>
                                    <ul class="dl-submenu">
                                        <li>
                                            <a href="#">Men</a>
                                            <ul class="dl-submenu">
                                                <li><a href="#">Shirts</a></li>
                                                <li><a href="#">Jackets</a></li>
                                                <li><a href="#">Chinos &amp; Trousers</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">T-Shirts</a></li>
                                                <li><a href="#">Underwear</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Women</a>
                                            <ul class="dl-submenu">
                                                <li><a href="#">Jackets</a></li>
                                                <li><a href="#">Knits</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Dresses</a></li>
                                                <li><a href="#">Blouses</a></li>
                                                <li><a href="#">T-Shirts</a></li>
                                                <li><a href="#">Underwear</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Children</a>
                                            <ul class="dl-submenu">
                                                <li><a href="#">Boys</a></li>
                                                <li><a href="#">Girls</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Electronics</a>
                                    <ul class="dl-submenu">
                                        <li><a href="#">Camera &amp; Photo</a></li>
                                        <li><a href="#">TV &amp; Home Cinema</a></li>
                                        <li><a href="#">Phones</a></li>
                                        <li><a href="#">PC &amp; Video Games</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Furniture</a>
                                    <ul class="dl-submenu">
                                        <li>
                                            <a href="#">Living Room</a>
                                            <ul class="dl-submenu">
                                                <li><a href="#">Sofas &amp; Loveseats</a></li>
                                                <li><a href="#">Coffee &amp; Accent Tables</a></li>
                                                <li><a href="#">Chairs &amp; Recliners</a></li>
                                                <li><a href="#">Bookshelves</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Bedroom</a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="#">Beds</a>
                                                    <ul class="dl-submenu">
                                                        <li><a href="#">Upholstered Beds</a></li>
                                                        <li><a href="#">Divans</a></li>
                                                        <li><a href="#">Metal Beds</a></li>
                                                        <li><a href="#">Storage Beds</a></li>
                                                        <li><a href="#">Wooden Beds</a></li>
                                                        <li><a href="#">Children's Beds</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Bedroom Sets</a></li>
                                                <li><a href="#">Chests &amp; Dressers</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Home Office</a></li>
                                        <li><a href="#">Dining &amp; Bar</a></li>
                                        <li><a href="#">Patio</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Jewelry &amp; Watches</a>
                                    <ul class="dl-submenu">
                                        <li><a href="#">Fine Jewelry</a></li>
                                        <li><a href="#">Fashion Jewelry</a></li>
                                        <li><a href="#">Watches</a></li>
                                        <li>
                                            <a href="#">Wedding Jewelry</a>
                                            <ul class="dl-submenu">
                                                <li><a href="#">Engagement Rings</a></li>
                                                <li><a href="#">Bridal Sets</a></li>
                                                <li><a href="#">Women's Wedding Bands</a></li>
                                                <li><a href="#">Men's Wedding Bands</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/img/1493319588_flag-united-kingdom.png" alt=""></a>
                                    <ul class="dl-submenu">
                                        <li><a href="#"><img src="assets/img/1493319695_flag-sweden2x.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/1493319788_flag-germany.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/1493319905_flag-france.png" alt=""></a></li>
                                    </ul>
                                </li>

                                <li class="dropdown shop shop-mobile">
                                    <a class="white">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </a>
                                    <div class="col-xs-12">
                                        <div id="myDropdown" class="dropdown-content dl-submenu">
                                            <div class="card-container">
                                                <div class="card">
                                                    <h4>SHOPPING CARD</h4>
                                                    <i class="fa fa-times-circle shop-close" aria-hidden="true"></i>
                                                    <div class="thumb-container">
                                                        <a href="">
                                                            <img class="img-style" src="assets/img/tw.png">
                                                        </a>
                                                    </div>
                                                    <div class="text-holder">
                                                        <h6 class="padd-bot">WEEKEND AT PARADISE</h6>
                                                        <h6 class="price">$124</h6>
                                                    </div>
                                                    <span class="amount">x 4</span>
                                                </div>
                                                <div class="card">
                                                    <h4>SHOPPING CARD</h4>
                                                    <div class="thumb-container">
                                                        <a href="">
                                                            <img class="img-style" src="assets/img/tw.png">
                                                        </a>
                                                    </div>
                                                    <div class="text-holder">
                                                        <h6 class="padd-bot">WEEKEND AT PARADISE</h6>
                                                        <h6 class="price">$124</h6>
                                                    </div>
                                                    <span class="amount">x 4</span>
                                                </div>
                                                <div class="card">
                                                    <h4>SHOPPING CARD</h4>
                                                    <div class="thumb-container">
                                                        <a href="">
                                                            <img class="img-style" src="assets/img/tw.png">
                                                        </a>
                                                    </div>
                                                    <div class="text-holder">
                                                        <h6 class="padd-bot">WEEKEND AT PARADISE</h6>
                                                        <h6 class="price">$124</h6>
                                                    </div>
                                                    <span class="amount">x 4</span>
                                                </div>
                                                <div class="card-footer">
                                                    <h4 class="total">$ 2400</h4>
                                                    <a href="Cart.aspx.html">
                                                        <h4 class="btn-card">VIEW CARD</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- /dl-menuwrapper -->
                    </div>
                </div>
            </div><!-- /container -->
    </div>
    </nav>
    <!-- Header Background Video -->
    <div class="video-holder">
        <img src="assets/img/banner-3.jpg">
        <div class="clearfix"></div>

    </div>
    <!-- /Header Background Video -->

    <div class="title-container">
        <div class="col-md-8 col-sm-8 col-xs-12 no-padding">
            <div class="col-xs-12 no-padding">
                <div class="detail-label">Resort</div>
            </div>
            <h1>Bahamas Resort</h1>
            <a href="">
                <span class="claim">Claim</span>
            </a>
            <div class="detail-banner-address">
                <i class="fa fa-map-marker"></i>
                <a href="">Long Island</a>
                <span> / </span>
                <a href="#">Nassau County</a>
            </div>
            <div class="rating-stars">
                <span class="glyphicon .glyphicon-star-empty glyphicon-star"></span>
                <span class="glyphicon .glyphicon-star-empty glyphicon-star"></span>
                <span class="glyphicon .glyphicon-star-empty glyphicon-star"></span>
                <span class="glyphicon .glyphicon-star-empty glyphicon-star"></span>
                <span class="glyphicon .glyphicon-star-empty glyphicon-star"></span>
            </div>
            <div>
                <a href="#" class="share-listing">
                    <i class="fa fa-share-alt"></i>
                    <span>Share</span>
                </a>
                <a href="#" class="share-listing">
                    <i class="fa fa-heart-o"></i><span>Add to favorites</span>
                </a>
                <a href="#" class="share-listing">
                    <i class="fa fa-print"></i> Print
                </a>
            </div>
            <ul class="list-inline">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Hotels</a>
                </li>
                <li>
                    <a href="#">Montenegro</a>
                </li>
                <li>
                    <a href="#">Budva</a>
                </li>
                <li>
                    <a href="#">Best hotels</a>
                </li>
            </ul>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12 no-padding center-500">
            <div class="detail-banner-price">
                <span>Price:</span>
                <span class="detail-banner-price-value">from $2,000 per night</span>
            </div>
            <div class="location">
                <span class="location-container">
                    <a href="">
                         <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </a>
                </span>
                <span class="location-container">
                     <a href="">
                        <i class="fa fa-street-view" aria-hidden="true"></i>
                     </a>
                </span>
                <span class="location-container">
                     <a href="">
                        <i class="fa fa-camera" aria-hidden="true"></i>
                     </a>
                </span>
            </div>
        </div>
    </div>


</div><!-- /row-->


<!-- CONTENT -->
<div class="clearfix"></div>
<div class="customer-payment">
    <div class="container-fluid search-single">
        <!-- left side -->
        <div class="row relative naw-row">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#about">ABOUT & DESKRIPTION</a></li>
                <li><a data-toggle="tab" href="#price">AVAILABILITY & PRICE</a></li>
                <li><a data-toggle="tab" href="#itinerary">ITINERARY</a></li>
                <li><a data-toggle="tab" href="#notes">NOTES</a></li>
                <li><a data-toggle="tab" href="#other">OTHER INFO</a></li>
            </ul>
        </div>

        <div class="tab-content">
            <div id="about" class="tab-pane fade active" style="opacity: 1">
                <?php
                {
                    include "description.php";
                }
                ?>
            </div>
            <div id="price" class="tab-pane fade">
                <?php
                {
                    include "payment.php";
                }
                ?>
            </div>
            <div id="itinerary" class="tab-pane fade">
                <?php
                {
                    include "itinerary.php";
                }
                ?>
            </div>
            <div id="notes" class="tab-pane fade">
                <?php
                {
                    include "notes.php";
                }
                ?>
            </div>
            <div id="other" class="tab-pane fade">
                <?php
                {
                    include "other.php";
                }
                ?>
            </div>
        </div>

    </div><!-- /container-fluid -->
</div><!-- customer-payment -->
<!-- /CONTENT -->


<!-- FOOTER -->
<?php
{
    include "footer.php";
}
?>
<!-- /FOOTER -->

<!-- Modal-search -->
<?php
{
    include "modal-search.php";
}
?>
<!-- /Modal-search -->

<!--<!-- Modal -->
<?php
{
    include "sign-up-form.php";
}
?>
<!--<!-- /Modal -->


</div><!-- /container-fluid -->


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/viewportchecker.js"></script>
<script src="assets/js/rating-stars.js"></script>
<script src="assets/js/price-box.js"></script>
<script src="assets/js/modernizr.custom.js"></script>
<script src="assets/js/jquery.dlmenu.js"></script>


<script>
    $(function() {
        $( '#dl-menu' ).dlmenu({
            animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }
        });
    });
</script>
<script>
    /* Loader gif */

    $(window).ready(function () {
        $('#loading').hide();
    });

    $('#map').css("display", "none");
    $('.form-map').css("display", "none");
    $('.search-on-map').click(function () {
        $('#map').css("display", "block");
        $('.form-map').css("display", "block")
    })
</script>

<script>
    var navbar = $(".navbar");
    var menuItems = $(".navbar").find("a");
    var logo = $(".logo");
    var toggleButton = $("#toggle-button");
    var click = $(".click")
    var navIcon = $("#nav-icon2 span")
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        console.log(scroll);

        if (scroll >= 100) {
            toggleButton.css("marginTop", "8px");
            navbar.css("height", "60px");
            navbar.css("paddingTop", "5px");
            menuItems.removeClass("white");
            menuItems.addClass("black-font");
            navbar.addClass("white-back");
            logo.attr("src", "assets/img/logo-services.png");
            click.css("color", "black");
            navIcon.css("background", "black");
        }
        else if (scroll <= 99) {
            toggleButton.css("marginTop", "");
            navbar.css("height", "");
            navbar.css("paddingTop", "");
            menuItems.addClass("white");
            menuItems.removeClass("black-font");
            navbar.removeClass("white-back");
            logo.attr("src", "assets/img/logo.png");
            click.css("color", "white");
            navIcon.css("background", "white");
        }
    });

    $(".my-dropdown a").click(function () {
        $(".my-dropdown-content").toggle("slow", function () {
            // Animation complete.
        });
    });

    $("#hotel-adv").click(function () {
        $("#panel-hotel").slideToggle("slow", function () {
            // Animation complete.
        });
    });

    /* datepicker */
    $(document).ready(
            /* This is the function that will get executed after the DOM is fully loaded */
        function () {
            $("#datepicker").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-2").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
        }
    );

    /* counter */
    function modify_qty(val) {
        var qty = document.getElementById('qty').value;
        var new_qty = parseInt(qty, 10) + val;

        if (new_qty < 0) {
            new_qty = 0;
        }

        document.getElementById('qty').value = new_qty;
        return new_qty;
    }

    $("#sobe").click(function () {
        $(".box").slideToggle("slow", function () {
            // Animation complete.
        });
    });

    /* tooltip*/

    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip({animation: true, placement: "bottom"});
    });

    /*Scroll effects*/

    jQuery(document).ready(function () {
        if ($(window).width() > 768) {
            jQuery('.logo-animation').addClass("my-hidden").viewportChecker({
                classToAdd: 'my-visible animated bounceInDown', // Class to add to the elements when they are visible

                offset: 150
            });
            jQuery('.welcome').addClass("my-hidden").viewportChecker({
                classToAdd: 'my-visible animated fadeInDown', // Class to add to the elements when they are visible

                offset: 150
            });
            jQuery('.where').addClass("my-hidden").viewportChecker({
                classToAdd: 'my-visible animated bounceInRight', // Class to add to the elements when they are visible
                offset: 150
            });
            jQuery('.search-on-map').addClass("my-hidden").viewportChecker({
                classToAdd: 'my-visible animated fadeInUp', // Class to add to the elements when they are visible
                offset: 150
            });
        }
    });

</script>

<script>
    $(document).ready(function () {
        $(".click").click(function () {
            $(".panel-group").slideToggle(700);
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('#nav-icon2').click(function () {
            $(this).toggleClass('open');
        });
    });

    $(document).ready(function(){
        $(".shop").click(function(){
            $(".card-container").fadeToggle(500);
        });
    });

</script>




</body>
</html>
