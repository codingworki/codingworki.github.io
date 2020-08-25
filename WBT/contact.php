<?php 

$recepient = "danchik_fedorov@mail.ru";
$sitename = "WBT";

$name = trim($_POST["user_name"]);
$phone = trim($_POST["user_phone"]);
$email = trim($_POST["user_email"]);
$message = "Имя: $name \n Телефон: $phone \n Почта: $email";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>
