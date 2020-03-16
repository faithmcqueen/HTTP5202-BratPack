<?php
include "includes/header.php";
?>

<div class="container">
    <h1>Field Trips</h1>

    <div class="navbar">
        <a href="fieldtrip_add.php" class="btn btn-secondary">Add New Field Trip</a>
    </div>

    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" name="fieldtrip__search" id="fieldtrip__search" placeholder="Search"  aria-label="Search">
        <button class="btn" type="submit">Search</button>
    </form>

    <table class="table" style="width:100%">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Location</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="">Ontario Science Centre</a></td>
                <td>Tuesday, April 7, 2020</td>
                <td>10:00 AM - 2:00 PM</td>
            </tr>
            <tr>
                <td><a href="">Ripley's Aquarium</a></td>
                <td>Friday, April 17, 2020</td>
                <td>12:30 PM - 3:30 PM</td>
            </tr>
        </tbody>
    </table>
</div>

<?php
include "includes/footer.php";
?>
