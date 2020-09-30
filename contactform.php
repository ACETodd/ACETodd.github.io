<?php


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "Toddhoover@tamu.edu";
    $headers = "From: ".$mailFrom;
    $txt = "You received a new email from your website";


    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}

