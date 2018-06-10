<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php include VIEWS . 'partials/base_url.php' ?>
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
    <form method="POST" action="login/makeLogin" class="form__container">

        <div class="form__line__container">
            <div class="label__container">
                <label class="field__label">
                    Email
                </label>
            </div>
            <div class="field__container">
                <input type="text" name="username" class="username__input" placeholder="Enter Email" id="username">
            </div>
        </div>
        <div class="form__line__container">
            <div class="label__container">
                <label class="field__label">
                    Password
                </label>
            </div>
            <div class="field__container">
                <input type="password" name="password" class="password__input" placeholder="Enter password"
                       id="password">
            </div>
        </div>
        <div class="form__line__container">
            <button class="login__button" id="login">Login</button>

        </div>
    </form>
    <form method="POST" action="login/forgotPassword" class="form__container">
        <div class="checkboxes__container">
            <div class="forgot__password__container">
                <button id="forgot_password" class="forgot__password__link">Forgot password?</button>
            </div>
        </div>
    </form>


</div>
<script src="scripts/login.js"></script>
</body>
</html>