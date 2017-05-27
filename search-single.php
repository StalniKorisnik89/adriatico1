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
                <div class="click">
                    <div id="nav-icon2">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="desktopNav">
                    <div class="navbar-header none-mq">
                        <a class="navbar-brand" href="#">ADRIATICO</a>
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
                                            <h4 class="btn-card hvr-shutter-out-horizontal">VIEW CARD</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="white" href="">
                                <i class="fa fa-flag-checkered" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li data-toggle="modal" data-target="#myModal">
                            <a class="white">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- dropdown menu -->
                <div class="visible-mq">
                    <div class="navbar-header vissible-mq">
                        <a class="navbar-brand" href="#">ADRIATICO</a>
                    </div>
                </div>
                <ul class="nav navbar-nav vissible-mq block-mq">
                    <li>
                        <a href="" class="white">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li data-toggle="modal" data-target="#myModal">
                        <a class="white">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
                <!-- /dropdown menu -->

                <div class="menu-xs">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="link-name" data-toggle="collapse" data-parent="#accordion">Destination</a>
                                    <div class="collapse-menu" href="#collapse1" data-toggle="collapse" style="">
                                        <a>
                                            <img style="" src="assets/img/down-button-sign.png"/>
                                        </a>
                                    </div>
                                </h4>
                            </div>

                            <!-- prvi collapse -->
                            <div id="collapse1" class="panel-collapse collapse panel-bgr">
                                <div class="panel-body">
                                    <div class=""><a href="">PRVI</a></div>
                                    <div class=""><a href="">PRVI</a></div>
                                    <!-- drugi collapse -->
                                    <div class="panel-heading no-padding">
                                        <div class="submenu-title">
                                            <div class="link-name" style="">
                                                <a>PRVI PADAJUCI</a>
                                            </div>

                                            <div class="collapse-menu" href="#collapse12" data-toggle="collapse"
                                                 style="">
                                                <a>
                                                    <img style="" src="assets/img/down-button-sign.png"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapse12" class="panel-collapse collapse panel-bgr-white">
                                        <div class="panel-body">
                                            <div class="">DRUGI</div>
                                            <!-- treci collapse -->
                                            <div class="panel-heading no-padding">
                                                <div class="submenu-title">
                                                    <div class="link-name" style="">
                                                        <a>DRUGI PADAJUCI</a>
                                                    </div>
                                                    <div class="collapse-menu" href="#collapse13" data-toggle="collapse"
                                                         style="">
                                                        <a>
                                                            <img style="" src="assets/img/down-button-sign.png"/>
                                                        </a>
                                                    </div>
                                                    <div id="collapse13" class="panel-collapse collapse panel-bgr">
                                                        <div class="panel-body">
                                                            <div class="hover-efect"><a href="">TRECI</a></div>
                                                            <div class="hover-efect"><a href="">TRECI</a></div>
                                                            <div class="hover-efect"><a href="">TRECI</a></div>
                                                            <div class="submenu-title">
                                                                <div class="link-name" style="">
                                                                    <a>TRECI PADAJUCI</a>
                                                                </div>
                                                                <div class="collapse-menu" href="#collapse14"
                                                                     data-toggle="collapse" style="">
                                                                    <a>
                                                                        <img style=""
                                                                             src="assets/img/down-button-sign.png"/>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- cetvrti collapse -->
                                                        <div id="collapse14"
                                                             class="panel-collapse collapse panel-bgr-white">
                                                            <div class="panel-body">
                                                                <div class=""><a href="">CETVRTI</a></div>
                                                                <div class="submenu-title">
                                                                    <div class="link-name" style="">
                                                                        <a>CETVRTI PADAJUCI</a>
                                                                    </div>
                                                                    <div class="collapse-menu" href="#collapse15"
                                                                         data-toggle="collapse" style="">
                                                                        <a>
                                                                            <img style=""
                                                                                 src="assets/img/down-button-sign.png"/>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- peti collapse -->
                                                                <div id="collapse15"
                                                                     class="panel-collapse collapse panel-bgr">
                                                                    <div class="panel-body">
                                                                        <div class=""><a href="">PETI</a></div>
                                                                        <div class=""><a href="">PETI</a></div>
                                                                        <div class=""><a href="">PETI</a></div>
                                                                        <div class=""><a href="">PETI</a></div>
                                                                    </div>
                                                                </div>
                                                                <!-- peti collapse -->
                                                                <div class=""><a href="">CETVRTI</a></div>
                                                                <div class=""><a href="">CETVRTI</a></div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <!-- /cetvrti collapse -->
                                                </div>
                                                <!-- /treci collapse -->
                                            </div>

                                            <div class="">DRUGI</div>
                                            <div class="">DRUGI</div>
                                        </div>
                                    </div>

                                    <!-- /drugi collapse -->
                                    <div class=""><a href="">PRVI</a></div>
                                </div>
                            </div>
                            <!-- /prvi collapse -->
                        </div><!-- /panel default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion"
                                       href="#collapse2">Accommodation</a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Trips</a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Activity</a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Transfer/Transport</a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Rent a...</a>
                                </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">More</a>
                                </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse8"><i
                                                class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                </h4>
                            </div>
                            <div id="collapse8" class="panel-collapse collapse">
                                <div class="panel-body shop">
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
                                            <h4 class="btn-card">VIEW CARD</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">EN</a>
                                </h4>
                            </div>
                            <div id="collapse9" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>

                    </div><!-- panel-group -->
                </div>

            </div>
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
</div><!-- /container-fluid -->

<!-- CONTENT -->
<div class="clearfix"></div>
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
        <div id="about" class="tab-pane fade in active">
            <h3>HOME</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
        </div>
        <div id="price" class="tab-pane fade">
            <!-- left side -->
            <div class="col-md-9 col-sm-12 col-xs-12">
                <h3>Availibility</h3>
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <span class="date">Tue, 29 Nov, 2016 - Wed, 30 Nov, 2016</span>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12 padd-r-0">
                    <select class="form-control">
                        <option>CHANGE SEARCH</option>
                        <option>Srbija</option>
                        <option>Crna Gora</option>
                        <option>Makedonija</option>
                        <option>Engleska</option>
                        <option>Nemacka</option>
                    </select>
                </div>
                <div class="col-xs-12 no-padding" style="margin: 20px 0">
                    <!-- FIRST ROOM -->
                    <div class="col-xs-12 no-padding holder">
                        <div class="col-md-5 col-sm-8 col-xs-12 no-padding single-width-70">
                            <div class="room mar-top-0">Room type/name</div>
                            <div class="col-md-12 col-sm-12 col-xs-12 no-padding bgr-EA">
                                <div class="col-md-5 col-sm-5 col-xs-12 no-padding">
                                    <div class="img-container">
                                        <img class="img-responsive img-cover hover-element"
                                             src="http://www.waituk.com/entrada/default/wp-content/uploads/2016/05/tour-24-min-550x358.jpg">
                                        <a href="">
                                            <img class="map-marker" src="assets/img/map-marker-variant-tool.png">
                                        </a>
                                        <div class="social">
                                            <a href="">
                                                <img src="assets/img/facebook.png">
                                            </a>
                                            <a href="">
                                                <img src="assets/img/twitter.png">
                                            </a>
                                            <a href="">
                                                <img class="google" src="assets/img/google-plus.png">
                                            </a>
                                            <a href="">
                                                <img src="assets/img/instagram-logo-small.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12 no-padding">
                                    <div class="room-text">
                                        <h4>Single Standard, 2011</h4>
                                        <div>(s) 1 small double bed</div>
                                        <a href="">See more details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-4 col-xs-12 no-padding single-width-30">
                            <div class="room max mar-top-0 mar-top-10">
                                <div>Max</div>
                                <img src="assets/img/multiple-users-silhouette.png">
                            </div>
                            <div class="col-md-12 no-padding bgr-EA height-160 text-center">
                                <div class="room-text">
                                    <h4>1</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 no-padding width-12 single-width-25">
                            <div class="room max">
                                <div>Price</div>
                                <span>Per person</span>
                            </div>
                            <div class="col-md-12 no-padding bgr-EA height-160 text-center">
                                <div class="room-text">
                                    <h4>2000$</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 no-padding single-width-50">
                            <div class="room max">
                                <div>Aviable options</div>
                            </div>
                            <div class="col-md-12 no-padding bgr-EA height-160 text-center min-120">
                                <div class="room-text">
                                    <div>No meals, breakfeast 8,50$</div>
                                    <div>No meals, breakfeast 8,50$</div>
                                    <div>No meals, breakfeast 8,50$</div>
                                    <div>No meals, breakfeast 8,50$</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 no-padding width-12 single-width-25">
                            <div class="room max">
                                <div>Total Price</div>
                            </div>
                            <div class="col-md-12 no-padding bgr-EA height-160 text-center border-left-5 min-120">
                                <div class="room-text">
                                    <div>Total:</div>
                                    <h4 style="margin-bottom: 20px">2000$</h4>
                                    <a href="">
                                        <span class="AB-btn">BOOK</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /FIRST ROOM -->

                    <!-- SECOND ROOM -->
                    <div class="col-xs-12 no-padding holder">
                        <div class="col-md-5 col-sm-8 col-xs-12 no-padding single-width-70">
                            <div class="room mar-top-0">Room type/name</div>
                            <div class="col-md-12 col-sm-12 col-xs-12 no-padding bgr-EA">
                                <div class="col-md-5 col-sm-5 col-xs-12 no-padding">
                                    <div class="img-container">
                                        <img class="img-responsive img-cover hover-element"
                                             src="http://www.waituk.com/entrada/default/wp-content/uploads/2016/05/tour-24-min-550x358.jpg">
                                        <a href="">
                                            <img class="map-marker" src="assets/img/map-marker-variant-tool.png">
                                        </a>
                                        <div class="social">
                                            <a href="">
                                                <img src="assets/img/facebook.png">
                                            </a>
                                            <a href="">
                                                <img src="assets/img/twitter.png">
                                            </a>
                                            <a href="">
                                                <img class="google" src="assets/img/google-plus.png">
                                            </a>
                                            <a href="">
                                                <img src="assets/img/instagram-logo-small.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12 no-padding">
                                    <div class="room-text">
                                        <h4>Single Standard, 2011</h4>
                                        <div>(s) 1 small double bed</div>
                                        <a href="">See more details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-4 col-xs-12 no-padding single-width-30">
                            <div class="room max mar-top-0 mar-top-10">
                                <div>Max</div>
                                <img src="assets/img/multiple-users-silhouette.png">
                            </div>
                            <div class="col-md-12 no-padding bgr-EA height-160 text-center">
                                <div class="room-text">
                                    <h4>1</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 no-padding width-12 single-width-25">
                            <div class="room max">
                                <div>Price</div>
                                <span>Per person</span>
                            </div>
                            <div class="col-md-12 no-padding bgr-EA height-160 text-center">
                                <div class="room-text">
                                    <h4>2000$</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 no-padding single-width-50">
                            <div class="room max">
                                <div>Aviable options</div>
                            </div>
                            <div class="col-md-12 no-padding bgr-EA height-160 text-center min-120">
                                <div class="room-text">
                                    <div>No meals, breakfeast 8,50$</div>
                                    <div>No meals, breakfeast 8,50$</div>
                                    <div>No meals, breakfeast 8,50$</div>
                                    <div>No meals, breakfeast 8,50$</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 no-padding width-12 single-width-25">
                            <div class="room max">
                                <div>Total Price</div>
                            </div>
                            <div class="col-md-12 no-padding bgr-EA height-160 text-center border-left-5 min-120">
                                <div class="room-text">
                                    <div>Total:</div>
                                    <h4 style="margin-bottom: 20px">2000$</h4>
                                    <a href="">
                                        <span class="AB-btn">BOOK</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SECOND ROOM -->
                </div>
                <!-- LOAD MORE -->
                <a href="">
                    <div class="col-xs-12 load-more">LOAD MORE</div>
                </a>
                <!-- /LOAD MORE -->

                <!-- SHOPPING CARD -->
                <div class="col-md-5 col-sm-6 col-xs-12 no-padding bgr-EA mar-bott-20">
                    <div class="col-xs-12 no-padding shop-cart">
                        <h4>SHOPPING CART</h4>
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                    </div>
                    <div class="col-xs-12 no-padding shop-content">
                        <div class="col-xs-8 no-padding">
                            <h4>Best Ipsum Hotel</h4>
                            <h5 class="room-info">Bahams</h5>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-xs-12 no-padding text-center-xs">
                            <div class="padd-tb-15">
                                <ul class="list-inline">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                            <h5 class="room-info text-right rated text-center-xs">Rated 4,2/5</h5>
                        </div>
                        <div class="col-xs-12 no-padding text">
                            <span>Please search for availability and add it in your shooping cart to proces width the booking.</span>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <button type="submit" class="btn">
                                <strong>BOOK</strong>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- SHOPPING CARD -->
            </div>
            <!-- left side -->
            <!-- right side -->
            <div class="col-md-3 col-sm-12 col-xs-12 right-cart">
                <!-- SHOPPING CARD -->
                <div class="col-md-12 col-sm-6 col-xs-12 no-padding bgr-EA mar-bott-20">
                    <div class="col-xs-12 no-padding shop-cart">
                        <h4>SHOPPING CART</h4>
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                    </div>
                    <div class="col-xs-12 no-padding shop-content">
                        <div class="col-xs-8 no-padding">
                            <h4>Best Ipsum Hotel</h4>
                            <h5 class="room-info">Bahams</h5>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-xs-12 no-padding text-center-xs">
                            <div class="padd-tb-15">
                                <ul class="list-inline">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                            <h5 class="room-info text-right rated text-center-xs">Rated 4,2/5</h5>
                        </div>
                        <div class="col-xs-12 no-padding text">
                            <h4>Single standard, 211</h4>
                            <h5 class="room-info black">Room type:</h5>
                            <span>Standard Double-bed room</span>
                            <h5 class="room-info black">Meal Plan:</h5>
                            <span>Room only - no meals</span>
                            <h5 class="room-info black">Check-in Date:</h5>
                            <span>14-11-12</span>
                            <h5 class="room-info black">Check-out Date:</h5>
                            <span>15-11-12</span>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <button type="submit" class="btn btn-default"><span>Total: 38.00 €</span><br>
                                <strong>BOOK</strong></button>
                        </div>
                    </div>
                </div>
                <!-- SHOPPING CARD -->
            </div>
            <!-- /right side -->
        </div>
        <div id="itinerary" class="tab-pane fade">
            <h3>Menu 2</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam.</p>
        </div>
        <div id="notes" class="tab-pane fade">
            <h3>Menu 3</h3>
            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
        <div id="other" class="tab-pane fade">
            <h3>Menu 3</h3>
            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
    </div>


</div><!-- /container -->
<!-- /CONTENT -->

<!-- footer -->
<div class="col-xs-12 no-padding footer">
    <div class="container">
        <div class="col-md-3 col-sm-6 col-xs-12 half-xs">
            <ul>
                <li class="list-label">About Adriatico</li>
                <li>
                    <a href="">The company</a>
                </li>
                <li>
                    <a href="">The company</a>
                </li>
                <li>
                    <a href="">The company</a>
                </li>
                <li>
                    <a href="">The company</a>
                </li>
                <li>
                    <a href="">The company</a>
                </li>
                <li>
                    <a href="">The company</a>
                </li>
                <li>
                    <a href="">The company</a>
                </li>
            </ul>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12 half-xs">
            <ul>
                <li class="list-label">About Adriatico</li>
                <li>
                    <a href="">The company</a>
                </li>
                <li>
                    <a href="">The company</a>
                </li>
                <li>
                    <a href="">The company</a>
                </li>
                <li>
                    <a href="">The company</a>
                </li>
                <li>
                    <a href="">The company</a>
                </li>
                <li>
                    <a href="">The company</a>
                </li>
                <li>
                    <a href="">The company</a>
                </li>
            </ul>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12 half-xs">
            <ul>
                <li class="list-label">About Adriatico</li>
                <li>
                    <a href="">The company</a>
                </li>
                <li>
                    <a href="">The company</a>
                </li>
                <li>
                    <a href="">The company</a>
                </li>
                <li>
                    <a href="">The company</a>
                </li>
                <li>
                    <a href="">The company</a>
                </li>
                <li>
                    <a href="">The company</a>
                </li>
                <li>
                    <a href="">The company</a>
                </li>
            </ul>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12 half-xs">
            <ul>
                <li class="list-label">Contact Info</li>
                <li>
                    <a href=""><i class="fa fa-home"></i>Your Company Addressy</a>
                </li>
                <li>
                    <a href=""><i class="fa fa-phone-square"></i>012-345-6789</a>
                </li>
                <li>
                    <a href=""><i class="fa fa-envelope"></i>youremail@email.com</a>
                </li>
                <li>
                    <a href=""><i class="fa fa-clock-o"></i>AM 9 ~ PM 7</a>
                </li>
                <li>
                    <a href=""><i class="fa fa-plus-square"></i>The company</a>
                </li>
                <li>
                    <a href=""><i class="fa fa-exclamation-circle"></i>The company</a>
                </li>
            </ul>
            <div class="col-xs-12 no-padding">
                <ul class="list-inline">
                    <li>
                        <a href="">
                            <img src="assets/img/foot-facebook.png">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="assets/img/foot-twitter.png">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="assets/img/foot-forrst.png">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="assets/img/foot-googleplus.png">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="assets/img/foot-pinterest.png">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="assets/img/foot-dribbble.png">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <div class="footer-bottom text-center">
        <p>Copyright 2016 Adriatico travel | All Rights Reserved</p>
    </div>
</div>
<!-- /footer -->

<!-- Modal -->
<div id="myModal" class="modal fade text-center" role="dialog">
    <button type="button" class="btn btn-default close" data-dismiss="modal">
        <i class="fa fa-times" aria-hidden="true"></i>
    </button>
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="form col-xs-12 no-padding">
                <div class="input-container col-md-2 col-md-offset-1 col-sm-12 col-xs-12 no-padding">
                    <input class="form-control" value="KEYWORD"></input>
                </div>
                <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding">
                    <select class="form-control">
                        <option>DESTINATION</option>
                        <option>Srbija</option>
                        <option>Crna Gora</option>
                        <option>Makedonija</option>
                        <option>Engleska</option>
                        <option>Nemacka</option>
                    </select>
                </div>
                <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding">
                    <select class="form-control">
                        <option>CATEGORY</option>
                        <option>Srbija</option>
                        <option>Crna Gora</option>
                        <option>Makedonija</option>
                        <option>Engleska</option>
                        <option>Nemacka</option>
                    </select>
                </div>
                <div class="input-container col-md-4 col-sm-12 col-xs-12 centar-sm">
                    <button class="btn button btn-search" type="button"><i class="fa fa-search"></i>SEARCH</button>
                    <button class="btn button btn-advanced" id="hotel-adv">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>VIEW ON MAP
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /Modal -->

<!-- Modal -->
<?php
{
    include "sign-up-form.php";
}
?>
<!-- /Modal -->


</div><!-- /container-fluid -->


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://npmcdn.com/isotope-layout@3.0.1/dist/isotope.pkgd.js"></script>
<script src="assets/js/viewportchecker.js"></script>
<script src="assets/js/rating-stars.js"></script>
<script src="assets/js/price-box.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
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
    $(document).ready(function () {
        $(".tab-button").click(function () {
            $(this).hasClass("active")
            if ($(this).hasClass("active")) {
                console.log('Ovaj button ima active klasu');
            } else {
                console.log('Ovaj button je DODAO! active klasu');
                $(".tab-button").removeClass('active');
                $(this).addClass('active');
                $('.src-panel').removeClass('tab-content-in');

                $('#tab-' + $(this).attr('id')).addClass('tab-content-in');
                console.log($('#tab-' + $(this).attr('id')))
            }
        })
    });
</script>

<script>
    $('.grid').isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
        masonry: {
            columnWidth: '.grid-sizer'
        }
    });

    // init Isotope
    var $grid = $('.grid').isotope({
        // options
    });
    // filter items on button click
    $('.filter-button-group').on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter: filterValue});
    });

    // filter functions
    var filterFns = {
        // show if number is greater than 50
        numberGreaterThan50: function () {
            var number = $(this).find('.number').text();
            return parseInt(number, 10) > 50;
        },
        // show if name ends with -ium
        ium: function () {
            var name = $(this).find('.name').text();
            return name.match(/ium$/);
        }
    };
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
    var customLabel = {
        restaurant: {
            label: 'R'
        },
        bar: {
            label: 'B'
        }
    };

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: new google.maps.LatLng(-33.863276, 151.207977),
            zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

        // Change this depending on the name of your PHP or XML file
        downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function (data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function (markerElem) {
                var name = markerElem.getAttribute('name');
                var address = markerElem.getAttribute('address');
                var type = markerElem.getAttribute('type');
                var point = new google.maps.LatLng(
                    parseFloat(markerElem.getAttribute('lat')),
                    parseFloat(markerElem.getAttribute('lng')));

                var infowincontent = document.createElement('div');
                var strong = document.createElement('strong');
                strong.textContent = name
                infowincontent.appendChild(strong);
                infowincontent.appendChild(document.createElement('br'));

                var text = document.createElement('text');
                text.textContent = address
                infowincontent.appendChild(text);
                var icon = customLabel[type] || {};
                var marker = new google.maps.Marker({
                    map: map,
                    position: point,
                    label: icon.label
                });
                marker.addListener('click', function () {
                    infoWindow.setContent(infowincontent);
                    infoWindow.open(map, marker);
                });
            });
        });
    }


    function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function () {
            if (request.readyState == 4) {
                request.onreadystatechange = doNothing;
                callback(request, request.status);
            }
        };

        request.open('GET', url, true);
        request.send(null);
    }

    function doNothing() {
    }
    //
    //    $( ".click" ).click(function() {
    //        $( ".menu-list" ).toggleClass( "panel-toggle");
    //        $(".search i").toggleClass('glyphicon-align-justify glyphicon-remove')
    //    });

    $(document).ready(function () {
        $('#nav-icon2').click(function () {
            $(this).toggleClass('open');
        });
    });

</script>


</body>
</html>
