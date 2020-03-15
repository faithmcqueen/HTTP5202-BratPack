<?php
include "includes/header.php";
?>

<div class="container">
    <h1>Add New Staff Member</h1>
    <form>
        <div class="form-group row">
            <label for="staff__firstname" class="col-sm-2 col-form-label">First Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" id="staff__firstname">
            </div>
        </div>
        <div class="form-group row">
            <label for="staff__lastname" class="col-sm-2 col-form-label">Last Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" id="staff__lastname">
            </div>
        </div>
        <div class="form-group row">
            <label for="staff__email" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" id="staff__email">
            </div>
        </div>
        <div class="form-group row">
            <label for="staff__phone" class="col-sm-2 col-form-label">Phone:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" id="staff__phone">
            </div>
        </div>
        <div class="form-group row">
            <label for="staff_title" class="col-sm-2 col-form-label">Title:</label>
            <select id="staff_title" class="col-sm-8">
                <option selected>Please Select One</option>
                <option>Daycare Personnel</option>
                <option>Daycare Caretaker</option>
            </select>
        </div>
        <div class="form-group row">
            <label for="staff_photo" class="col-sm-2 col-form-label">Photo:</label>
            <div class="input-group mb-3 col-sm-8" style="padding: 0px">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="staff_photo">
                    <label class="custom-file-label" for="staff_photo">Choose file</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text" id="">Upload</span>
                </div>
            </div>
        </div>
    </form>
</div>


<?php
include "includes/footer.php";
?>
