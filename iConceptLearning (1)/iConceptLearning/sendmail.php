<?php

    if(isset($_POST['submit']))

    { 

      date_default_timezone_set('Etc/UTC');

      require 'PHPMailer/PHPMailerAutoload.php';


      $name=$_POST['name'];

      $email=$_POST['email'];

      $mobno=$_POST['number'];

      // $subject=$_POST['subject'];

      $message=$_POST['message'];

      //Create a new PHPMailer instance

      $mail = new PHPMailer;

      //Tell PHPMailer to use SMTP

      $mail->isSMTP();



    $mail->SMTPDebug = 0;

      //Ask for HTML-friendly debug output

      $mail->Debugoutput = 'html';

      //Set the hostname of the mail server

     $mail->Host = "www.iconceptlearning.com";

      //Set the SMTP port number - likely to be 25, 465 or 587

      $mail->SMTPAutoTLS = false;

      $mail->Port = 25;

      //Whether to use SMTP authentication

      $mail->SMTPAuth = true;

      //Username to use for SMTP authentication

      $mail->isHTML(true);

      $mail->Username = "info@iconceptlearning.com";

      //Password to use for SMTP authentication

      $mail->Password = "Pranil@123";

      //Set who the message is to be sent from

      $mail->setFrom("info@iconceptlearning.com","GET IN TOUCH WITH US");

      //Set who the message is to be sent to

      $mail->addAddress('info@iconceptlearning.com', 'GET IN TOUCH WITH US');

      //Set the subject line

      $mail->Subject = 'Website Query';

      //Replace the plain text body with one created manually

      $mail->Body = "<h2>GET IN TOUCH WITH US</h2>

     

      <h4>Name - ".$name."\n</h4>

      <h4>Email - ".$email."\n</h4>

      <h4>Mobile - ".$mobno."\n</h4>

      

      <h4>Message - ".$message."</h4>";

      //send the message, check for errors

       if(!$mail->send()) {

        echo "Wrong";

      } else {
        header('Refresh: 1; url=contact.php');
       
        $alertmessage = "Thank You";
        echo "<script type='text/javascript'>alert('$alertmessage');</script>";
      
    }

  }
  ?>

 