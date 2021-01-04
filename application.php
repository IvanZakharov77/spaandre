<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Создание формы обратной связи</title>
<meta http-equiv="Refresh" content="1; URL=http://test111.april.kh.ua/"> 
</head>
<body>

<?php 

$sendto   = "andrejpavlov715@gmail.com"; // почта, на которую будет приходить письмо
$usernamee = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$username = $_POST['email'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['phone']; // сохраняем в переменную данные полученные из поля c телефонным номером



// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта SPA-ANDREPAV</h2>\r\n";
$msg .= "<p><strong>Имя клиента:</strong> ".$usernamee."</p>\r\n";
$msg .= "<p><strong>Почта клиента:</strong> ".$username."</p>\r\n";

$msg .= "<p><strong>Телефон заказчика:</strong> ".$usertel."</p>\r\n";

$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers))

?>

</body>
</html>