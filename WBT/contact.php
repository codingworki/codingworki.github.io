<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!empty($_POST['user_name']) && !empty($_POST['user_mail'])){
  if (isset($_POST['user_name'])) {
    if (!empty($_POST['user_name'])){
  $name = strip_tags($_POST['user_name']);
  $nameFieldset = "Имя пославшего: ";
  }
}
 

if (isset($_POST['user_mail']) ) {
  if (!empty($_POST['user_mail'])){
  $email = strip_tags($_POST['mail']);
  $emailFieldset = "Email: ";
  }
}
    
    if (isset($_POST['user_phone']) ) {
  if (!empty($_POST['user_phone'])){
  $phone = strip_tags($_POST['phone']);
  $phoneFieldset = "Phone: ";
  }
}


$nameFieldset = $_POST['user_name'];
$phoneFieldset = $_POST['user_phone'];
$emailFieldset = $_POST['user_mail'];

$token = "997818438:AAFD7nf4U7Nc3BFkunTAiOtvGnyHSvi5znw";
$shat_id = "-1001469624549";
$sitename = "WBT";

$arr = array (

    'Заказ с сайта: ' => $sitename,
    'Имя: ' => $nameFieldset,
    'Телефон: ' => $phoneFieldset,
    'Почта: ' => $emailFieldset
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key. "</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) {
  
  echo '<p>Спасибо за отправку вашего сообщения!</p>';
    return true;
} else {
  echo '<p><b>Ошибка. Сообщение не отправлено!</b></p>';
}
} else {
  echo '<p>Ошибка. Вы заполнили не все обязательные поля!</p>';
}
} else {
header ("Location: ");
}

?>
