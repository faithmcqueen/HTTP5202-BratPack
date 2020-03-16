<?php
include "includes/header.php";
?>

<div class="container">
    <h1>Update Staff Member</h1>

    <div class="navbar">
        <a href="staffdirectory_list.php" class="btn btn-secondary">Back to List</a>
    </div>

    <form enctype="multipart/form-data">
        <div class="form-group row">
            <label for="staff__firstname" class="col-sm-2 col-form-label">First Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="staff__firstname">
            </div>
        </div>
        <div class="form-group row">
            <label for="staff__lastname" class="col-sm-2 col-form-label">Last Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="staff__lastname">
            </div>
        </div>
        <div class="form-group row">
            <label for="staff__email" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="staff__email">
            </div>
        </div>
        <div class="form-group row">
            <label for="staff__phone" class="col-sm-2 col-form-label">Phone:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="staff__phone">
            </div>
        </div>
        <div class="form-group row">
            <label for="staff_title" class="col-sm-2 col-form-label">Title:</label>
            <div class="col-sm-6">
                <select id="staff_title" class="form-control col-sm-6">
                    <option selected>Please Select One</option>
                    <option>Daycare Personnel</option>
                    <option>Daycare Caretaker</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="staff_photo" class="col-sm-2 col-form-label">Photo:</label>
            <div class="input-group mb-3 col-sm-6" >
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="staff_photo">
                    <label class="custom-file-label" for="staff_photo">Choose file</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text" id="">Upload</span>
                </div>
            </div>
        </div>
        <button class="btn" type="submit">Update Staff Member</button>
    </form>
</div>


<?php
include "includes/footer.php";
?>
