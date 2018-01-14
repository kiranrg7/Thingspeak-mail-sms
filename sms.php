<?php

    include('way2sms-api.php');
	
	
    $phno=$_POST["phno"];
    $data1=$_POST["data1"];
	
	
    $string="Thingspeak first data is $data1 from servelots";
	 
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
