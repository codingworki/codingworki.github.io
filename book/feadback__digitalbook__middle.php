<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
 
/* Сюда впишите свою эл. почту */
$myaddres  = "danchik.fedorov@rambler.ru"; // кому отправляем
 
/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Вопрос\n
Телефон: $phone\n
Email: $email\n
Имя: $name\n
 
/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Order'; //сабж
$email='order'; // от кого
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
 
ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=https://codingworki.github.io/book/');
?>
<!DOCTYPE HTML">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=https://codingworki.github.io/book/">
<link href="../css/animate.css" rel="stylesheet">
<title>Спасибо! Мы свяжемся с Вами!</title>
<meta name="generator">
<style>
     div{
        font-size: 2em;
        background-color: aquamarine;
        width = 50%;
        height = 40%;
        padding: 100;
        text-align: center;
        border: 4px dashed yellow;
        margin: 3em;
        } 
</style>
<script type="text/javascript">
setTimeout('location.replace("https://codingworki.github.io/book/")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
<body>
<div class="animated zoomIn">   
    <h1>Спасибо!<br>Мы свяжемся с Вами в ближайшее время!</h1>
</div>
</body>
</html>
