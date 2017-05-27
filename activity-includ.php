<!-- Main CSS -->
<link rel="stylesheet" href="assets/css/activity.css">
<link rel="stylesheet" href="assets/css/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/github.min.css">

<link href="assets/css/hover-min.css" rel="stylesheet" media="all">

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>


<div id="panel-train" style="margin-left: 15px;margin-right: 15px">
    <div class="form col-xs-12 no-padding">
        <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding width-100 width-250">
            <div class="book-hotel">FIND ACTIVITY</div>
        </div>
        <div class="col-md-8 my-col no-padding center-sm">
            <div class="input-container width-20">
                <select class="form-control">
                    <option>DESTINATION</option>
                    <option>Srbija</option>
                    <option>Crna Gora</option>
                    <option>Makedonija</option>
                    <option>Engleska</option>
                    <option>Nemacka</option>
                </select>
            </div>
            <div class="input-container width-20 left-6">
                <select class="form-control">
                    <option>SELECT ACTIVITY</option>
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
                <input class="form-control calendar" id="datepicker-activity-2" type="text" value="END"/>
            </div>
            <div class="input-container width-9 left-6">
                <input class="form-control clock" id="single-input-activity-2" value="" placeholder="TIME">
            </div>
            <div class="input-container width-14 left-6">
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


        <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding left-6 float-right width-30">
            <button class="btn button btn-search" type="button"><i class="fa fa-search"></i>SEARCH</button>
            <button class="btn button btn-advanced" id="activity-adv">ADVANCED</button>
        </div>
    </div>
    <!-- collapse -->
    <div class="clearfix"></div>
    <div id="activity-adv-panel">
        <div class="form col-xs-12 no-padding top-10 top-sm">
            <div class="col-md-8 my-col no-padding center-sm mar-left-13 left-200">

                <div class="input-container width-20 sm-width padd-left-50">
                    <select class="form-control">
                        <option>SELECT LOCATION</option>
                        <option>Srbija</option>
                        <option>Crna Gora</option>
                        <option>Makedonija</option>
                        <option>Engleska</option>
                        <option>Nemacka</option>
                    </select>
                </div>

                <div class="input-container width-14 w14-2 left-6 sm-width">
                    <select class="form-control">
                        <option>SELECT ACTIVITY</option>
                        <option>Srbija</option>
                        <option>Crna Gora</option>
                        <option>Makedonija</option>
                        <option>Engleska</option>
                        <option>Nemacka</option>
                    </select>
                </div>
                <div class="input-container width-14 w14-2 left-6 sm-width">
                    <select class="form-control">
                        <option>FLEXIBILITY</option>
                        <option>Srbija</option>
                        <option>Crna Gora</option>
                        <option>Makedonija</option>
                        <option>Engleska</option>
                        <option>Nemacka</option>
                    </select>
                </div>
                <div class="input-container width-14 w14-2 left-6 sm-width">
                    <select class="form-control">
                        <option>DIFFICULTY</option>
                        <option>Srbija</option>
                        <option>Crna Gora</option>
                        <option>Makedonija</option>
                        <option>Engleska</option>
                        <option>Nemacka</option>
                    </select>
                </div>
                <div class="input-container width-32">
                    <input type="checkbox" name="vehicle" value="Bike">ACTIVITY PART OF PACKAGE
                </div>
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
    var input = $('#single-input-activity').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });

    var input = $('#single-input-activity-2').clockpicker({
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
    $("#activity-adv").click(function () {
        $("#activity-adv-panel").slideToggle("slow", function () {
            // Animation complete.
        });
    });

    $('#activity-adv').click(function(){
        var $this = $(this);
        $this.toggleClass('.activity-adv');
        if($this.hasClass('.activity-adv')){
            $this.text('DEFAULT');
        } else {
            $this.text('ADVANCED');
        }
    });

    $('#datepicker-activity').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-activity').val("CHECK IN");
            }
            else
            {
                $('#datepicker-activity').val(dateText);
            }
        }
    });

    $('#datepicker-activity-2').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-activity-2').val("CHECK OUT");
            }
            else
            {
                $('#datepicker-activity-2').val(dateText);
            }
        }
    });


    /* datepicker */
    $(document).ready(
            /* This is the function that will get executed after the DOM is fully loaded */
        function () {
            $("#datepicker-activity").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-activity-2").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
        }
    );

</script>
<script type="text/javascript" src="assets/js/highlight.min.js"></script>
