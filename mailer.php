<?php

$MailTo			=	"don@dondauriaeditorial.com";
$PersonsName	=	$_POST['PersonsName'];
$MailFrom		=	$_POST['EmailAddress'];
$Subject		=	$_POST['Subject'];
$Message		= 	$_POST['Message'];

$FormContent	=	"From: $PersonsName \n Email: $MailFrom \n Subject: $Subject \n Message: $Message";

$headers		 =	"From: $MailFrom \r\n";

$RedirectURL	=	"http://dondauriaeditorial.com/index/message-sent.html";

mail($MailTo, $Subject, $FormContent, $headers);

header("Location: {$RedirectURL}");

?>