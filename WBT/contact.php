<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!empty($_POST['user_name']) && !empty($_POST['user_phone'])){
  if (isset($_POST['user_name'])) {
    if (!empty($_POST['user_name'])){
  $name = strip_tags($_POST['user_name']);
  $nameFieldset = "Имя пославшего: ";
  }
}
 
if (isset($_POST['user_mail'])) {
  if (!empty($_POST['user_mail'])){
  $phone = strip_tags($_POST['user_mail']);
  $phoneFieldset = "Email: ";
  }
}
if (isset($_POST['user_phone'])) {
  if (!empty($_POST['user_phone'])){
  $phone = strip_tags($_POST['user_phone']);
  $phoneFieldset = "Телефон: ";
  }
}
$token = "1278144247:AAHfIVMDo0kjHECWc56ykcJKYYIOWUOvB3k";
$chat_id = "-1001155000770";
$arr = array(
  $nameFieldset => $name,
  $emailFieldset => $email,
  $phoneFieldset => $phone
);
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
if ($sendToTelegram) {
  
  echo '<p class="success">Спасибо за отправку вашего сообщения!</p>';
    return true;
} else {
  echo '<p class="fail"><b>Ошибка. Сообщение не отправлено!</b></p>';
}
} else {
  echo '<p class="fail">Ошибка. Вы заполнили не все обязательные поля!</p>';
}
} else {
header ("Location: /");
}
 
?>
