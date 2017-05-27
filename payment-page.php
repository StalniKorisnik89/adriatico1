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

<!-- HEADER -->
<?php
{
    include "peyment-header.php";
}
?>
<!-- /HEADER -->

<!-- CONTENT -->
<div class="clearfix"></div>
<div class="customer-payment">
    <div class="container-fluid search-single">
            <div id="price">
                <?php
                {
                    include "payment.php";
                }
                ?>
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
<script src="https://npmcdn.com/isotope-layout@3.0.1/dist/isotope.pkgd.js"></script>
<script src="assets/js/viewportchecker.js"></script>
<script src="assets/js/rating-stars.js"></script>
<script src="assets/js/price-box.js"></script>
<script src="assets/js/modernizr.custom.js"></script>
<script src="assets/js/jquery.dlmenu.js"></script>


<script>
    /* Loader gif */

    $(window).ready(function () {
        $('#loading').hide();
    });

//    $('#map').css("display", "none");
//    $('.form-map').css("display", "none");
//    $('.search-on-map').click(function () {
//        $('#map').css("display", "block");
//        $('.form-map').css("display", "block")
//    })
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

</script>

<script>
    $(document).ready(function () {
        $('#nav-icon2').click(function () {
            $(this).toggleClass('open');
        });
    });

</script>

<script>
    $(function() {
        $( '#dl-menu' ).dlmenu({
            animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }
        });
    });
</script>

</body>
</html>
