<?php
$name = $_POST['name'];
$email = $_POST['lastName'];
$phone = $_POST['message'];
$formcontent=" Od: $name $lastName.\n Poruka: $message";
$recipient = "marijarahman@gmail.com";
$subject = "neko ti je poslao poruku! Malina Template";
mail($recipient, $subject, $formcontent) or die("Error!");
header('Refresh: 5; URL=index.html');
echo "<h1>Hvala! Vasa poruka je poslata" . " -" . "<a href='index.html' style='text-decoration:none;color:#FF0000;'> Vratite se nazad</a> ili sacekajte automatsku redirekciju</h1>";
?>