<?php

include 'PHPMailer.php';
include 'SMTP.php';
session_start();
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

    $data1=$_POST["mdata1"];
	$smailid=$_POST["smailid"];
	$rmailid=$_POST["rmailid"];
	$pwd=$_POST["mpwd"];
	$user=$_SESSION["name"];
	
	$bod="The message is from $user  recorded temperature is  $data1 degrees celsius";


try {
    //Server settings
                                     // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'tls://smtp.gmail.com:587';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $smailid;                    // SMTP username
    $mail->Password = $pwd;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($smailid, $_SESSION["name"]);
    $mail->addAddress($rmailid);     // Add a recipient
    
	
    
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Regarding thingspeak data from servelots ';
    $mail->Body    = $bod;
    
    $mail->send();
    echo ("<script LANGUAGE='JavaScript'>
        window.alert('Mail sent successully');
        window.location.href='data_display.php';
        </script>");
} catch (Exception $e) {
    echo ("<script LANGUAGE='JavaScript'>
        window.alert('Mail could not be sent check your password or allow less secure app on in your gmail account');
        window.location.href='data_display.php';
        </script>");
}
