<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PLANNER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Scroll effect -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/trip-planer.css">
    <link rel="stylesheet" href="assets/css/bootstrap-clockpicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/github.min.css">

    <link href="assets/css/hover-min.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>

</head>
<body class="planner">
<div class="row">
<div id="panel-transfer" style="margin-left: 15px;margin-right: 15px">
    <div class="col-xs-12">
        <ul class="nav nav-tabs">
            <li class="active text-center col-md-2 offset-12 col-sm-3 col-xs-3 no-padding tab-xs"><a data-toggle="tab"
                                                                                                     href="#ferry">CUSTOMIZED
                    PACKAGE</a></li>
            <li class="col-md-2 text-center col-sm-3 col-xs-3 no-padding tab-xs"><a data-toggle="tab" href="#cruise">MADE
                    BY YOU</a></li>
        </ul>
        <span class="info">
                <a href=""><i class="fa fa-info-circle" aria-hidden="true"></i></a>
        </span>
    </div>
    <div class="tab-content">
        <div id="ferry" class="tab-pane fade in active">
            <div id="tab-transfer" class="col-md-12 no-padding">
                <div class="form col-xs-12 no-padding">
                    <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding width-100">
                        <div class="book-hotel">CREATE YOUR TRIP</div>
                    </div>
                    <div class="col-md-8 my-col no-padding center-sm">
                        <div class="input-container width-29">
                            <select class="form-control">
                                <option>DESTINATION</option>
                                <option>Srbija</option>
                                <option>Crna Gora</option>
                                <option>Makedonija</option>
                                <option>Engleska</option>
                                <option>Nemacka</option>
                            </select>
                        </div>
                        <div class="input-container width-14 left-6 mar-left-0">
                            <input class="form-control calendar" id="datepicker-activity" type="text" value="START"/>
                        </div>
                        <div class="input-container width-9 left-6">
                            <input class="form-control clock" id="single-input-activity" value="" placeholder="TIME">
                        </div>
                        <div class="input-container width-14 left-6">
                            <input class="form-control calendar" id="datepicker-activity-2" type="text" value="RETURN"/>
                        </div>
                        <div class="input-container width-9 left-6">
                            <input class="form-control clock" id="single-input-activity-2" value="" placeholder="TIME">
                        </div>
                        <div class="input-container width-25 left-6">
                            <select class="form-control">
                                <option>2 ADULTS, 0 CHILDREN</option>
                                <option>Srbija</option>
                                <option>Crna Gora</option>
                                <option>Makedonija</option>
                                <option>Engleska</option>
                                <option>Nemacka</option>
                            </select>
                        </div>
                    </div>


                    <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding left-6 float-right width-30">
                        <button class="btn button btn-search" type="button"><i class="fa fa-search"></i>SEARCH</button>
                        <button class="btn button btn-advanced" id="ferry-adv">ADVANCED</button>
                    </div>
                </div>
                <!-- collapse -->
                <div class="clearfix"></div>

                <div id="ferry-adv-panel">
                    <div class="form col-xs-12 no-padding top-10 top-sm offset-16">
                        <div class="col-md-8 my-col no-padding center-sm">
                            <div class="input-container width-20">
                                <select class="form-control">
                                    <option>PACKAGES</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </div>

                            <div class="input-container width-12 left-6">
                                <select class="form-control">
                                    <option>CATEGORIES</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </div>
                            <div class="input-container width-12 left-6">
                                <select class="form-control">
                                    <option>THEMES</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </div>
                            <div class="input-container width-14 left-6">
                                <select class="form-control">
                                    <option>FLEXIBILITY</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </div>
                            <div class="input-container width-32">
                                <input type="checkbox" name="vehicle" value="Bike">INCLUDE NEARBY AIRPORT OR DEPARTURE
                                LOCATION
                            </div>
                            <div class="col-md-10 no-padding">
                                <div class="add-transfer R-T"><i class="fa fa-plus" aria-hidden="true"></i> ADD
                                    DESTINATION
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="cruise" class="tab-pane fade">
            <div id="tab-transfer" class="tab-pane fade in active">
                <div id="tab-transfer" class="col-md-12 bg-color no-padding">
                    <div class="form col-xs-12 no-padding">
                        <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding width-100">
                            <div class="book-hotel">CREATE YOUR TRIP</div>
                        </div>
                        <div class="col-md-8 my-col no-padding center-sm">
                            <div class="input-container width-29">
                                <select class="form-control">
                                    <option>DESTINATION</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </div>
                            <div class="input-container width-14 left-6 mar-left-0">
                                <input class="form-control calendar" id="datepicker-activity" type="text"
                                       value="START"/>
                            </div>
                            <div class="input-container width-9 left-6">
                                <input class="form-control clock" id="single-input-activity" value=""
                                       placeholder="TIME">
                            </div>
                            <div class="input-container width-14 left-6">
                                <input class="form-control calendar" id="datepicker-activity-2" type="text"
                                       value="RETURN"/>
                            </div>
                            <div class="input-container width-9 left-6">
                                <input class="form-control clock" id="single-input-activity-2" value=""
                                       placeholder="TIME">
                            </div>
                            <div class="input-container width-25 left-6">
                                <select class="form-control">
                                    <option>2 ADULTS, 0 CHILDREN</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </div>
                        </div>


                        <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding left-6 float-right width-30 top-sm-btn-2">
                            <button class="btn button btn-search" type="button"><i class="fa fa-search"></i>SEARCH
                            </button>
                            <button class="btn button btn-advanced" id="cruise-adv">ADVANCED</button>
                        </div>
                    </div>
                    <!-- collapse -->
                    <div class="clearfix"></div>
                    <div id="cruise-adv-panel">
                        <div class="form col-xs-12 no-padding top-sm-2">
                            <div class="col-md-8 my-col no-padding center-sm mar-left-13">
                                <div class="input-container width-20">
                                    <select class="form-control">
                                        <option>PACKAGES</option>
                                        <option>Srbija</option>
                                        <option>Crna Gora</option>
                                        <option>Makedonija</option>
                                        <option>Engleska</option>
                                        <option>Nemacka</option>
                                    </select>
                                </div>

                                <div class="input-container width-12 left-6">
                                    <select class="form-control">
                                        <option>CATEGORIES</option>
                                        <option>Srbija</option>
                                        <option>Crna Gora</option>
                                        <option>Makedonija</option>
                                        <option>Engleska</option>
                                        <option>Nemacka</option>
                                    </select>
                                </div>
                                <div class="input-container width-12 left-6">
                                    <select class="form-control">
                                        <option>THEMES</option>
                                        <option>Srbija</option>
                                        <option>Crna Gora</option>
                                        <option>Makedonija</option>
                                        <option>Engleska</option>
                                        <option>Nemacka</option>
                                    </select>
                                </div>
                                <div class="input-container width-14 left-6">
                                    <select class="form-control">
                                        <option>FLEXIBILITY</option>
                                        <option>Srbija</option>
                                        <option>Crna Gora</option>
                                        <option>Makedonija</option>
                                        <option>Engleska</option>
                                        <option>Nemacka</option>
                                    </select>
                                </div>
                                <div class="input-container width-32">
                                    <input type="checkbox" name="vehicle" value="Bike">INCLUDE NEARBY AIRPORT OR
                                    DEPARTURE LOCATION
                                </div>
                                <div class="checkbox-list">
                                    <ul class="list-inline">
                                        <li><input type="checkbox" name="hotel" value="hotel">HOTEL</li>
                                        <li><input type="checkbox" name="flight" value="flight">FLIGHT</li>
                                        <li class="li-11"><input type="checkbox" name="transfer" value="transfer">TRANSFER</li>
                                        <li><input type="checkbox" name="activity" value="activity">ACTIVITY</li>
                                        <li><input type="checkbox" name="trips" value="trips">TRIPS</li>
                                        <li><input type="checkbox" name="rent" value="rent">RENT A</li>
                                        <li><input type="checkbox" name="bus" value="bus">BUS</li>
                                        <li><input type="checkbox" name="train" value="train">TRAIN</li>
                                        <li class="li-14"><input type="checkbox" name="ferry" value="ferry">FERRY/CRUISE</li>
                                    </ul>
                                </div>
                                <div class="col-md-10 no-padding">
                                    <div class="add-transfer R-T"><i class="fa fa-plus" aria-hidden="true"></i> ADD
                                        DESTINATION
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

<div class="dare">
    <?php ?>

    <?php include "flight-1.php"; ?>
</div>




<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/price-box.js"></script>
<script src="assets/js/bootstrap-clockpicker.min.js"></script>
<script src="assets/js/my-script.js"></script>
<script src="assets/js/html5shiv.js"></script>
<script src="assets/js/respond.min.js"></script>

<script>
    $("#ferry-adv").click(function () {
        $("#ferry-adv-panel").slideToggle("slow", function () {
            // Animation complete.
        });
    });
    $(document).ready(function (e) {
        $('#ferry-adv').click(function () {
            $(this).val("DEFAULT");
        });
    });

    $("#cruise-adv").click(function () {
        $("#cruise-adv-panel").slideToggle("slow", function () {
            // Animation complete.
        });
    });
    $(document).ready(function (e) {
        $('#cruise-adv').click(function () {
            $(this).val("DEFAULT");
        });
    });

    /* datepicker */
    $(document).ready(
            /* This is the function that will get executed after the DOM is fully loaded */
        function () {
            $("#datepicker-ferry").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-ferry-2").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-ferry-3").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-ferry-4").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-ferry-5").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-ferry-6").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });

        }
    );

</script>
<script type="text/javascript" src="assets/js/highlight.min.js"></script>
</body>
</html>