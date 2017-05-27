<!-- Main CSS -->
<link rel="stylesheet" href="assets/css/ferry-novi.css">
<link rel="stylesheet" href="assets/css/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/github.min.css">

<div class="ferry">
    <div id="panel-transfer" style="margin-left: 15px;margin-right: 15px">
        <div class="col-xs-12">
            <ul class="nav nav-tabs">
                <li class="active col-md-2 offset-12 col-sm-3 col-xs-3 no-padding tab-xs">
                    <a data-toggle="tab" href="#my-ferry">
                        <img src="assets/img/ferry.png" alt="">
                        FERRY
                    </a>
                </li>
                <li class="col-md-2 col-sm-3 col-xs-3 no-padding tab-xs">
                    <a data-toggle="tab" href="#cruise">
                        <img src="assets/img/Cruise.png" alt="">
                        CRUISE
                    </a>
                </li>
                <span class="info">
                    <a href=""><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                </span>
            </ul>
        </div>
        <div class="tab-content">
            <div id="my-ferry" class="tab-pane fade in active">
                <div id="tab-ferry"  class="col-md-12 no-padding">
                    <div class="form col-xs-12 no-padding">
                        <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding width-100 width-250">
                            <div class="book-hotel">BOOK FERRY/CRUIZE</div>
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
                            <button class="btn button btn-advanced" id="my-ferry-adv">ADVANCED</button>
                        </div>
                    </div>
                    <!-- collapse -->
                    <div class="clearfix"></div>
                    <div id="my-ferry-panel">
                        <div class="form col-xs-12 no-padding top-10">
                            <div class="col-md-8 my-col no-padding center-sm offset-13">
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
                <div class="tab-pane fade in active">
                    <div  class="col-md-12 bg-color">
                        <div class="form col-xs-12 no-padding top-25">
                            <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding width-100 width-250">
                                <div class="book-hotel">BOOK FERRY/CRUISE</div>
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

                            <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding left-6 float-right width-30">
                                <button class="btn button btn-search" type="button"><i class="fa fa-search"></i>SEARCH
                                </button>
                                <button class="btn button btn-advanced" id="cruise-adv">ADVANCED</button>
                            </div>
                        </div>
                        <!-- collapse -->
                        <div class="clearfix"></div>
                        <div id="cruise-panel">
                            <div class="form col-xs-12 no-padding top-10">
                                <div class="col-md-8 my-col no-padding center-sm offset-13">
                                    <div class="input-container width-25 cruise-25 bot-10-xs">
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
                                    <div class="input-container width-15 left-6 cruise-33">
                                        <select class="form-control">
                                            <option>DURATION</option>
                                            <option>Srbija</option>
                                            <option>Crna Gora</option>
                                            <option>Makedonija</option>
                                            <option>Engleska</option>
                                            <option>Nemacka</option>
                                        </select>
                                    </div>
                                    <div class="input-container width-13-center cruise-33">
                                        <input type="checkbox" name="vehicle" value="Bike">HIGH SEA
                                    </div>
                                    <div class="input-container width-13-center cruise-33">
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
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/price-box.js"></script>
<script src="assets/js/bootstrap-clockpicker.min.js"></script>
<script src="assets/js/my-script.js"></script>
<script src="assets/js/html5shiv.js"></script>
<script src="assets/js/respond.min.js"></script>
<script type="text/javascript">
    $('.clockpicker').clockpicker()
        .find('input').change(function () {
        console.log(this.value);
    });
    var input = $('#single-input-transfer').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });

    var input = $('#single-input-transfer-2').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });

    var input = $('#single-input-transfer-3').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    var input = $('#single-input-transfer-4').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    var input = $('#single-input-transfer-5').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    var input = $('#single-input-transfer-6').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    var input = $('#single-input-transfer-7').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    var input = $('#single-input-transfer-8').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    var input = $('#single-input-transfer-9').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    var input = $('#single-input-transfer-10').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });

    $('.clockpicker-with-callbacks').clockpicker({
        donetext: 'Done',
        init: function () {
            console.log("colorpicker initiated");
        },
        beforeShow: function () {
            console.log("before show");
        },
        afterShow: function () {
            console.log("after show");
        },
        beforeHide: function () {
            console.log("before hide");
        },
        afterHide: function () {
            console.log("after hide");
        },
        beforeHourSelect: function () {
            console.log("before hour selected");
        },
        afterHourSelect: function () {
            console.log("after hour selected");
        },
        beforeDone: function () {
            console.log("before done");
        },
        afterDone: function () {
            console.log("after done");
        }
    })
        .find('input').change(function () {
        console.log(this.value);
    });

    // Manually toggle to the minutes view
    $('#check-minutes').click(function (e) {
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show')
            .clockpicker('toggleView', 'minutes');
    });
    if (/mobile/i.test(navigator.userAgent)) {
        $('input').prop('readOnly', true);
    }
</script>

<script>
    $("#my-ferry-adv").click(function () {
        $("#my-ferry-panel").slideToggle("slow", function () {
            // Animation complete.
        });
    });
    $('#my-ferry-adv').click(function(){
        var $this = $(this);
        $this.toggleClass('.return-adv');
        if($this.hasClass('.return-adv')){
            $this.text('DEFAULT');
        } else {
            $this.text('ADVANCED');
        }
    });

    $("#cruise-adv").click(function () {
        $("#cruise-panel").slideToggle("slow", function () {
            // Animation complete.
        });
    });
    $('#multi-adv').click(function(){
        var $this = $(this);
        $this.toggleClass('.multi-adv');
        if($this.hasClass('.multi-adv')){
            $this.text('DEFAULT');
        } else {
            $this.text('ADVANCED');
        }
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
        }
    );

</script>
<script type="text/javascript" src="assets/js/highlight.min.js"></script>
