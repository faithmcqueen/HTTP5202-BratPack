<?php
include "includes/header.php";
?>
    <div id="login__form" class="text-center">
        <form class="form-signin">
            <img class="mb-4" src="images/logo.png" alt="The Brat Pack Logo" width="250px" height="auto">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <span>New to The Brat Pack Daycare System? <a href="/">Sign up here.</a></span>
        </form>
    </div>
<?php
include "includes/footer.php";
?>


