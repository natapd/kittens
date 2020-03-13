<?php
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta carset="utf-8">
    <meta name="description" content="Питомник шотландских кошек в Санкт-Петербурге">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    
    <title>Питомник McCrae World</title>
     <link rel="canonical" href="https://"/>
     <link rel="icon" href="favicon.ico" type="image/x-icon">
     <link rel="preload" href="fonts/BreeCYR-Light.woff2" as="font">
     <link rel="preload" href="fonts/BreeCYR-Book.woff2" as="font">
    <link href="css/style-auto.css?ver=18" rel="stylesheet">
    
  </head>
  <body>
  	<?php
$fio = $_POST['fio'];

$tel = $_POST['tel'];
$discr = $_POST['discr'];
$fio = htmlspecialchars($fio);

$tel = htmlspecialchars($tel);
$discr = htmlspecialchars($discr);
$fio = urldecode($fio);

$tel = urldecode($tel);
$discr = urldecode($discr);
$fio = trim($fio);

$tel = trim($tel);
$discr = trim($discr);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("platonova_nadejd@mail.ru", "Заявка с сайта", "ФИО:".$fio. ". Телефон: ".$tel. ". Вопрос: ".$discr ,"From: info@kittenshouse.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
<br>
<a href="../">Вернуться на главную страницу</a>
</body>
</html>