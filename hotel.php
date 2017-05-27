<!-- Main CSS -->
<link rel="stylesheet" href="assets/css/hotel.css" xmlns="http://www.w3.org/1999/html">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="stylesheet" href="assets/css/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/github.min.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/modernizr-2.8.3.min.js"></script>


<div class="hotel">
    <div id="panel-hotel" style="margin-left: 15px;margin-right: 15px">
        <div class="form col-xs-12 no-padding">
            <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding width-100 width-250">
                <div class="book-hotel">FIND YOUR HOTEL</div>
            </div>
            <div class="col-md-8 my-col no-padding center-sm" id="destination">
                <div class="input-container width-25">
                    <div id="bts-ex-4" class="selectpicker" data-live="true">
                        <button data-id="prov" type="button" class="dropdown-toggle">
                            <span class="placeholder">DESTINATION</span>
                            <span class="caret"></span>
                        </button>
                        <div class="dropdown-menu">
                            <div class="live-filtering" data-clear="true" data-autocomplete="true" data-keys="true">
                                <label class="sr-only" for="input-bts-ex-4">Search in the list</label>
                                <div class="search-box">
                                    <div class="input-group">
                                                    <span class="input-group-addon" id="search-icon3">
                                                        <span class="fa fa-search"></span>
                                                        <a href="#" class="fa fa-times hide filter-clear"><span class="sr-only">Clear filter</span></a>
                                                    </span>
                                        <input type="text" placeholder="Search in the list" id="input-bts-ex-4" class="form-control live-search" aria-describedby="search-icon3" tabindex="1" />
                                    </div>
                                </div>
                                <div class="list-to-filter">
                                    <ul class="list-unstyled" style="padding-left: 0">
                                        <li class="filter-item items" data-filter="srbija" data-value="2">Srbija</li>
                                        <li class="filter-item items items-child" data-filter="srbija beograd" data-value="2">Beograd</li>
                                        <li class="filter-item items items-child-2" data-filter="srbija beograd banjica" data-value="2">Banjica</li>
                                        <li class="filter-item items items-child-2" data-filter="srbija beograd rakovica" data-value="2">Rakovica</li>
                                        <li class="filter-item items items-child-3" data-filter="srbija beograd rakovica donja" data-value="2">Donja Rakovica</li>
                                        <li class="filter-item items items-child-3" data-filter="srbija beograd rakovica gornja" data-value="2">Gornja Rakovica</li>
                                        <li class="filter-item items items-child" data-filter="srbija kraljevo" data-value="2">Kraljevo</li>
                                        <li class="filter-item items items-child" data-filter="srbija kragujevac" data-value="2">Kragujevac</li>
                                        <li class="filter-item items" data-filter="crna gora" data-value="2">Crna Gora</li>
                                        <li class="filter-item items" data-filter="makedonija" data-value="3">Makedonija</li>
                                        <li class="filter-item items" data-filter="madjarska" data-value="4">Madjarska</li>
                                        <li class="filter-item items" data-filter="bugarska" data-value="5">Bugarska</li>
                                    </ul>
                                    <div class="no-search-results">
                                        <div class="alert alert-warning" role="alert"><i class="fa fa-warning margin-right-sm"></i>No entry for <strong>'<span></span>'</strong> was found.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="bts-ex-4" value="">
                    </div>
                </div>
                <div class="input-container width-25 left-6">
                    <input class="form-control calendar" id="datepicker-hotel" type="text" value="CHECK IN"/>
                </div>
                <div class="input-container width-25 left-6">
                    <input class="form-control calendar" id="datepicker-hotel-2" type="text" value="CHECK OUT"/>
                </div>

                <div class="input-container width-25 left-6">
                    <input type="text" class="form-control" id="sobe" value="2 Adults, 0 Children, 1 room"/>
                    <!-- -->
                    <div class="dropdown-input">
                        <div class="pull-right" style="padding: 5px; width: 100%;border: 5px solid #35C7FF;">
                            <div id="rooms">
                                <label>Number of rooms?</label>
                                <span class="minus">-</span>
                                <input type="number" value="1">
                                <span class="plus">+</span>
                            </div>
                        </div>
                        <!-- -->
                        <div class="pull-right" style="padding: 5px; width: 100%;border: 5px solid #35C7FF;border-top: none">
                            <div class="room room-border">
                                <label>Adults:</label>
                                <span class="minusAdult">-</span>
                                <input type="number" name="adults" value="2">
                                <span class="plusAdult">+</span>

                                <label>Children:</label>
                                <span class="minusChild">-</span>
                                <input type="number" name="children[]" value="0">
                                <span class="plusChild">+</span>

                                <div class="childAgeDiv" style="display: none;">
                                    <label>Children age:</label>
                                    <span class="minusChildAge">-</span>
                                    <input type="number" name="childrenAge[]" value="0">
                                    <span class="plusChildAge">+</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding left-6 float-right width-30 btn-jq">
                <a href="search-results.php">
                    <button class="btn button btn-search" type="button"><i class="fa fa-search"></i>SEARCH</button>
                </a>
                <button type="button" class="btn button btn-advanced" id="hotel-adv">ADVANCED</button>
            </div>
        </div>



            <script>
                $(document).ready(function(){
                    $("#sobe").click(function(){
                        $(".dropdown-input").fadeToggle(500);
                    });
                });

                function formatDisplay() {

                    var adults = 0;
                    $('input[name="adults"]').each(function (index, element) {
                        adults = adults + parseFloat($(element).val());
                    });

                    var childrens = 0;
                    $('input[name="children[]"]').each(function (index, element) {
                        childrens = childrens + parseFloat($(element).val());
                    });

                    var display = adults + " Adults, " + childrens + " Childrens," + $("#rooms > input").val() + " room";

                    $("#sobe").val(display);
                }


                $(document).on('click', ".childAgeDiv > .minusChildAge", function () {

                    var $input = $(this).parent().find('input[name="childrenAge[]"]:first');

                    var numberOfRooms = parseInt($input.val());

                    if (numberOfRooms < 1)
                        return;

                    $input.val(numberOfRooms - 1);

                    formatDisplay();
                });

                $(document).on('click', ".childAgeDiv > .plusChildAge", function () {

                    var $input = $(this).parent().find('input[name="childrenAge[]"]:first');

                    var numberOfRooms = parseInt($input.val());

                    $input.val(numberOfRooms + 1);

                    formatDisplay();
                });

                $(document).on('click', ".room > .minusChild", function () {

                    var $input = $(this).parent().find('input[name="children[]"]:first');

                    var numberOfRooms = parseInt($input.val());

                    if (numberOfRooms < 1) {
                        $(this).parent().find(".childAgeDiv").hide();
                        return;
                    }


                    $input.val(numberOfRooms - 1);

                    var numberOfChildAge = $(this).parent().find(".childAgeDiv").length;

                    console.log(numberOfChildAge);

                    if (numberOfChildAge == 1)
                        $(this).parent().find(".childAgeDiv").hide();
                    else
                        $(this).parent().find(".childAgeDiv").last().remove();

                    formatDisplay();
                });

                $(document).on('click', ".room > .plusChild", function () {

                    var $input = $(this).parent().find('input[name="children[]"]:first');

                    var numberOfRooms = parseInt($input.val());

                    $input.val(numberOfRooms + 1);

                    var numberOfChildAge = $(this).parent().find(".childAgeDiv").length;

                    if (numberOfChildAge == 1 && !$(this).parent().find(".childAgeDiv").last().is(":visible"))
                        $(this).parent().find(".childAgeDiv").show();
                    else {
                        var clonedElement = $($(this).parent().find(".childAgeDiv")[0]);

                        clonedElement.clone(true, true).appendTo(clonedElement.parent());
                    }

                    formatDisplay();
                });


                $(document).on('click', ".room > .minusAdult", function () {

                    var $input = $(this).parent().find('input[name="adults"]:first');

                    var numberOfRooms = parseInt($input.val());

                    if (numberOfRooms < 1)
                        return;

                    $input.val(numberOfRooms - 1);

                    formatDisplay();
                });

                $(document).on('click', ".room > .plusAdult", function () {

                    var $input = $(this).parent().find('input[name="adults"]:first');

                    var numberOfRooms = parseInt($input.val());

                    $input.val(numberOfRooms + 1);

                    formatDisplay();
                });

                $("#rooms > .minus").click(function () {
                    var numberOfRooms = parseInt($("#rooms > input").val());

                    if (numberOfRooms < 2)
                        return;

                    $("#rooms > input").val(numberOfRooms - 1);

                    $(".room").last().remove();

                    formatDisplay();
                });

                $("#rooms > .plus").click(function () {
                    var numberOfRooms = parseInt($("#rooms > input").val());

                    $("#rooms > input").val(numberOfRooms + 1);

                    var clonedElement = $($(".room")[0]);

                    clonedElement.clone(true, true).appendTo(clonedElement.parent());

                    formatDisplay();
                });
            </script>




        <!-- collapse -->
        <div class="clearfix"></div>

        <div class="form col-xs-12 no-padding top-10" id="hotel-adv-panel">

            <div class="col-md-8 my-col offset-13 no-padding center-sm left-200">
                <div class="input-container width-25 padd-left-50">
                    <select class="form-control">
                        <option>ACCOMMODATION TYPE</option>
                        <option>Srbija</option>
                        <option>Crna Gora</option>
                        <option>Makedonija</option>
                        <option>Engleska</option>
                        <option>Nemacka</option>
                    </select>
                </div>
                <div class="input-container width-18 left-6">
                    <select class="form-control">
                        <option>ROOM TYPE</option>
                        <option>Srbija</option>
                        <option>Crna Gora</option>
                        <option>Makedonija</option>
                        <option>Engleska</option>
                        <option>Nemacka</option>
                    </select>
                </div>
                <div class="input-container width-18 left-6">
                    <select class="form-control">
                        <option>STAR RATING</option>
                        <option>Srbija</option>
                        <option>Crna Gora</option>
                        <option>Makedonija</option>
                        <option>Engleska</option>
                        <option>Nemacka</option>
                    </select>
                </div>

                <div class="input-container width-18 left-6">
                    <select class="form-control">
                        <option>PRICE</option>
                        <option>Srbija</option>
                        <option>Crna Gora</option>
                        <option>Makedonija</option>
                        <option>Engleska</option>
                        <option>Nemacka</option>
                    </select>
                </div>
                <div class="input-container width-18 left-6">
                    <select class="form-control">
                        <option>KIND OF TRIP</option>
                        <option>Srbija</option>
                        <option>Crna Gora</option>
                        <option>Makedonija</option>
                        <option>Engleska</option>
                        <option>Nemacka</option>
                    </select>
                </div>
            </div>

        </div>

    </div>
</div>


<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/price-box.js"></script>
<script src="assets/js/bootstrap-clockpicker.min.js"></script>
<script src="assets/js/my-script.js"></script>
<script src="assets/js/html5shiv.js"></script>
<script src="assets/js/respond.min.js"></script>
<script src="assets/js/tabcomplete.min.js"></script>
<script src="assets/js/livefilter.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/filterlist.min.js"></script>
<script src="assets/js/plugins.js"></script>

<script>
    $('#datepicker-hotel').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-hotel').val("CHECK IN");
            }
            else
            {
                $('#datepicker-hotel').val(dateText);
            }
        }
    });

    $('#datepicker-hotel-2').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-hotel-2').val("CHECK OUT");
            }
            else
            {
                $('#datepicker-hotel-2').val(dateText);
            }
        }
    });
</script>

<script>
    $("#hotel-adv").click(function () {
        $("#hotel-adv-panel").slideToggle("slow", function () {
            // Animation complete.
        });
    });

    $('#hotel-adv').click(function () {
        var $this = $(this);
        $this.toggleClass('.hotel-adv');
        if ($this.hasClass('.hotel-adv')) {
            $this.text('DEFAULT');
        } else {
            $this.text('ADVANCED');
        }
    });
    //    $(function () {                       //run when the DOM is ready
    //        $(".btn-jq").click(function () {  //use a class, since your ID gets mangled
    //            $(this).toggleClass("top-btn");      //add the class to the clicked element
    //        });
    //    });

    /* datepicker */
    $(document).ready(
            /* This is the function that will get executed after the DOM is fully loaded */
        function () {
            $("#datepicker-hotel").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-hotel-2").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });

        }
    );


    /////////////

    $("#sobe").click(function () {
        $(".box").slideToggle("slow", function () {
            // Animation complete.
        });
    });

</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
<script type="text/javascript" src="assets/js/highlight.min.js"></script>
