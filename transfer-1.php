<!-- Main CSS -->
<link rel="stylesheet" href="assets/css/transfer.css">
<link rel="stylesheet" href="assets/css/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/github.min.css">

<div class="transfer">
    <div id="panel-transfer" style="margin-left: 15px;margin-right: 15px">
        <div class="col-xs-12">
            <ul class="nav nav-tabs">
                <li class="active col-md-2 offset-12 col-sm-3 col-xs-3 no-padding tab-xs"><a data-toggle="tab"
                                                                                             href="#one-way"><i
                                class="fa fa-arrow-right" aria-hidden="true"></i>ONE WAY</a></li>
                <li class="col-md-2 col-sm-3 col-xs-3 no-padding tab-xs"><a data-toggle="tab" href="#return"><i
                                class="fa fa-refresh" aria-hidden="true"></i>RETURN</a></li>
                <li class="col-md-2 col-sm-3 col-xs-3 no-padding tab-xs"><a data-toggle="tab" href="#multi-trip"><i
                                class="fa fa-arrows" aria-hidden="true"></i>MULTI TRIP</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div id="one-way" class="tab-pane fade in active">
                <div  class="col-md-12 no-padding">
                    <div class="form col-xs-12 no-padding">
                        <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding width-100 width-250">
                            <div class="book-hotel">BOOK TRANSFER</div>
                        </div>
                        <div class="col-md-8 my-col no-padding center-sm">
                            <div class="input-container width-25">
                                <select class="form-control">
                                    <option>FROM: COUNTRY, CITY...</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </div>
                            <div class="input-container width-25 left-6">
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
                                <input class="form-control calendar" id="datepicker-transfer" type="text"
                                       value="PICK-UP DATE"/>
                            </div>

                            <div class="input-container width-15 left-6">
                                <input class="form-control clock" id="single-input-transfer" value="" placeholder="TIME">
                            </div>

                            <div class="input-container width-15 left-6">
                                <select class="form-control">
                                    <option>1 PERSON</option>
                                    <option>Srbija</option>
                                    <option>Crna Gora</option>
                                    <option>Makedonija</option>
                                    <option>Engleska</option>
                                    <option>Nemacka</option>
                                </select>
                            </div>
                        </div>


                        <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding left-6 float-right width-30 top-sm-btn-way">
                            <button class="btn button btn-search" type="button"><i class="fa fa-search"></i>SEARCH</button>
                            <button class="btn button btn-advanced" id="transfer-adv">ADVANCED</button>
                        </div>
                    </div>
                    <!-- collapse -->
                    <div class="clearfix"></div>
                    <div id="transfer-adv-panel">
                        <div class="form col-xs-12 no-padding top-10 top-sm-panel-way">
                            <div class="col-md-8 my-col no-padding center-sm offset-13 left-200">
                                <div class="input-container width-25 padd-left-50">
                                    <select class="form-control">
                                        <option>TO: COUNTRY, CITY...</option>
                                        <option>Srbija</option>
                                        <option>Crna Gora</option>
                                        <option>Makedonija</option>
                                        <option>Engleska</option>
                                        <option>Nemacka</option>
                                    </select>
                                </div>
                                <div class="input-container width-25 left-6">
                                    <select class="form-control">
                                        <option>DROP-OFF LOCATION</option>
                                        <option>Srbija</option>
                                        <option>Crna Gora</option>
                                        <option>Makedonija</option>
                                        <option>Engleska</option>
                                        <option>Nemacka</option>
                                    </select>
                                </div>
                                <div class="input-container width-15 left-6 mar-left-0">
                                    <input class="form-control calendar" id="datepicker-transfer-2" type="text"
                                           value="DROP-OFF DATE"/>
                                </div>

                                <div class="input-container width-15 left-6">
                                    <input class="form-control clock" id="single-input-transfer-2" value=""
                                           placeholder="TIME">
                                </div>

                                <div class="input-container width-15 left-6">
                                    <select class="form-control">
                                        <option>0 BAGS</option>
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
            <div id="return" class="tab-pane fade">
                <div class="tab-pane fade in active">
                    <div  class="col-md-12 bg-color">
                        <div class="col-md-10 offset-13 offset-0 no-padding left-200">
                            <div class="book-hotel R-T mar-top-0" style="padding: 5px 0">TRANSFER 1</div>
                        </div>
                        <div class="form col-xs-12 no-padding">
                            <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding width-100 width-250">
                                <div class="book-hotel">BOOK TRANSFER</div>
                            </div>
                            <div class="col-md-8 my-col no-padding center-sm">
                                <div class="input-container width-25">
                                    <select class="form-control">
                                        <option>FROM: COUNTRY, CITY...</option>
                                        <option>Srbija</option>
                                        <option>Crna Gora</option>
                                        <option>Makedonija</option>
                                        <option>Engleska</option>
                                        <option>Nemacka</option>
                                    </select>
                                </div>
                                <div class="input-container width-25 left-6">
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
                                    <input class="form-control calendar" id="datepicker-transfer-3" type="text"
                                           value="PICK-UP DATE"/>
                                </div>

                                <div class="input-container width-15 left-6">
                                    <input class="form-control clock" id="single-input-transfer-3" value=""
                                           placeholder="TIME">
                                </div>

                                <div class="input-container width-15 left-6">
                                    <select class="form-control">
                                        <option>1 PERSON</option>
                                        <option>Srbija</option>
                                        <option>Crna Gora</option>
                                        <option>Makedonija</option>
                                        <option>Engleska</option>
                                        <option>Nemacka</option>
                                    </select>
                                </div>
                            </div>


                            <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding left-6 float-right width-30 top-sm-btn-return">
                                <button class="btn button btn-search" type="button"><i class="fa fa-search"></i>SEARCH
                                </button>
                                <button class="btn button btn-advanced" id="return-adv">ADVANCED</button>
                            </div>
                        </div>
                        <!-- collapse -->
                        <div class="clearfix"></div>
                        <div id="panel-return">
                            <div class="form col-xs-12 no-padding top-10 top-sm-panel-return">
                                <div class="col-md-8 my-col no-padding center-sm offset-13 left-200">
                                    <div class="input-container width-25 padd-left-50">
                                        <select class="form-control">
                                            <option>TO: COUNTRY, CITY...</option>
                                            <option>Srbija</option>
                                            <option>Crna Gora</option>
                                            <option>Makedonija</option>
                                            <option>Engleska</option>
                                            <option>Nemacka</option>
                                        </select>
                                    </div>
                                    <div class="input-container width-25 left-6">
                                        <select class="form-control">
                                            <option>DROP-OF LOCATION</option>
                                            <option>Srbija</option>
                                            <option>Crna Gora</option>
                                            <option>Makedonija</option>
                                            <option>Engleska</option>
                                            <option>Nemacka</option>
                                        </select>
                                    </div>
                                    <div class="input-container width-15 left-6 mar-left-0">
                                        <input class="form-control calendar" id="datepicker-transfer-4" type="text"
                                               value="DROP-OF DATE"/>
                                    </div>

                                    <div class="input-container width-15 left-6">
                                        <input class="form-control clock" id="single-input-transfer-4" value=""
                                               placeholder="TIME">
                                    </div>

                                    <div class="input-container width-15 left-6">
                                        <select class="form-control">
                                            <option>0 BAGS</option>
                                            <option>Srbija</option>
                                            <option>Crna Gora</option>
                                            <option>Makedonija</option>
                                            <option>Engleska</option>
                                            <option>Nemacka</option>
                                        </select>
                                    </div>
                                    <div CLASS="top-10">
                                        <div class="input-container width-20 rt-width">
                                            <div class="book-hotel R-T" style="padding: 5px 0">RETURN TRANSFER</div>
                                        </div>
                                        <div class="input-container width-15 sm-20 left-6 mar-left-0">
                                            <input class="form-control calendar" id="datepicker-transfer-5" type="text"
                                                   value="PICK-UP DATE"/>
                                        </div>

                                        <div class="input-container width-15 sm-20 left-6">
                                            <input class="form-control clock" id="single-input-transfer-5" value=""
                                                   placeholder="TIME">
                                        </div>
                                        <div class="input-container width-15 sm-20 left-6 mar-left-0">
                                            <input class="form-control calendar" id="datepicker-transfer-6" type="text"
                                                   value="DROP-OF DATE"/>
                                        </div>

                                        <div class="input-container width-15 sm-20 left-6">
                                            <input class="form-control clock" id="single-input-transfer-6" value=""
                                                   placeholder="TIME">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="multi-trip" class="tab-pane fade">
                <div id="one-way" class="tab-pane fade in active">
                    <div class="col-md-12 bg-color">
                        <div class="col-md-10 offset-13 offset-0 no-padding left-200">
                            <div class="book-hotel R-T mar-top-0" style="padding: 5px 0;">TRANSFER 1</div>
                        </div>
                        <div class="form col-xs-12 no-padding">
                            <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding width-100 width-250">
                                <div class="book-hotel transfer-book">BOOK TRANSFER</div>
                            </div>
                            <div class="col-md-8 my-col no-padding center-sm">
                                <div class="input-container width-25">
                                    <select class="form-control">
                                        <option>FROM: COUNTRY, CITY...</option>
                                        <option>Srbija</option>
                                        <option>Crna Gora</option>
                                        <option>Makedonija</option>
                                        <option>Engleska</option>
                                        <option>Nemacka</option>
                                    </select>
                                </div>
                                <div class="input-container width-25 left-6">
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
                                    <input class="form-control calendar" id="datepicker-transfer-7" type="text"
                                           value="PICK-UP DATE"/>
                                </div>

                                <div class="input-container width-15 left-6">
                                    <input class="form-control clock" id="single-input-transfer-7" value=""
                                           placeholder="TIME">
                                </div>

                                <div class="input-container width-15 left-6">
                                    <select class="form-control">
                                        <option>1 PERSON</option>
                                        <option>Srbija</option>
                                        <option>Crna Gora</option>
                                        <option>Makedonija</option>
                                        <option>Engleska</option>
                                        <option>Nemacka</option>
                                    </select>
                                </div>
                            </div>


                            <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding left-6 float-right width-30 top-sm-btn top-sm-btn-multi">
                                <button class="btn button btn-search" type="button"><i class="fa fa-search"></i>SEARCH
                                </button>
                                <button class="btn button btn-advanced" id="multi-adv">ADVANCED</button>
                            </div>
                        </div>
                        <!-- collapse -->
                        <div class="clearfix"></div>
                        <div id="panel-transfer">
                            <div class="form col-xs-12 no-padding top-10 top-sm-panel-multi">
                                <div class="col-md-8 my-col no-padding center-sm offset-13 left-200">
                                    <div class="input-container width-25 padd-left-50">
                                        <select class="form-control">
                                            <option>TO: COUNTRY, CITY...</option>
                                            <option>Srbija</option>
                                            <option>Crna Gora</option>
                                            <option>Makedonija</option>
                                            <option>Engleska</option>
                                            <option>Nemacka</option>
                                        </select>
                                    </div>
                                    <div class="input-container width-25 left-6">
                                        <select class="form-control">
                                            <option>DROP-OF LOCATION</option>
                                            <option>Srbija</option>
                                            <option>Crna Gora</option>
                                            <option>Makedonija</option>
                                            <option>Engleska</option>
                                            <option>Nemacka</option>
                                        </select>
                                    </div>
                                    <div class="input-container width-15 left-6 mar-left-0">
                                        <input class="form-control calendar" id="datepicker-transfer-8" type="text"
                                               value="DROP-OF DATE"/>
                                    </div>

                                    <div class="input-container width-15 left-6">
                                        <input class="form-control clock" id="single-input-transfer-8" value=""
                                               placeholder="TIME">
                                    </div>

                                    <div class="input-container width-15 left-6">
                                        <select class="form-control">
                                            <option>0 BAGS</option>
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
    $('#datepicker-transfer').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-transfer').val("CHECK IN");
            }
            else
            {
                $('#datepicker-transfer').val(dateText);
            }
        }
    });

    $('#datepicker-transfer-2').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-transfer-2').val("CHECK OUT");
            }
            else
            {
                $('#datepicker-transfer-2').val(dateText);
            }
        }
    });
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

    $("#return-adv").click(function () {
        $("#panel-return").slideToggle("slow", function () {
            // Animation complete.
        });
    });
    $('#return-adv').click(function(){
        var $this = $(this);
        $this.toggleClass('.return-adv');
        if($this.hasClass('.return-adv')){
            $this.text('DEFAULT');
        } else {
            $this.text('ADVANCED');
        }
    });

    $("#multi-adv").click(function () {
        $("#panel-multi").slideToggle("slow", function () {
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
            $("#datepicker-transfer").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-transfer-2").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-transfer-3").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-transfer-4").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-transfer-5").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-transfer-6").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-transfer-7").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-transfer-8").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-transfer-9").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-transfer-10").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
        }
    );

</script>
<script type="text/javascript" src="assets/js/highlight.min.js"></script>
