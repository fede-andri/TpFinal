<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';


        $mail = new PHPMailer(true);

            //Server settings
            $mail->SMTPDebug = 0;  // 0 lo desactiva                    // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host =  'smtp.gmail.com';          //'10.0.8.19';                    // Set the SMTP server to send through
            $mail->SMTPAuth =  true;              //false;                                   // Enable SMTP authentication
            $mail->Username = 'viktorguillin@gmail.com';                     // SMTP username
            $mail->Password = 'Febrero1980'; // SMTP password
            $mail->Mailer = "smtp";
//            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged ENCRYPTION_STARTTLS
            $mail->Port =  465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            //Recipients
            $mail->setFrom('viktorguillin@gmail.com','Victor');                            //$_POST['emailOrigen'], 'Comprex'); //origen
            $mail->addAddress('viktorguillin@yahoo.com');                      //$_POST['emailDestino']);     // destino      Add a recipient;               // Name is optional

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Asunto muy importante';
            $mail->Body = 'texto que sera enviado por correo';
            If($mail->Send()){
                echo "Mailer Error: ". $mail->ErrorInfo;
            }else{
                echo "el mensaje fue enviado";
            }




