<?php

$name = $_POST['name'];
$telephone = $_POST['telephone'];

$file = 'number-email.txt';
$current = file_get_contents($file);

file_put_contents($file, $current + 1);

function filterQueryVar($name){
    return trim(urldecode(htmlspecialchars($name)));
}

$to = "alex777anders@gmail.com";
$subject = "Заявка на кератин";
$message = '
<div style="border-radius: 10px; border: 5px dotted white; padding: 20px 30px; background: #ffd269; font-size: 14px;">
<h1 style="color: brown; text-align: center; font-family: cursive;">Заявка на кератиновое выпрямление с сайта  keratin.mk.ua</h1>
<hr style="margin-bottom: 10px; margin-top: 10px; margin-left: -35px; margin-right: -35px;">
<div style="display: flex;"><h3 style="margin-right: 10px;">Имя: </h3><p style="margin-top: 20px;">'. filterQueryVar($name) .'</p></div>
<div style="display: flex;"><h3 style="margin-right: 10px;">Телефон: </h3><p style="margin-top: 20px;">'. filterQueryVar($telephone) .'</p></div>
</div>';

$headers  = "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: ЗАЯВКА №". $current ." <keratin.fox@gmail.com>\r\n";

mail($to, $subject, $message, $headers);

header("Location:/");