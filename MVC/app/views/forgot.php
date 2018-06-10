<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php include VIEWS.'partials/base_url.php' ?>
    <link rel="stylesheet" type="text/css" href="styles/login_page.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
</head>

<body>

<div class="login__container">
    <div id="overlay">
        <div class="login__picture">
        </div>
    </div>
    <form  method="POST" action="forgot/getPassword" class="form__container">

        <div class="form__line__container">
            <div class="label__container">
                <label class="field__label">
                    Email
                </label>
            </div>
            <div class="field__container">
                <input type="text" name="thatEmail" class="username__input" placeholder="Enter Email" id="thatEmail">
            </div>
        </div>

        <div class="form__line__container">
            <button class="login__button" id="login">Send Mail</button>
        </div>

    </form>
</div>
<script src="scripts/login.js"></script>
</body>
</html>