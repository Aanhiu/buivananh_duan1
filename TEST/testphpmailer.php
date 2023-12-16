<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form>
    <input type="submit" name="send">

</form>

<?php


require "/buivananh_duan1/PHPMailer-master/src/PHPMailer.php";
require "/buivananh_duan1/PHPMailer-master/src/Exception.php";
require "/buivananh_duan1/PHPMailer-master/src/SMTP.php";


    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "buianh2592003@gmail.com";
    $mail->Password = "hacrqlxgredgyqze";
    $mail->SetFrom("buianh2592003@gmail.com");
    $mail->Subject = "Aanhiu";
    $mail->Body = "Hi";
    $mail->AddAddress("buianh20003@gmail.com");

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
?>


    
</body>
</html>