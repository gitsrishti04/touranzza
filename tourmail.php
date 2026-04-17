<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senderName = $_POST["name"];
    $senderEmail = $_POST["email"];
    $phone = $_POST["phone"];
    $datepicker = $_POST["datepicker"];
    $adults = $_POST["adults"];
    $child = $_POST["child"];
    $des = $_POST["des"];
    $ip = getenv("REMOTE_ADDR");
    $hiddenField = $_POST["hiddenField"];

    $body = "Name: $senderName<br><br>";
    $body .= "Email: $senderEmail<br><br>";
    $body .= "Phone: $phone<br><br>";
    $body .= "Number of Adults: $adults<br><br>";
    $body .= "Number of Children: $child<br><br>";
    $body .= "Travel Date: $datepicker<br><br>";
    $body .= "Message: $des<br><br>";
    $body .= "User IP: $ip<br><br>";

    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'india@touranzza.com';
        $mail->Password = 'kjcxjgndycqjrkei';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        //Recipients
        $mail->setFrom($senderEmail, $senderName);
        $mail->addReplyTo($senderEmail, $senderName);
        $mail->addAddress('india@touranzza.com');

        //Content
        $mail->isHTML(true);
        $mail->Subject = "Website Enquiry for ($hiddenField)";
        $mail->Body = $body;

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ', $mail->ErrorInfo;
        } else {
            echo '<script>
                    alert("Thank you for your enquiry! We will get in touch with you soon.");
                    window.location.href = "https://tajnirvanatours.com/thanks.php";
                  </script>';
        }

        // Start of auto-reply code
        $autoReply = new PHPMailer(true); // Create a new PHPMailer instance for the auto-reply
        $autoReply->isSMTP();
        $autoReply->Host = 'smtp.gmail.com';
        $autoReply->SMTPAuth = true;
        $autoReply->Username = 'india@touranzza.com';
        $autoReply->Password = 'kjcxjgndycqjrkei';
        $autoReply->SMTPSecure = 'tls';
        $autoReply->Port = 587;

        $autoReply->setFrom('india@touranzza.com', 'Touranzza');
        $autoReply->addAddress($senderEmail);
        $autoReply->isHTML(true);
        $autoReply->Subject = "Thank you for your enquiry";
        $autoReply->Body = "<b>Dear $senderName</b>,<br><br>We have received your enquiry for <b>$hiddenField</b>. <br><br>We will get in touch with you soon.<br><br>For more information, please visit our website: <a href='https://tajnirvanatours.com'>https://tajnirvanatours.com</a><br><br>Best regards,<br>Touranzza Team";

        if (!$autoReply->send()) {
            echo 'Auto-reply could not be sent.';
            echo 'Mailer Error: ', $autoReply->ErrorInfo;
        }
        // End of auto-reply code


    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
} else {
    echo "Sorry, there was an issue sending your enquiry. Please try again later.";
}
?>