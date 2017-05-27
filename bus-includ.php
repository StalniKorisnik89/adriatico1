<link rel="stylesheet" href="assets/css/bus.css" xmlns="http://www.w3.org/1999/html">
<link rel="stylesheet" href="assets/css/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/github.min.css">


<!-- collapse -->
<div class="clearfix"></div>
<div id="panel-bus" style="margin-left: 15px;margin-right: 15px">
    <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding width-100 width-250">
        <div class="book-hotel">BOOK BUS TICKET</div>
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
        <div class="input-container width-15 left-6">
            <input class="form-control calendar" id="datepicker-bus" type="text" value="DEPARTURE"/>
        </div>

        <div class="input-container width-15 left-6">
            <input class="form-control cancel-x" id="datepicker-bus-2" type="text" value="RETURN" disabled/>
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


    <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding left-6 float-right width-30 top-sm-btn">
        <button class="btn button btn-search" type="button"><i class="fa fa-search"></i>SEARCH</button>
        <button type="button" class="btn button btn-advanced" id="bus-2-adv">ADVANCED</button>
    </div>


    <div class="form col-xs-12 no-padding top-10 top-sm" id="bus-2-adv-panel">
        <div class="col-md-8 my-col no-padding center-sm mar-left-13 left-200">
            <div class="input-container width-13">
                <input type="checkbox" name="vehicle" value="Bike">MULTI TRIP
            </div>
            <div class="input-container width-18 left-6">
                <input type="checkbox" name="vehicle" value="Bike">NEARBY BUS STATION
            </div>
            <div class="input-container width-23 left-6 text-center">
                <input type="checkbox" name="vehicle" value="Bike">DIRECT BUS ONLY
            </div>
            <div class="input-container width-17 left-6">
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

        <div class="col-md-10 mar-left-13 no-padding left-200">
            <div class="add-transfer R-T"><i class="fa fa-plus" aria-hidden="true"></i> ADD BUS TRIP</div>
        </div>

    </div>

</div>
<!-- /collapse -->


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
    //    $("#bus-adv").click(function () {
    //        $("#panel-bus").slideToggle("slow", function () {
    //            // Animation complete.
    //        });
    //    });

    $("#bus-2-adv").click(function () {
        console.log('asd')
        $("#bus-2-adv-panel").slideToggle("slow", function () {
            // Animation complete. bus-2-adv-panel
        });
    });

    $('#bus-2-adv').click(function(){
        var $this = $(this);
        $this.toggleClass('.flight-adv');
        if($this.hasClass('.flight-adv')){
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

    $('#datepicker-bus').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-bus').val("CHECK IN");
            }
            else
            {
                $('#datepicker-bus').val(dateText);
            }
        }
    });

    $('#datepicker-bus-2').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-bus-2').val("CHECK OUT");
            }
            else
            {
                $('#datepicker-bus-2').val(dateText);
            }
        }
    });

    /* datepicker */
    $(document).ready(
            /* This is the function that will get executed after the DOM is fully loaded */
        function () {
            $("#datepicker-bus").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-bus-2").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
        }
    );

</script>
<script type="text/javascript" src="assets/js/highlight.min.js"></script>
