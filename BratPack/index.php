<?php
include 'includes/header.php';
?>
<link rel="stylesheet" type="text/css" href="styles/main.css" />
<div class="slideshow">
    <div class="slideshow__slides">
        <img src="images/sliderimages/s_image1.jpg" class="slidesow__slides_img">
        <div class="slideshow__slides_caption">
            Experience child care as it should be.
            <a href="">Read more about us.</a>
        </div>
    </div>
    <div class="slideshow__slides">
        <img src="images/sliderimages/s_image2.jpg" class="slidesow__slides_img">
        <div class="slideshow__slides_caption">
            A nurturing and creative world.
            <a href="">Read more about us.</a>
        </div>
    </div>
    <div class="slideshow__slides">
        <img src="images/sliderimages/s_image3.jpg" class="slidesow__slides_img">
        <div class="slideshow__slides_caption">
            A great place to grow.
            <a href="">Find out more about our activities.</a>
        </div>
    </div>

    <a class="slideshow__arrow_prev" onclick="slideshow__changeSlides(-1)">&#10094;</a>
    <a class="slideshow__arrow_next" onclick="slideshow__changeSlides(1)">&#10095;</a>
</div>

<div class="loginscreen">
    <div class="loginscreen__caption">
        Log In :
    </div>
    <div class="loginscreen__user">
        <a href='admin.php' class="button">Admin</a>
        <a href='public-login.php' class="button">Parent</a>
    </div>
</div>

<script src="scripts/homepage.js"> </script>
<?php
include 'includes/footer.php';
?>