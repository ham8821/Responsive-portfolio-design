<?php
if (isset($_POST['emailsendbtn'])) {
    $sendername = $_POST['sendername'];
    $senderemail = $_POST['senderemail'];

    $requestcontent = $_POST['requestcontent'];

    // echo $sendername;
    // echo $senderemail;
    // echo $requestcontent;
    if ($sendername && $senderemail && $requestcontent) {
         define("PORT", ""); // port number
        define("MAIL_USERNAME", "emma.hj.ham@gmail.com"); // smtp usernmae
        define("MAIL_PASSWORD", "gkaskatn8821!!"); // smtp password
        define("MAIL_HOST", "smtp.gmail.com"); // smtp host
        define("MAILER", "smtp");

        define("SENDER_NAME", $sendername);
        define("SERDER_EMAIL", $senderemail);

        if (!class_exists('PHPMailer')) {
            require('phpmailer/class.phpmailer.php');
            require('phpmailer/class.smtp.php');
        }


        $mail = new PHPMailer();

        $emailBody = 'This is an email you received from your portfolio: '.$requestcontent.'';

        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port     =  25;
        $mail->Username = "emma.hj.ham@gmail.com";
        $mail->Password = "gkaskatn8821!!";
        $mail->Host     = "smtp.gmail.com";
        $mail->Mailer   = "smtp";

        $mail->SetFrom($senderemail, $sendername);
        // $mail->ReturnPath($senderemail, $sendername);
        $mail->AddAddress('emma.hj.ham@gmail.com','Portfolio request');
        $mail->Subject = "Portfolio Request";
        $mail->MsgHTML($emailBody);
        $mail->IsHTML(true);

        if (!$mail->Send()) {
            $error_message = 'Problem in Sending Email';
            echo  $error_message;
            // header('Location: ../index.php');
        } else {
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Your request is Succesfully sent!');
    
    </script>");
            header('Location: ../index.php');
        }
    } else {
        echo 'something went wrong';
    }
} else {
    echo 'Please make sure your details are filled properly.';
}
