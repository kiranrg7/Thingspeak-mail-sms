<?php

    include('way2sms-api.php');
	session_start();
	
    $phno=$_POST["phno"];
    $data1=$_POST["data1"];
	$user=$_SESSION["name"];
	
    $string="The message is from $user  recorded temperature is  $data1 degrees celsius ";
	 
	if(sendWay2SMS ('9738258006','S6525S' , $phno , $string))
	{
		echo ("<script LANGUAGE='JavaScript'>
        window.alert('Message sent successully');
        window.location.href='data_display.php';
        </script>");
	
	}
	else
	{
		echo ("<script LANGUAGE='JavaScript'>
        window.alert('Message could not send check the number once again');
        window.location.href='data_display.php';
        </script>");
	}
    
    
?>
