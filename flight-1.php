<!-- Main CSS -->
<link rel="stylesheet" href="assets/css/flight.css">
<link rel="stylesheet" href="assets/css/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/github.min.css">


<div id="panel-flight" style="margin-left: 15px;margin-right: 15px">
    <div class="form col-xs-12 no-padding">
        <div class="input-container col-md-2 col-sm-12 col-xs-12 no-padding width-100 width-250">
            <div class="book-hotel">BOOK FLIGHT TICKET</div>
        </div>
        <div class="col-md-8 my-col no-padding center-sm">
            <div class="input-container width-25">
                <select class="form-control">
                    <option>FLYING FROM: COUNTRY, CITY...</option>
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
            <div class="input-container width-25 left-6 ">
                <select class="form-control">
                    <option>GOING TO: COUNTRY, CITY...</option>
                    <option>Srbija</option>
                    <option>Crna Gora</option>
                    <option>Makedonija</option>
                    <option>Engleska</option>
                    <option>Nemacka</option>
                </select>
            </div>
            <div class="input-container width-15 left-6 mar-left-0">
                <input class="form-control calendar" id="datepicker-flight" type="text" value="DEPARTURE"/>
            </div>

            <div class="input-container width-15 left-6">
                <input class="form-control calendar" id="datepicker-flight-2" type="text" value="RETURN"/>
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
            <button class="btn button btn-advanced" id="flight-adv">ADVANCED</button>
        </div>
    </div>
    <!-- collapse -->
    <div class="clearfix"></div>
    <div id="flight-adv-panel">
        <div class="form col-xs-12 no-padding top-10">
            <div class="col-md-8 my-col no-padding center-sm mar-left-13 left-200">
                <div class="input-container width-13 padd-left-50">
                    <input type="checkbox" name="vehicle" value="Bike">MULTI WAY
                </div>
                <div class="input-container width-18 left-6">
                    <input type="checkbox" name="vehicle" value="Bike">NEARBY AIRPORT
                </div>
                <div class="input-container width-23 left-6">
                    <input type="checkbox" name="vehicle" value="Bike">DIRECT LIGHTS ONLY
                </div>
                <div class="input-container width-17 left-6">
                    <select class="form-control">
                        <option>PACKAGES</option>
                        <option>Srbija</option>
                        <option>Crna Gora</option>
                        <option>Makedonija</option>
                        <option>Engleska</option>
                        <option>Nemacka</option>
                    </select>
                </div>

                <div class="input-container width-14 left-6">
                    <select class="form-control">
                        <option>CATEGORIES</option>
                        <option>Srbija</option>
                        <option>Crna Gora</option>
                        <option>Makedonija</option>
                        <option>Engleska</option>
                        <option>Nemacka</option>
                    </select>
                </div>
                <div class="input-container width-14 left-6">
                    <select class="form-control">
                        <option>LENGHT</option>
                        <option>Srbija</option>
                        <option>Crna Gora</option>
                        <option>Makedonija</option>
                        <option>Engleska</option>
                        <option>Nemacka</option>
                    </select>
                </div>
            </div>

            <div class="col-md-10 mar-left-13 sm-mar-left no-padding left-200">
                <div class="add-transfer R-T"><i class="fa fa-plus" aria-hidden="true"></i> ADD FLIGHT</div>
            </div>

        </div>

    </div>
    <!-- /collapse -->


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
    $('#datepicker-flight').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-flight').val("CHECK IN");
            }
            else
            {
                $('#datepicker-flight').val(dateText);
            }
        }
    });

    $('#datepicker-flight-2').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-flight-2').val("CHECK IN");
            }
            else
            {
                $('#datepicker-flight-2').val(dateText);
            }
        }
    });

    $('#datepicker-flight-3').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-flight-3').val("CHECK OUT");
            }
            else
            {
                $('#datepicker-flight-3').val(dateText);
            }
        }
    });

    $('#datepicker-flight-4').datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (dateText, inst) {

            var dateArr = dateText.split('-');
            var selectedDate = new Date(dateArr[2], dateArr[1] - 1, dateArr[0], 23, 59, 59);


            if(selectedDate.getTime() < (new Date()).getTime())
            {
                alert("To specify the date can not be selected");
                $('#datepicker-flight-4').val("CHECK OUT");
            }
            else
            {
                $('#datepicker-flight-4').val(dateText);
            }
        }
    });
</script>
<script>

    $("#flight-adv").click(function () {
        $("#flight-adv-panel").slideToggle("slow", function () {
            // Animation complete.
        });
    });

    $('#flight-adv').click(function(){
        var $this = $(this);
        $this.toggleClass('.flight-adv');
        if($this.hasClass('.flight-adv')){
            $this.text('DEFAULT');
        } else {
            $this.text('ADVANCED');
        }
    });

    /* datepicker */
    $(document).ready(
            /* This is the function that will get executed after the DOM is fully loaded */
        function () {
            $("#datepicker-flight").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
            $("#datepicker-flight-2").datepicker({
                changeMonth: true,//this option for allowing user to select month
                changeYear: true //this option for allowing user to select from year range
            });
        }
    );



</script>
<script type="text/javascript" src="assets/js/highlight.min.js"></script>
