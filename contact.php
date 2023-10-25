<?php

$name = $_POST['name']; // Nama
$email = $_POST['email']; // Email
$subjek = $_POST['subjek']; // Subjek
$message = $_POST['message']; // Pesan
$header = "From: ".$name." (".$email.")";

$mailto = "ziamulumamsssss@gmail.com";

mail($mailto, $subjek, $message, $header) or die("Error!");

echo "

    <h1>Terimakasih telah menghubungi</h1>

";

?>
