<?php 

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];

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

?>
