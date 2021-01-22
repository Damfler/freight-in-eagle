<?php

if (isset($_POST['submit'])) {
    $to = "Pavel.Klygin@mail.ru";; // Здесь нужно написать e-mail, куда будут приходить письма
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "Форма отправки сообщений с сайта";
    $message = $first_name . " " . $phone . " оставил сообщение:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;

    mail($to, $subject, $message, $headers);

    header('location: index.html');
}
