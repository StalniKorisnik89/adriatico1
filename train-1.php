<!-- Main CSS -->
<link rel="stylesheet" href="assets/css/train.css">
<link rel="stylesheet" href="assets/css/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/github.min.css">


<div id="panel-train" style="margin-left: 15px;margin-right: 15px">
    <div class="form col-xs-12 no-padding">
        <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding width-100">
            <div class="book-hotel">BOOK TRAIN TICKET</div>
        </div>
        <div class="col-md-8 my-col no-padding center-sm">
            <div class="input-container width-25">
                <select class="form-control">
                    <option>DEPARATURE STATION</option>
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
                    <option>ARRIVAL STATION</option>
                    <option>Srbija</option>
                    <option>Crna Gora</option>
                    <option>Makedonija</option>
                    <option>Engleska</option>
                    <option>Nemacka</option>
                </select>
            </div>
            <div class="input-container width-15 left-6 mar-left-0">
                <input class="form-control calendar" id="datepicker-train" type="text" value="DEPARTURE"/>
            </div>

            <div class="input-container width-15 left-6">
                <input class="form-control calendar" id="datepicker-train-2" type="text" value="RETURN"/>
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
            <button class="btn button btn-advanced" id="train-adv">ADVANCED</button>
        </div>
    </div>
    <!-- collapse -->
    <div class="clearfix"></div>
    <div id="train-adv-panel">
        <div class="form col-xs-12 no-padding top-10 top-sm">
            <div class="col-md-8 my-col no-padding center-sm mar-left-13">
                <div class="input-container width-39">
                    <input type="checkbox" name="vehicle" value="Bike">MULTI TRIP
                </div>
                <div class="input-container width-17 left-6">
                    <select class="form-control">
                        <option>STOPS</option>
                        <option>Srbija</option>
                        <option>Crna Gora</option>
                        <option>Makedonija</option>
                        <option>Engleska</option>
                        <option>Nemacka</option>
                    </select>
                </div>

                <div class="input-container width-14 left-6">
                    <select class="form-control">
                        <option>KIND OF TRIP</option>
                        <option>Srbija</option>
                        <option>Crna Gora</option>
                        <option>Makedonija</option>
                        <option>Engleska</option>
                        <option>Nemacka</option>
                    </select>
                </div>
                <div class="input-container width-14 left-6">
                    <select class="form-control">
                        <option>TICKET TYPE</option>
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
            </div>

            <div class="col-md-10 mar-left-13 no-padding">
                <div class="add-transfer R-T"><i class="fa fa-plus" aria-hidden="true"></i> ADD TRAIN TRIP</div>
            </div>

        </div>

    </div>
    <!-- /collapse -->

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
    var input = $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });

    var input = $('#single-input-2').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });

    var input = $('#single-input-3').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    var input = $('#single-input-4').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    var input = $('#single-input-5').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    var input = $('#single-input-6').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    var input = $('#single-input-7').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    var input = $('#single-input-8').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    var input = $('#single-input-9').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    var input = $('#single-input-10').clockpicker({
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
    $("#train-adv").click(function () {
        $("#train-adv-panel").slideToggle("slow", function () {
            // Animation complete.
        });
    });

    $('#train-adv').click(function(){
        var $this = $(this);
        $this.toggleClass('.train-adv');
        if($this.hasClass('.train-adv')){
            $this.text('DEFAULT');
        } else {
            $this.text('ADVANCED');
        }
    });


    var input = $('.clockpicker-with-callbacks').clockpicker({
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
    });

    // Manually toggle to the minutes view
    $('#check-minutes').click(function (e) {
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show')
            .clockpicker('toggleView', 'minutes');
    });

    /* datepicker */
    $(document).ready(
            /* This is the function that will get executed after the DOM is fully loaded */
        function () {
            $("#datepicker-train").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-train-2").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
        }
    );

</script>
<script type="text/javascript" src="assets/js/highlight.min.js"></script>

