<?php
$to = '$bjackso3@hotmail.com';
$from_name = $_POST['name'];
$from_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

mail($to,$subject,$message);
?>