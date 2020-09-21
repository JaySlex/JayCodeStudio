<?php

if(isset($_POST['form-control submit'])){
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];


	$mailTo = "gameout.studio@gmail.com";
	$headers = "From: GameOut Studio with ".$mailFrom;
	$txt = "Name: ".$name. "\n\n".$message;


	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.html?mailsend");
}