<!-- Main CSS -->
<link rel="stylesheet" href="assets/css/rent-novi.css">
<link rel="stylesheet" href="assets/css/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/github.min.css">

<div class="rent">
    <div id="panel-transfer" style="margin-left: 15px;margin-right: 15px">
        <div class="col-xs-12">
            <ul class="nav nav-tabs">
                <li class="active col-md-2 offset-12 col-sm-3 col-xs-3 no-padding tab-xs">
                    <a data-toggle="tab" href="#rent-vehicle">
                        <i class="fa fa-car" aria-hidden="true"></i>
                        VEHICLE
                    </a>
                </li>
                <li class="col-md-2 col-sm-3 col-xs-3 no-padding tab-xs">
                    <a data-toggle="tab" href="#rent-equipment">
                        <i class="fa fa-pied-piper-alt" aria-hidden="true"></i>
                        EQUIPMENT
                    </a>
                </li>
                <li class="col-md-2 col-sm-3 col-xs-3 no-padding tab-xs">
                    <a data-toggle="tab" href="#rent-staff">
                        <i class="fa fa-user-secret" aria-hidden="true"></i>
                        STAFF
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div id="rent-vehicle" class="tab-pane fade in active">
                <div  class="col-md-12 no-padding">
                    <div class="form col-xs-12 no-padding">
                        <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding width-100 width-250">
                            <div class="book-hotel">RENT A...</div>
                        </div>
                        <div class="col-md-8 my-col no-padding center-sm">
                            <div class="input-container width-15 bot-10-xs">
                                <select class="form-control">
                                    <option>DESTINATION</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </div>
                            <div class="input-container width-15 left-6">
                                <select class="form-control">
                                    <option>PICK-UP LOCATION</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </div>
                            <div class="input-container width-15 left-6 mar-left-0">
                                <input class="form-control calendar" id="datepicker-rent" type="text" value="RENTAL START"/>
                            </div>
                            <div class="input-container width-9 left-6">
                                <input class="form-control clock" id="single-input-5" value="" placeholder="TIME">
                            </div>
                            <div class="input-container width-15 left-6">
                                <input class="form-control "  value="" placeholder="DROP OF LOCATION">
                            </div>
                            <div class="input-container width-15 left-6 mar-left-0">
                                <input class="form-control calendar" id="datepicker-rent-2" type="text" value="RETURN"/>
                            </div>
                            <div class="input-container width-9 left-6">
                                <input class="form-control clock" id="single-input-6" value="" placeholder="TIME">
                            </div>

                        </div>


                        <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding left-6 float-right width-30">
                            <button class="btn button btn-search" type="button"><i class="fa fa-search"></i>SEARCH</button>
                            <button class="btn button btn-advanced" id="vehicle-adv">ADVANCED</button>
                        </div>
                    </div>
                    <!-- collapse -->
                    <div class="clearfix"></div>
                    <div id="rent-vehicle-panel">
                        <div class="form col-xs-12 no-padding top-10">
                            <div class="col-md-8 my-col no-padding center-sm offset-13 text-right">
                                <div class="input-container width-15 bot-10-xs padd-left-50">
                                    <select class="form-control">
                                        <option>SELECT VEHICLE</option>
                                        <option>Srbija</option>
                                        <option>Crna Gora</option>
                                        <option>Makedonija</option>
                                        <option>Engleska</option>
                                        <option>Nemacka</option>
                                    </select>
                                </div>
                                <div class="input-container width-12 left-6">
                                    <select class="form-control">
                                        <option>DRIVER'S AGE</option>
                                        <option>Srbija</option>
                                        <option>Crna Gora</option>
                                        <option>Makedonija</option>
                                        <option>Engleska</option>
                                        <option>Nemacka</option>
                                    </select>
                                </div>
                                <div class="input-container width-15 left-6">
                                    <select class="form-control">
                                        <option>CAR SPECIFICATION</option>
                                        <option>Srbija</option>
                                        <option>Crna Gora</option>
                                        <option>Makedonija</option>
                                        <option>Engleska</option>
                                        <option>Nemacka</option>
                                    </select>
                                </div>
                                <div class="input-container width-12 left-6">
                                    <select class="form-control">
                                        <option>RATING</option>
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
            </div>
            <div id="rent-equipment" class="tab-pane fade">
                <div class="tab-pane fade in active">
                    <div  class="col-md-12 bg-color">
                        <div class="form col-xs-12 no-padding top-25">
                            <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding width-100 width-250">
                                <div class="book-hotel">RENT A...</div>
                            </div>
                            <div class="col-md-8 my-col no-padding center-sm">
                            <div class="input-container width-15 bot-10-xs">
                                <select class="form-control">
                                    <option>DESTINATION</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </div>
                            <div class="input-container width-15 left-6">
                                <select class="form-control">
                                    <option>PICK-UP LOCATION</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </div>
                            <div class="input-container width-15 left-6 mar-left-0">
                                <input class="form-control calendar" id="datepicker-rent-3" type="text" value="RENTAL START"/>
                            </div>
                            <div class="input-container width-9 left-6">
                                <input class="form-control clock" id="single-input-5" value="" placeholder="TIME">
                            </div>
                            <div class="input-container width-15 left-6">
                                <input class="form-control "  value="" placeholder="DROP OF LOCATION">
                            </div>
                            <div class="input-container width-15 left-6 mar-left-0">
                                <input class="form-control calendar" id="datepicker-rent-4" type="text" value="RETURN"/>
                            </div>
                            <div class="input-container width-9 left-6">
                                <input class="form-control clock" id="single-input-6" value="" placeholder="TIME">
                            </div>

                        </div>

                            <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding left-6 float-right width-30">
                                <button class="btn button btn-search" type="button"><i class="fa fa-search"></i>SEARCH
                                </button>
                                <button class="btn button btn-advanced" id="equipment-adv">ADVANCED</button>
                            </div>
                        </div>
                        <!-- collapse -->
                        <div class="clearfix"></div>
                        <div id="rent-equipment-panel">
                            <div class="form col-xs-12 no-padding top-10">
                                <div class="col-md-8 my-col no-padding center-sm offset-13 text-right">
                                    <div class="input-container width-15 bot-10-xs">
                                        <select class="form-control">
                                            <option>SELECT EQUIPMENT</option>
                                            <option>Srbija</option>
                                            <option>Crna Gora</option>
                                            <option>Makedonija</option>
                                            <option>Engleska</option>
                                            <option>Nemacka</option>
                                        </select>
                                    </div>
                                    <div class="input-container width-13-5 left-6">
                                        <select class="form-control">
                                            <option>RENTER'S AGE</option>
                                            <option>Srbija</option>
                                            <option>Crna Gora</option>
                                            <option>Makedonija</option>
                                            <option>Engleska</option>
                                            <option>Nemacka</option>
                                        </select>
                                    </div>
                                    <div class="input-container width-21 left-6">
                                        <select class="form-control">
                                            <option>EQUIPMENT SPECIFICATION</option>
                                            <option>Srbija</option>
                                            <option>Crna Gora</option>
                                            <option>Makedonija</option>
                                            <option>Engleska</option>
                                            <option>Nemacka</option>
                                        </select>
                                    </div>
                                    <div class="input-container width-12 left-6">
                                        <select class="form-control">
                                            <option>RATING</option>
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
                </div>
            </div>


            <div id="rent-staff" class="tab-pane fade">
                <div id="one-way" class="tab-pane fade in active">
                    <div class="col-md-12 bg-color">
                        <div class="form col-xs-12 no-padding top-25">
                            <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding width-100 width-250">
                                <div class="book-hotel transfer-book">RENT A...</div>
                            </div>
                            <div class="col-md-8 my-col no-padding center-sm">
                                <div class="input-container width-20">
                                    <select class="form-control">
                                        <option>FROM: COUNTRY, CITY...</option>
                                        <option>Srbija</option>
                                        <option>Crna Gora</option>
                                        <option>Makedonija</option>
                                        <option>Engleska</option>
                                        <option>Nemacka</option>
                                    </select>
                                </div>
                                <div class="input-container width-20 left-6">
                                    <select class="form-control">
                                        <option>PICK-UP LOCATION</option>
                                        <option>Srbija</option>
                                        <option>Crna Gora</option>
                                        <option>Makedonija</option>
                                        <option>Engleska</option>
                                        <option>Nemacka</option>
                                    </select>
                                </div>
                                <div class="input-container width-20 left-6 mar-left-0">
                                    <input class="form-control calendar" id="datepicker-rent-5" type="text" value="RENTAL START"/>
                                </div>
                                <div class="input-container width-9 left-6">
                                    <input class="form-control clock" id="single-input-3" value="" placeholder="TIME">
                                </div>
                                <div class="input-container width-20 left-6 mar-left-0">
                                    <input class="form-control calendar" id="datepicker-rent-6" type="text" value="RETURN"/>
                                </div>
                                <div class="input-container width-9 left-6">
                                    <input class="form-control clock" id="single-input-4" value="" placeholder="TIME">
                                </div>
                            </div>


                            <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding left-6 float-right width-30 ">
                                <button class="btn button btn-search" type="button"><i class="fa fa-search"></i>SEARCH
                                </button>
                                <button class="btn button btn-advanced" id="staff-adv">ADVANCED</button>
                            </div>
                        </div>
                        <!-- collapse -->
                        <div class="clearfix"></div>
                        <div id="rent-staff-panel">
                            <div class="form col-xs-12 no-padding top-10">
                                <div class="col-md-8 my-col no-padding center-sm offset-13 text-right">
                                    <div class="input-container width-15 bot-10-xs">
                                        <select class="form-control">
                                            <option>SELECT STAFF</option>
                                            <option>Srbija</option>
                                            <option>Crna Gora</option>
                                            <option>Makedonija</option>
                                            <option>Engleska</option>
                                            <option>Nemacka</option>
                                        </select>
                                    </div>
                                    <div class="input-container width-13-5 left-6">
                                        <select class="form-control">
                                            <option>KIND OF RENTAL</option>
                                            <option>Srbija</option>
                                            <option>Crna Gora</option>
                                            <option>Makedonija</option>
                                            <option>Engleska</option>
                                            <option>Nemacka</option>
                                        </select>
                                    </div>
                                    <div class="input-container width-21 left-6">
                                        <select class="form-control">
                                            <option>STAFF SPECIFICATION</option>
                                            <option>Srbija</option>
                                            <option>Crna Gora</option>
                                            <option>Makedonija</option>
                                            <option>Engleska</option>
                                            <option>Nemacka</option>
                                        </select>
                                    </div>
                                    <div class="input-container width-12 left-6">
                                        <select class="form-control">
                                            <option>RATING</option>
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
    //    $("#transfer-adv").click(function () {
    //        $("#transfer-adv-panel").slideToggle("slow", function () {
    //            // Animation complete.
    //        });
    //    });
    $('#transfer-adv').click(function(){
        var $this = $(this);
        $this.toggleClass('.transfer-adv');
        if($this.hasClass('.transfer-adv')){
            $this.text('DEFAULT');
        } else {
            $this.text('ADVANCED');
        }
    });

    $("#vehicle-adv").click(function () {
        $("#rent-vehicle-panel").slideToggle("slow", function () {
            // Animation complete.
        });
    });
    $('#vehicle-adv').click(function(){
        var $this = $(this);
        $this.toggleClass('.return-adv');
        if($this.hasClass('.return-adv')){
            $this.text('DEFAULT');
        } else {
            $this.text('ADVANCED');
        }
    });

    $("#equipment-adv").click(function () {
        $("#rent-equipment-panel").slideToggle("slow", function () {
            // Animation complete.
        });
    });
    $('#equipment-adv').click(function(){
        var $this = $(this);
        $this.toggleClass('.return-adv');
        if($this.hasClass('.return-adv')){
            $this.text('DEFAULT');
        } else {
            $this.text('ADVANCED');
        }
    });

    $("#staff-adv").click(function () {
        $("#rent-staff-panel").slideToggle("slow", function () {
            // Animation complete.
        });
    });
    $('#staff-adv').click(function(){
        var $this = $(this);
        $this.toggleClass('.multi-adv');
        if($this.hasClass('.multi-adv')){
            $this.text('DEFAULT');
        } else {
            $this.text('ADVANCED');
        }
    });

    $('#datepicker-rent').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-rent').val("CHECK IN");
            }
            else
            {
                $('#datepicker-rent').val(dateText);
            }
        }
    });

    $('#datepicker-rent-2').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-rent-2').val("CHECK OUT");
            }
            else
            {
                $('#datepicker-rent-2').val(dateText);
            }
        }
    });

    $('#datepicker-rent-3').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-rent-3').val("CHECK IN");
            }
            else
            {
                $('#datepicker-rent-3').val(dateText);
            }
        }
    });

    $('#datepicker-rent-4').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-rent-4').val("CHECK OUT");
            }
            else
            {
                $('#datepicker-rent-4').val(dateText);
            }
        }
    });

    $('#datepicker-rent-5').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-rent-5').val("CHECK IN");
            }
            else
            {
                $('#datepicker-rent-5').val(dateText);
            }
        }
    });

    $('#datepicker-rent-6').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-rent-6').val("CHECK OUT");
            }
            else
            {
                $('#datepicker-rent-6').val(dateText);
            }
        }
    });

    /* datepicker */
    $(document).ready(
        /* This is the function that will get executed after the DOM is fully loaded */
        function () {
            $("#datepicker-rent").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-rent-2").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-rent-3").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-rent-4").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-rent-5").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-rent-6").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
        }
    );

</script>
<script type="text/javascript" src="assets/js/highlight.min.js"></script>
