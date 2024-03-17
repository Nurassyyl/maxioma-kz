<?php

ini_set('display_errors','On');
error_reporting('E_ALL');

$to = 'nabdildabek@gmail.com, info@maxioma.kz'; //Адреса, куда будут приходить письма. две почты указываем через запятую
$sitename = $_SERVER['SERVER_NAME'];

if (isset($_POST['email']) && !empty($_POST['email']))
{
    $name  = strip_tags($_POST['name']);
    $email  = strip_tags($_POST['email']);
    $name_company  = strip_tags($_POST['name_company']);
    $description  = strip_tags($_POST['description']);

// Формирование заголовка письма
    $subject  = "[Zajavka s sajta ".$sitename."]";
    $headers  = "From: mail@".$sitename." \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
    $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка:</h2>\r\n";
    if(isset($_POST['name']) && !empty($_POST['name'])){
      $msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
    }
    if(isset($_POST['email']) && !empty($_POST['email'])){
      $msg .= "<p><strong>E-mail:</strong> ".$email."</p>\r\n";
    }
    if(isset($_POST['name_company']) && !empty($_POST['name_company'])){
        $msg .= "<p><strong>E-mail:</strong> ".$email."</p>\r\n";
    }
    if(isset($_POST['description']) && !empty($_POST['description'])){
    $msg .= "<p><strong>E-mail:</strong> ".$email."</p>\r\n";
    }
    $msg .= "</body></html>";
// отправка сообщения
    mail($to, $subject, $msg, $headers);
}
else
{
    echo "Заявка не отправлена :(";
}
header('Location: ./thank-you.html')
?>
