<?php
include "includes/header.php";
?>

<div class="container">
    <h1>Field Trips</h1>

    <div class="navbar">
        <a href="fieldtrip_add.php" class="btn btn-secondary">Add New Fieldtrip</a>
    </div>

    <form>
        <div class="form-group row">
            <label for="fieldtrip__location" class="col-sm-2 col-form-label">Location:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="fieldtrip__location">
            </div>
        </div>
        <div class="form-group row">
            <label for="fieldtrip__description" class="col-sm-2 col-form-label" >Description:</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="fieldtrip__description" rows="4"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="fieldtrip__date" class="col-sm-2 col-form-label">Date:</label>
            <script>
                $( function() {
                    $( "#fieldtrip__date" ).datepicker();
                } );
            </script>
            <div class="col-sm-10">
                <div id="fieldtrip__date"></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="fieldtrip__start" class="col-sm-2 col-form-label">Start Time:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="fieldtrip__start">
            </div>
        </div>
        <div class="form-group row">
            <label for="fieldtrip__end" class="col-sm-2 col-form-label">End Time:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="fieldtrip__end">
            </div>
        </div>
        <div class="form-group row">
            <label for="fieldtrip__organizer" class="col-sm-2 col-form-label">Organizer:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="fieldtrip__organizer">
            </div>
        </div>
        <button class="btn" type="submit">Add New Field Trip</button>
    </form>


</div>

<?php
include "includes/footer.php";
?>





