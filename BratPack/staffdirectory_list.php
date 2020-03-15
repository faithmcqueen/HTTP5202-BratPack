<?php
include "includes/header.php";
?>

<div class="container">
    <h1>Staff Directory</h1>

    <div class="navbar">
        <a href="staffdirectory_add.php" class="btn btn-secondary">Add New Staff</a>
    </div>

    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" name="staffdirectory__search" id="staffdirectory__search" placeholder="Search"  aria-label="Search">
        <button class="btn" type="submit">Search</button>
    </form>

    <table class="table" style="width:100%">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Staff Name</th>
                <th scope="col">Title</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="">Jane Doe</a></td>
                <td>Daycare Staff</td>
                <td><a href="jane.doe@mail.com">jane.doe@mail.com</a></td>
                <td>123-123-4567</td>
            </tr>
            <tr>
                <td><a href="">Jane Doe</a></td>
                <td>Daycare Staff</td>
                <td><a href="jane.doe@mail.com">jane.doe@mail.com</a></td>
                <td>123-123-4567</td>
            </tr>
            <tr>
                <td><a href="">Jane Doe</a></td>
                <td>Daycare Staff</td>
                <td><a href="jane.doe@mail.com">jane.doe@mail.com</a></td>
                <td>123-123-4567</td>
            </tr>
        </tbody>
    </table>

</div>


<?php
include "includes/footer.php";
?>
