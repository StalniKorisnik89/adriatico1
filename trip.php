<!-- Main CSS -->
<link rel="stylesheet" href="assets/css/trip.css" xmlns="http://www.w3.org/1999/html">
<link rel="stylesheet" href="assets/css/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/github.min.css">


<div id="panel-trip" style="margin-left: 15px;margin-right: 15px">
    <div class="form col-xs-12 no-padding">
        <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding width-100 width-250">
            <div class="book-hotel">BOOK PACKAGE TICKET</div>
        </div>
        <div class="col-md-8 my-col no-padding center-sm">
            <div class="input-container width-25">
                <select class="form-control">
                    <option>DESTINATION: COUNTRY, CITY...</option>
                    <option>Srbija</option>
                    <option>Crna Gora</option>
                    <option>Makedonija</option>
                    <option>Engleska</option>
                    <option>Nemacka</option>
                </select>
            </div>
            <div class="input-container width-25 left-6">
                <input class="form-control calendar" id="datepicker-trip" type="text" value="DEPARATURE DATE"/>
            </div>
            <div class="input-container width-25 left-6">
                <input class="form-control calendar" id="datepicker-trip-2" type="text" value="RETURN DATE"/>
            </div>

            <div class="input-container width-25 left-6">
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


        <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding left-6 float-right width-30 btn-jq">
            <button class="btn button btn-search" type="button"><i class="fa fa-search"></i>SEARCH</button>
            <button type="button" class="btn button btn-advanced" id="trip-adv">ADVANCED</button>
        </div>
    </div>
    <!-- collapse -->
    <div class="clearfix"></div>

    <div class="form col-xs-12 no-padding top-10" id="trip-adv-panel">

        <div class="col-md-8 my-col offset-13 no-padding center-sm left-200">
            <div class="input-container width-25">
                <select class="form-control">
                    <option>TRAVELING FROM: COUNTRY, CITY...</option>
                    <option>Srbija</option>
                    <option>Crna Gora</option>
                    <option>Makedonija</option>
                    <option>Engleska</option>
                    <option>Nemacka</option>
                </select>
            </div>
            <div class="input-container width-18 left-6">
                <select class="form-control">
                    <option>PACKAGES</option>
                    <option>Srbija</option>
                    <option>Crna Gora</option>
                    <option>Makedonija</option>
                    <option>Engleska</option>
                    <option>Nemacka</option>
                </select>
            </div>
            <div class="input-container width-18 left-6">
                <select class="form-control">
                    <option>CATEGORIES</option>
                    <option>Srbija</option>
                    <option>Crna Gora</option>
                    <option>Makedonija</option>
                    <option>Engleska</option>
                    <option>Nemacka</option>
                </select>
            </div>

            <div class="input-container width-18 left-6">
                <select class="form-control">
                    <option>LENGTH</option>
                    <option>Srbija</option>
                    <option>Crna Gora</option>
                    <option>Makedonija</option>
                    <option>Engleska</option>
                    <option>Nemacka</option>
                </select>
            </div>
            <div class="input-container width-18 left-6">
                <select class="form-control">
                    <option>FLEXIBILITY</option>
                    <option>Srbija</option>
                    <option>Crna Gora</option>
                    <option>Makedonija</option>
                    <option>Engleska</option>
                    <option>Nemacka</option>
                </select>
            </div>
            <div class="col-xs-12 no-padding top-10 input-container">
                <input type="checkbox" name="vehicle" value="Bike">INCLUDE NEARBY AIRPORTS OR DEPARTURE LOCATION
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
    $("#trip-adv").click(function () {
        $("#trip-adv-panel").slideToggle("slow", function () {
            // Animation complete.
        });
    });

    $('#trip-adv').click(function(){
        var $this = $(this);
        $this.toggleClass('.trip-adv');
        if($this.hasClass('.trip-adv')){
            $this.text('DEFAULT');
        } else {
            $this.text('ADVANCED');
        }
    });

    $('#datepicker-trip').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-trip').val("CHECK IN");
            }
            else
            {
                $('#datepicker-trip').val(dateText);
            }
        }
    });

    $('#datepicker-trip-2').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-trip-2').val("CHECK OUT");
            }
            else
            {
                $('#datepicker-trip-2').val(dateText);
            }
        }
    });

    /* datepicker */
    $(document).ready(
            /* This is the function that will get executed after the DOM is fully loaded */
        function () {
            $("#datepicker-trip").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-trip-2").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
        }
    );

</script>
<script type="text/javascript" src="assets/js/highlight.min.js"></script>
