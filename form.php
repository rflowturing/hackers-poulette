<?php

include_once('functions.php');

?>

<?php
// echo "<pre>";
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$gender = $_POST["gender"];
$email = $_POST['email'];
$country = $_POST["country"];
$subject = $_POST["subject"];
$message = $_POST["message"];


if (isset($_POST['submit'])) {
    if ($first_name == "") {
        $error_firstname = "You must complete this field";
    } else if (!preg_match("/^[a-zA-Z]*$/", $first_name)) {
        $error_firstname = "Only letters are allowed";
    }

    if ($last_name == "") {
        $error_lastname = "You must complete this field";
    } else if (!preg_match("/^[a-zA-Z]*$/", $last_name)) {
        $error_lastname = "Only letters are allowed";
    }

    if ($gender == "") {
        $error_gender = "You must select one of the two options";
    }

    if ($country == "") {
        $error_country = "You must select a country";
    }

    if ($email == "") {
        $error_email = "You must write an email";
    }

    if ($message == "") {
        $error_message = "You must write a message";
    }

    if (
        $error_firstname == ""
        && $error_lastname == ""
        && $error_gender == ""
        && $error_country == ""
        && $error_email == ""
        && $error_message == ""
    ) {
        sendmail($subject, $message);
        sendmailuser($email);
    }
}
?>