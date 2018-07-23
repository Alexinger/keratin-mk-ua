<?php

$name = $_POST['name'];
$telephone = $_POST['telephone'];

$file = 'number-email.txt';
$current = file_get_contents($file);

file_put_contents($file, $current + 1);

function filterQueryVar($name){
    return trim(urldecode(htmlspecialchars($name)));
}

$to = "alex777anders@gmail.com, alexinger+je56vnzlsi7tcc9wl9ph@boards.trello.com";
$subject = "Order for keratin service - ". $current;
$message = '
<div style="border-radius: 10px; border: 5px dotted white; padding: 5px 15px; background: rgba(255, 210, 105, 0.53); font-size: 14px;margin: 25px 0;">
<h1 style="color: brown; text-align: center;">Заявка на кератин keratin.mk.ua</h1>
<hr style="margin: 10px -35px;">
<div style="display: flex;"><h3 style="margin-right: 10px;">Имя: </h3><p style="margin-top: 20px;">'. filterQueryVar($name) .'</p></div>
<div style="display: flex;"><h3 style="margin-right: 10px;">Телефон: </h3><p style="margin-top: 20px;">'. filterQueryVar($telephone) .'</p></div>
</div>';

$headers  = "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: ЗАЯВКА №". $current ." <keratin.fox@gmail.com>\r\n";

mail($to, $subject, $message, $headers);

header("Location:/");