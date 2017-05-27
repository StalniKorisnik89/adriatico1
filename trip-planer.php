<!-- Main CSS -->
<link rel="stylesheet" href="assets/css/trip-planer.css">
<link rel="stylesheet" href="assets/css/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/github.min.css">


<div id="panel-planer" style="margin-left: 15px;margin-right: 15px">
    <div class="col-xs-12">
        <ul class="nav nav-tabs">
            <li class="active text-center col-md-2 offset-12 col-sm-3 col-xs-3 no-padding tab-xs"><a data-toggle="tab"
                                                                                                     href="#ferry">FERRY</a>
            </li>
            <li class="col-md-2 text-center col-sm-3 col-xs-3 no-padding tab-xs"><a data-toggle="tab" href="#cruise">CRUISE</a>
            </li>
            <span class="info">
                <a href=""><i class="fa fa-info-circle" aria-hidden="true"></i></a>
        </span>
        </ul>

    </div>
    <div class="tab-content">
        <div id="ferry" class="tab-pane fade in active">
            <div id="tab-transfer" class="col-md-12 no-padding">
                <div class="form col-xs-12 no-padding">
                    <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding width-100">
                        <div class="book-hotel">BOOK FERRY /CRUISE</div>
                    </div>
                    <div class="col-md-8 my-col no-padding center-sm">
                        <div class="input-container width-25">
                            <select class="form-control">
                                <option>DEPARATURE: CITY OF PORT</option>
                                <option>Srbija</option>
                                <option>Crna Gora</option>
                                <option>Makedonija</option>
                                <option>Engleska</option>
                                <option>Nemacka</option>
                            </select>
                        </div>
                        <div class="refresh">
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                        </div>
                        <div class="input-container width-25 left-6">
                            <select class="form-control">
                                <option>ARRIVAL: CITY OF PORT</option>
                                <option>Srbija</option>
                                <option>Crna Gora</option>
                                <option>Makedonija</option>
                                <option>Engleska</option>
                                <option>Nemacka</option>
                            </select>
                        </div>
                        <div class="input-container width-15 left-6 mar-left-0">
                            <input class="form-control calendar" id="datepicker-ferry" type="text" value="DEPARTURE"/>
                        </div>

                        <div class="input-container width-15 left-6">
                            <input class="form-control calendar" id="datepicker-ferry-2" type="text" value="RETURN"/>
                        </div>

                        <div class="input-container width-15 left-6">
                            <select class="form-control">
                                <option> 2 ADULT(S), 0 CHILD</option>
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
                        <div class="col-md-8 my-col no-padding center-sm mar-left-13">
                            <div class="input-container width-20">
                                <input type="checkbox" name="vehicle" value="Bike">MULTI WAY
                            </div>
                            <div class="input-container width-22">
                                <input type="checkbox" name="vehicle" value="Bike">VECHICLE
                            </div>
                            <div class="input-container width-18 left-6">
                                <select class="form-control">
                                    <option>FERRRY COMPANY</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </div>

                            <div class="input-container width-13 left-6">
                                <select class="form-control">
                                    <option>ROUTE FINDER</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </div>
                            <div class="input-container width-13 left-6">
                                <select class="form-control">
                                    <option>FLEXIBILITY</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </div>
                            <div class="input-container width-13 left-6">
                                <select class="form-control">
                                    <option>TICKET TYPE</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </div>

                            <div class="col-md-10 no-padding">
                                <div class="add-transfer R-T"><i class="fa fa-plus" aria-hidden="true"></i> ADD TRAIN
                                    TRIP
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
                            <div class="book-hotel">BOOK FERRY /CRUISE</div>
                        </div>
                        <div class="col-md-8 my-col no-padding center-sm">
                            <div class="input-container width-52 bot-10-xs">
                                <select class="form-control">
                                    <option>DESTINATION:COUNTRY, CITY OR PORT</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </div>
                            <div class="input-container width-15 left-6 mar-left-0">
                                <input class="form-control calendar" id="datepicker-ferry-3" type="text"
                                       value="DEPARTURE"/>
                            </div>
                            <div class="input-container width-15 left-6 mar-left-0">
                                <input class="form-control calendar" id="datepicker-ferry-4" type="text"
                                       value="RETURN"/>
                            </div>
                            <div class="input-container width-15 left-6">
                                <select class="form-control">
                                    <option> 2 ADULT(S), 0 CHILD</option>
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
                            <div class="col-md-8 my-col no-padding center-sm offset-13">
                                <div class="input-container width-25 bot-10-xs">
                                    <select class="form-control">
                                        <option>DEPART FROM: CITY OF PORT</option>
                                        <option>Srbija</option>
                                        <option>Crna Gora</option>
                                        <option>Makedonija</option>
                                        <option>Engleska</option>
                                        <option>Nemacka</option>
                                    </select>
                                </div>
                                <div class="input-container width-15 left-6">
                                    <select class="form-control">
                                        <option>CRUISE LINE</option>
                                        <option>Srbija</option>
                                        <option>Crna Gora</option>
                                        <option>Makedonija</option>
                                        <option>Engleska</option>
                                        <option>Nemacka</option>
                                    </select>
                                </div>
                                <div class="input-container width-15 left-6">
                                    <select class="form-control">
                                        <option>SHIP</option>
                                        <option>Srbija</option>
                                        <option>Crna Gora</option>
                                        <option>Makedonija</option>
                                        <option>Engleska</option>
                                        <option>Nemacka</option>
                                    </select>
                                </div>
                                <div class="input-container width-15 left-6">
                                    <select class="form-control">
                                        <option>DURATION</option>
                                        <option>Srbija</option>
                                        <option>Crna Gora</option>
                                        <option>Makedonija</option>
                                        <option>Engleska</option>
                                        <option>Nemacka</option>
                                    </select>
                                </div>
                                <div class="input-container width-13-center">
                                    <input type="checkbox" name="vehicle" value="Bike">HIGH SEA
                                </div>
                                <div class="input-container width-13-center">
                                    <input type="checkbox" name="vehicle" value="Bike">RIVER
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

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
