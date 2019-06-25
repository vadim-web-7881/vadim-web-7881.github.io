<?php
$to = "k1ncaid@yandex.ru"; // емайл получателя данных из формы 
$tema = $_POST['title']; // тема полученного емайла 
$message = " Имя: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
$message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
$message .= "Сообщение: ".$_POST['comment']."<br>"; //полученное из формы name=message
$headers  = $tema . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>