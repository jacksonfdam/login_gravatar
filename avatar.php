<?php
if($_POST['email'])
{
	$email=$_POST['email'];
	$lowercase = strtolower($email);
	$image = md5($lowercase);
	echo $image;
}
?>