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
<body class="body-bgr" data-spy="spyscroll" data-target=".button-group">

<!-- Loader gif -->
<div id="loading"></div>
<!-- Loader gif -->

<div class="container-fluid no-padding search-result-header">
    <div class="row no-margin">
        <nav class="navbar navbar-inverse navbar-static-top sticky-top">
            <div class="container-fluid no-padding relative">
                <div class="desktopNav">
                    <div class="navbar-header none-mq">
                        <a class="navbar-brand" href="#">
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
        <img src="assets/img/banner-2.jpg">
        <div class="clearfix"></div>

    </div>
    <!-- /Header Background Video -->

    <div class="title-container">
        <div class="headline">
            <h1 class="welcome swing">Search Results Title</h1>
            <h3 class="where">Add your search result page title & sub title.</h3>
        </div>
    </div>


</div><!-- /row-->
</div><!-- /container-fluid -->

<!-- CONTENT -->
<div class="clearfix"></div>
<div class="container-fluid search-result">
    <div class="col-xs-12">
        <div class="col-md-10 col-sm-8 col-xs-12 information">
            <strong class="black">Barcelona, Spain,</strong> Tue, Sep, sdfsdfsdfsdfdsafsadfsdafsdafasdfsdf
        </div>
        <div class="col-md-2 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2 information-search"
             style="padding-right: 0">
            <select class="form-control">
                <option>CHANGE SEARCH</option>
                <option>Srbija</option>
                <option>Crna Gora</option>
                <option>Makedonija</option>
                <option>Engleska</option>
                <option>Nemacka</option>
            </select>
        </div>
    </div>
    <!-- left side -->
    <div class="col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-12 pad-bot-sm">
        <header class="heading col-xs-12 no-padding">
            <h4><i class="fa fa-sliders" aria-hidden="true"></i>REFINE SEARCH RESULTS</h4>
        </header>
        <div class="panel-group">
            <!-- prvi collapse -->
            <div class="panel panel-default col-xs-12 no-padding">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse1-search">Price (per night)
                            <img style="" src="assets/img/down-button-sign.png"/>
                        </a>
                    </h4>
                </div>
                <div id="collapse1-search" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch6"><span><input type="checkbox" id="ch6"
                                                                               name="accommodation"></span></div>
                            <label for="ch6">Hotel</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch7"><span><input type="checkbox" id="ch7"
                                                                               name="accommodation"></span></div>
                            <label for="ch7">Hostel</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch8"><span><input type="checkbox" id="ch8"
                                                                               name="accommodation"></span></div>
                            <label for="ch8">Apart Hotel</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch9"><span><input type="checkbox" id="ch9"
                                                                               name="accommodation"></span></div>
                            <label for="ch9">Guest House</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch30"><span><input type="checkbox" id="ch30"
                                                                                name="accommodation"></span></div>
                            <label for="ch30">Apartment</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch31"><span><input type="checkbox" id="ch31"
                                                                                name="accommodation"></span></div>
                            <label for="ch31">Bed &amp; Breakfast</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch32"><span><input type="checkbox" id="ch32"
                                                                                name="accommodation"></span></div>
                            <label for="ch32">Residence</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch33"><span><input type="checkbox" id="ch33"
                                                                                name="accommodation"></span></div>
                            <label for="ch33">Farm stay</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch34"><span><input type="checkbox" id="ch34"
                                                                                name="accommodation"></span></div>
                            <label for="ch34">All-inclusive resort</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /prvi collapse -->
            <!-- drugi collapse -->
            <div class="panel panel-default col-xs-12 no-padding">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse2-search">Accommodation type
                            <img style="" src="assets/img/down-button-sign.png"/>
                        </a>
                    </h4>
                </div>
                <div id="collapse2-search" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch6"><span><input type="checkbox" id="ch6"
                                                                               name="accommodation"></span></div>
                            <label for="ch6">Hotel</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch7"><span><input type="checkbox" id="ch7"
                                                                               name="accommodation"></span></div>
                            <label for="ch7">Hostel</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch8"><span><input type="checkbox" id="ch8"
                                                                               name="accommodation"></span></div>
                            <label for="ch8">Apart Hotel</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch9"><span><input type="checkbox" id="ch9"
                                                                               name="accommodation"></span></div>
                            <label for="ch9">Guest House</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch30"><span><input type="checkbox" id="ch30"
                                                                                name="accommodation"></span></div>
                            <label for="ch30">Apartment</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch31"><span><input type="checkbox" id="ch31"
                                                                                name="accommodation"></span></div>
                            <label for="ch31">Bed &amp; Breakfast</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch32"><span><input type="checkbox" id="ch32"
                                                                                name="accommodation"></span></div>
                            <label for="ch32">Residence</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch33"><span><input type="checkbox" id="ch33"
                                                                                name="accommodation"></span></div>
                            <label for="ch33">Farm stay</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch34"><span><input type="checkbox" id="ch34"
                                                                                name="accommodation"></span></div>
                            <label for="ch34">All-inclusive resort</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /drugi collapse -->
            <!-- treci collapse -->
            <div class="panel panel-default col-xs-12 no-padding">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse3-search">Star rating
                            <img style="" src="assets/img/down-button-sign.png"/>
                        </a>
                    </h4>
                </div>
                <div id="collapse3-search" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="lead">
                            <div id="stars-existing" class="starrr" data-rating='4'></div>
                            You gave a rating of <span id="count-existing">4</span> star(s)
                        </div>
                    </div>
                </div>
            </div>
            <!-- /treci collapse -->
            <!-- cetvrti collapse -->
            <div class="panel panel-default col-xs-12 no-padding">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse4-search">User rating
                            <img style="" src="assets/img/down-button-sign.png"/>
                        </a>
                    </h4>
                </div>
                <div id="collapse4-search" class="panel-collapse collapse in">
                    <div class="price-box">
                        <form class="form-horizontal form-pricing" role="form">
                            <div class="price-slider">
                                <h4 class="great">Amount</h4>
                                <span>Minimum $10 is required</span>
                                <div class="">
                                    <div id="slider"></div>
                                </div>
                            </div>
                            <div class="price-form">

                                <div class="form-group" style="margin: 0 auto">
                                    <span class="help-text">Please choose your amount</span>
                                    <div class="text-center">
                                        <input type="hidden" id="amount" class="form-control">
                                        <p class="price lead" id="amount-label"></p>
                                        <span class="price">.00</span>
                                    </div>
                                </div>
                                <hr class="style">
                            </div>

                            <div class="form-group">
                                <div class="">
                                    <button type="submit" class="btn btn-lg btn-block">FILTER<span
                                                class="glyphicon glyphicon-chevron-right pull-right"
                                                style="padding-right: 10px;"></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /cetvrti collapse -->
            <!-- peti collapse -->
            <div class="panel panel-default col-xs-12 no-padding">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse5-search">Payment options
                            <img style="" src="assets/img/down-button-sign.png"/>
                        </a>
                    </h4>
                </div>
                <div id="collapse5-search" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch6"><span><input type="checkbox" id="ch6"
                                                                               name="accommodation"></span></div>
                            <label for="ch6">Hotel</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch7"><span><input type="checkbox" id="ch7"
                                                                               name="accommodation"></span></div>
                            <label for="ch7">Hostel</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch8"><span><input type="checkbox" id="ch8"
                                                                               name="accommodation"></span></div>
                            <label for="ch8">Apart Hotel</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch9"><span><input type="checkbox" id="ch9"
                                                                               name="accommodation"></span></div>
                            <label for="ch9">Guest House</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch30"><span><input type="checkbox" id="ch30"
                                                                                name="accommodation"></span></div>
                            <label for="ch30">Apartment</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch31"><span><input type="checkbox" id="ch31"
                                                                                name="accommodation"></span></div>
                            <label for="ch31">Bed &amp; Breakfast</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch32"><span><input type="checkbox" id="ch32"
                                                                                name="accommodation"></span></div>
                            <label for="ch32">Residence</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch33"><span><input type="checkbox" id="ch33"
                                                                                name="accommodation"></span></div>
                            <label for="ch33">Farm stay</label>
                        </div>
                        <div class="checkbox">
                            <div class="checker" id="uniform-ch34"><span><input type="checkbox" id="ch34"
                                                                                name="accommodation"></span></div>
                            <label for="ch34">All-inclusive resort</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /peti collapse -->
        </div>
    </div><!-- /left side -->

    <!-- right side -->
    <div class="col-md-9 col-sm-12 col-xs-12 padd-left-0">
        <div class="col-md-12 sort-by">
            <ul class="list-inline">
                <li>Sort by</li>
                <li>
                    <select class="form-control">
                        <option>Popularity</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </li>
                <li>
                    <select class="form-control">
                        <option>Stars</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </li>
                <li>
                    <select class="form-control">
                        <option>Price</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </li>
                <li>
                    <select class="form-control">
                        <option>Distance</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </li>
                <li>
                    <select class="form-control">
                        <option>Review</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </li>
                <li>
                    <button class="btn button btn-search" type="button">
                        <i class="fa fa-map-marker"></i>MAP VIEW
                    </button>
                </li>

            </ul>
        </div>
        <!-- THUMBNAIL 1 -->
        <div class="col-xs-12 thumbnail">
            <div class="col-md-3 col-sm-12 col-xs-12 no-padding mq-1380">
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
            <div class="col-md-6 col-sm-8 col-xs-12 no-padding border-right-white mq-1380-70">
                <div class="text">
                    <div class="col-xs-12 no-padding">
                        <div class="col-md-8 col-sm-8 col-xs-12 no-padding text-center-xs">
                            <h4><a href="">Best ipsum hotel</a><span class="info-day">Budva, Becici</span></h4>
                            <h5 class="room-info">Standard Double Room, 312</h5>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 no-padding text-center-xs">
                            <div class="padd-tb-15">
                                <ul class="list-inline">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                            <h5 class="room-info text-right rated text-center-xs">Rated 4,2/5</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <p>Son agreed others exeter period myself few yet nature.
                            Mention mr manners opinion if garrets enabled...<strong class="read-more">READ MORE</strong>
                        </p>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="icons">
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/222.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/225.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/226.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/227.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/233.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/235.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/227.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/233.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/235.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/235.png">
                            </a>

                            <div class="txt-btn">
                                <a href="">
                                    <span class="AB-btn">A<i class="fa fa-arrow-right" aria-hidden="true"></i>B</span>
                                </a>
                                <span>
                                <select class="form-control">
                                    <option>DETAILS</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12 no-padding mq-1380-30">
                <div class="price-info">
                    <h4><strong>from</strong></h4>
                    <h3>38 €</h3>
                    <p class="bottom-0">per person</p>
                    <p class="bottom-0">Standard Double Room, 312</p>
                    <button type="submit" class="btn btn-default"><span>Total: 38.00 €</span><br>
                        <strong>BOOK</strong></button>
                </div>
            </div>
        </div>
        <!-- /THUMBNAIL 1 -->

        <!-- THUMBNAIL 2 -->
        <div class="col-xs-12 thumbnail">
            <div class="col-md-3 col-sm-12 col-xs-12 no-padding mq-1380">
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
            <div class="col-md-6 col-sm-8 col-xs-12 no-padding border-right-white mq-1380-70">
                <div class="text">
                    <div class="col-xs-12 no-padding">
                        <div class="col-md-8 col-sm-8 col-xs-12 no-padding text-center-xs">
                            <h4><a href="">Best ipsum hotel</a><span class="info-day">Budva, Becici</span></h4>
                            <h5 class="room-info">Standard Double Room, 312</h5>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 no-padding text-center-xs">
                            <div class="padd-tb-15">
                                <ul class="list-inline">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                            <h5 class="room-info text-right rated text-center-xs">Rated 4,2/5</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <p>Son agreed others exeter period myself few yet nature.
                            Mention mr manners opinion if garrets enabled...<strong class="read-more">READ MORE</strong>
                        </p>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="icons">
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/222.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/225.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/226.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/227.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/233.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/235.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/227.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/233.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/235.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/235.png">
                            </a>

                            <div class="txt-btn">
                                <a href="">
                                    <span class="AB-btn">A<i class="fa fa-arrow-right" aria-hidden="true"></i>B</span>
                                </a>
                                <span>
                                <select class="form-control">
                                    <option>DETAILS</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12 no-padding mq-1380-30">
                <div class="price-info">
                    <h4><strong>from</strong></h4>
                    <h3>38 €</h3>
                    <p class="bottom-0">per person</p>
                    <p class="bottom-0">Standard Double Room, 312</p>
                    <button type="submit" class="btn btn-default"><span>Total: 38.00 €</span><br>
                        <strong>BOOK</strong></button>
                </div>
            </div>
        </div>
        <!-- /THUMBNAIL 2 -->

        <!-- THUMBNAIL 3 -->
        <div class="col-xs-12 thumbnail">
            <div class="col-md-3 col-sm-12 col-xs-12 no-padding mq-1380">
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
            <div class="col-md-6 col-sm-8 col-xs-12 no-padding border-right-white mq-1380-70">
                <div class="text">
                    <div class="col-xs-12 no-padding">
                        <div class="col-md-8 col-sm-8 col-xs-12 no-padding text-center-xs">
                            <h4><a href="">Best ipsum hotel</a><span class="info-day">Budva, Becici</span></h4>
                            <h5 class="room-info">Standard Double Room, 312</h5>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 no-padding text-center-xs">
                            <div class="padd-tb-15">
                                <ul class="list-inline">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                            <h5 class="room-info text-right rated text-center-xs">Rated 4,2/5</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <p>Son agreed others exeter period myself few yet nature.
                            Mention mr manners opinion if garrets enabled...<strong class="read-more">READ MORE</strong>
                        </p>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="icons">
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/222.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/225.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/226.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/227.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/233.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/235.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/227.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/233.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/235.png">
                            </a>
                            <a href="" data-toggle="tooltip" data-placement="bottom" title="Hooray!">
                                <img src="assets/img/235.png">
                            </a>

                            <div class="txt-btn">
                                <a href="">
                                    <span class="AB-btn">A<i class="fa fa-arrow-right" aria-hidden="true"></i>B</span>
                                </a>
                                <span>
                                <select class="form-control">
                                    <option>DETAILS</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12 no-padding mq-1380-30">
                <div class="price-info">
                    <h4><strong>from</strong></h4>
                    <h3>38 €</h3>
                    <p class="bottom-0">per person</p>
                    <p class="bottom-0">Standard Double Room, 312</p>
                    <button type="submit" class="btn btn-default"><span>Total: 38.00 €</span><br>
                        <strong>BOOK</strong></button>
                </div>
            </div>
        </div>
        <!-- /THUMBNAIL 3 -->
    </div>
    <!-- /right side -->
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


</div><!-- /container-fluid -->


<!--<!-- Modal -->
<?php
{
    include "sign-up-form.php";
}
?>
<!--<!-- /Modal -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://npmcdn.com/isotope-layout@3.0.1/dist/isotope.pkgd.js"></script>
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



    /* tooltip*/

    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip({animation: true, placement: "bottom"});
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
        $( ".click" ).click(function() {
            $( ".menu-list" ).toggleClass( "panel-toggle");
            $(".search i").toggleClass('glyphicon-align-justify glyphicon-remove')
        });

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
