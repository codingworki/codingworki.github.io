<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!empty($_POST['user_name']) && !empty($_POST['user_mail'])){
  if (isset($_POST['user_name'])) {
    if (!empty($_POST['user_name'])){
  $name = strip_tags($_POST['user_name']);
  $nameFieldset = "Имя пославшего: ";
  }
}
 

if (isset($_POST['user_mail'])) {
  if (!empty($_POST['user_mail'])){
  $email = strip_tags($_POST['mail']);
  $emailFieldset = "Email: ";
  }
}


$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_mail'];

$token = "997818438:AAFD7nf4U7Nc3BFkunTAiOtvGnyHSvi5znw";
$shat_id = "-424655960";
$sitename = "WBT";

$arr = array (

    'Заказ с сайта: ' => $sitename,
    'Имя: ' => $name,
    'Телефон: ' => $phone,
    'Почта: ' => $email
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key. "</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) {
    echo("All Good");
} else {
    echo("Error");
}

?>
