<?php
$name = $_POST['name'];
$email = $_POST['email'];
$package = $_POST['package'];
$tel = $_POST['tel'];
$message = "Nume: ".$name.", ".
		   "Pachet ales: ".$package.", ".
		   "Telefon: ".$tel.", ".
		   "Adresa Email: ".$email;
$content="De la: $name \n Email: $email \n Mesaj: $message";
$recipient = "claudiu.d@centruldesoft.ro";
$mailheader = "De la: $email \r\n";
mail($recipient, $name, $content, $mailheader) or die("Error!");
header("Location:index.html");
?>
