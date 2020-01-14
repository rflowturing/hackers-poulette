<?php
include('form.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="script.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Hackers Poulette</title>
</head>

<body>

    <section class="section container" id="contact">
        <div class="main">

            <img src="assets/image/hackers-poulette-logo.png" alt="">

            <h1>Want to tell us something?</h1>
            <form method="post" action="index.php">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" name="first_name" type="text" class="validate" value="<?= $first_name ?>">
                        <label for="first_name">First Name</label>
                        <span class="error"><?= $error_firstname ?></span>
                    </div>
                    <div class="input-field col s6">
                        <input name="last_name" type="text" class="validate" id="last_name" value="<?= $last_name ?>">
                        <label for=" last_name">Last Name</label>
                        <span class="error"><?= $error_lastname ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="gender col s12">
                        <p>
                            <p>Chose your gender</p>
                            <label>
                                <input name="gender" type="radio" id="gender" value="men" />
                                <span>Male</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="gender" type="radio" id="gender" value="women" />
                                <span>Female</span>
                            </label>
                        </p>
                        <span class="error"><?= $error_gender ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">mail</i>
                        <input name="email" id="email" type="email" class="validate" value="<?= $email ?>">
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="wrong" data-success="right"></span>
                        <span class="error"><?= $error_email ?></span>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">location_on</i>
                        <input type="text" name="country" id="autocomplete-input" class="autocomplete" value="<?= $country ?>">
                        <label for="country">Country</label>
                        <span class="error"><?= $error_country ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">list</i>
                        <select name="subject">
                            <option value="" disabled selected>Other</option>
                            <option value="other">Other</option>
                            <option value="financial">Financial</option>
                            <option value="technical">Technical</option>
                        </select>
                        <label>Chose your subject</label>
                        <span class="error"><?= $error_subject ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea name="message" id="icon_prefix2" class="materialize-textarea"></textarea>
                        <label for="icon_prefix2">Tell us more about your enquiry</label>
                        <span class="error"><?= $error_message ?></span>
                    </div>
                </div>
                <div class="but">
                    <button class="center-align btn waves-effect waves-light" name="submit" type="submit">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
