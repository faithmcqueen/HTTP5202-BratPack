<?php
include "includes/header.php";
?>
<div><h1>Welcome "Parent Name"</h1></div>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div>
                <h2>Children</h2>
                <ul class="list-group">
                    <li class="list-group-item">Child 1</li>
                    <li class="list-group-item">Child 2</li>
                </ul>
            </div>

            <div>
                <h2>Reminders</h2>
                <ul class="list-group">
                    <li class="list-group-item">Reminder 1</li>
                    <li class="list-group-item">Reminder 2</li>
                </ul>
            </div>
            <div>
                <h2>Artwork</h2>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/artwork/art-art-materials-artistic-arts-and-crafts-542556.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/artwork/closeup-photo-of-assorted-color-alphabets-1337387.jpg" alt="Second slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div>
                <h2>Weekly Schedule</h2>
                <ul class="list-group">
                    <ul class="list-group">
                        <li class="list-group-item">Monday - Activity</li>
                        <li class="list-group-item">Tuesday - Activity</li>
                        <li class="list-group-item">Wednesday - Activity</li>
                        <li class="list-group-item">Thursday - Activity</li>
                        <li class="list-group-item">Friday - Activity</li>
                    </ul>
                </ul>
            </div>
            <div>
                <h2>Weekly Menu</h2>
                <ul class="list-group">
                    <li class="list-group-item">Monday - </li>
                    <li class="list-group-item">Tuesday - </li>
                    <li class="list-group-item">Wednesday - </li>
                    <li class="list-group-item">Thursday - </li>
                    <li class="list-group-item">Friday - </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
include "includes/footer.php";
?>



