<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Honeypot check (reject automated bots filling hidden field)
    if (!empty($_POST["website_hp"])) {
        // Return normal thank-you redirect so bot thinks it succeeded
        header('Location: thank-you');
        exit;
    }

    $senderName = trim($_POST["name"] ?? $_POST["form-box-name-input"] ?? '');
    $senderEmail = trim($_POST["email"] ?? $_POST["form-box-email-input"] ?? '');
    $phone = trim($_POST["phone"] ?? $_POST["phone-number"] ?? $_POST["form-box-phone-input"] ?? '');
    $datepicker = trim($_POST["datepicker"] ?? '');
    $adults = trim($_POST["adults"] ?? '');
    $child = trim($_POST["children"] ?? $_POST["child"] ?? '');
    $des = trim($_POST["message"] ?? $_POST["des"] ?? $_POST["form-one-message-input"] ?? '');
    $ip = getenv("REMOTE_ADDR") ?: ($_SERVER["REMOTE_ADDR"] ?? 'UNKNOWN');
    $hiddenField = trim($_POST["hiddenField"] ?? $_POST["form-box-subject-input"] ?? 'General Enquiry');

    // 2. Basic Validation: Required fields must be provided and email must be valid
    if (empty($senderName) || empty($senderEmail) || !filter_var($senderEmail, FILTER_VALIDATE_EMAIL)) {
        header('Location: thank-you?status=invalid');
        exit;
    }

    // 3. Rate Limiting by IP (Max 5 submissions per 10 minutes)
    $rateLimitDir = sys_get_temp_dir() . '/touranzza_ratelimit';
    if (!is_dir($rateLimitDir)) {
        @mkdir($rateLimitDir, 0755, true);
    }
    $ipHash = md5($ip);
    $rateFile = $rateLimitDir . '/' . $ipHash . '.json';
    $now = time();
    $window = 600; // 10 minutes
    $maxAttempts = 5;

    $attempts = [];
    if (file_exists($rateFile)) {
        $data = @json_decode(file_get_contents($rateFile), true);
        if (is_array($data)) {
            $attempts = array_filter($data, function($timestamp) use ($now, $window) {
                return ($now - $timestamp) < $window;
            });
        }
    }

    if (count($attempts) >= $maxAttempts) {
        // IP rate limited
        header('Location: thank-you?status=rate_limited');
        exit;
    }

    $attempts[] = $now;
    @file_put_contents($rateFile, json_encode($attempts));

    // 4. Sanitize inputs for display
    $safeName = htmlspecialchars($senderName, ENT_QUOTES, 'UTF-8');
    $safeEmail = htmlspecialchars($senderEmail, ENT_QUOTES, 'UTF-8');
    $safePhone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
    $safeAdults = htmlspecialchars($adults, ENT_QUOTES, 'UTF-8');
    $safeChild = htmlspecialchars($child, ENT_QUOTES, 'UTF-8');
    $safeDate = htmlspecialchars($datepicker, ENT_QUOTES, 'UTF-8');
    $safeDes = nl2br(htmlspecialchars($des, ENT_QUOTES, 'UTF-8'));
    $safeHidden = htmlspecialchars($hiddenField, ENT_QUOTES, 'UTF-8');

    $body = "<strong>Name:</strong> $safeName<br><br>";
    $body .= "<strong>Email:</strong> $safeEmail<br><br>";
    $body .= "<strong>Phone:</strong> $safePhone<br><br>";
    $body .= "<strong>Number of Adults:</strong> $safeAdults<br><br>";
    $body .= "<strong>Number of Children:</strong> $safeChild<br><br>";
    $body .= "<strong>Travel Date:</strong> $safeDate<br><br>";
    $body .= "<strong>Message:</strong><br>$safeDes<br><br>";
    $body .= "<strong>User IP:</strong> $ip<br><br>";

    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'india@touranzza.com';
        $mail->Password = 'Touranzzza@26';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('india@touranzza.com', 'Touranzza');
        $mail->addReplyTo($senderEmail, $safeName);
        $mail->addAddress('india@touranzza.com');
        $mail->addAddress('touranzza@gmail.com');

        //Content
        $mail->isHTML(true);
        $mail->Subject = "Website Enquiry for ($safeHidden)";
        $mail->Body = $body;

        if (!$mail->send()) {
            echo 'error';
        } else {
            // Optional: send auto-reply to client
            try {
                $autoReply = new PHPMailer(true);
                $autoReply->isSMTP();
                $autoReply->Host = 'smtp.hostinger.com';
                $autoReply->SMTPAuth = true;
                $autoReply->Username = 'india@touranzza.com';
                $autoReply->Password = 'Touranzzza@26';
                $autoReply->SMTPSecure = 'tls';
                $autoReply->Port = 587;
                $autoReply->setFrom('india@touranzza.com', 'Touranzza');
                $autoReply->addAddress($senderEmail);
                $autoReply->isHTML(true);
                $autoReply->Subject = "Thank you for your enquiry - Touranzza";
                $autoReply->Body = "<b>Dear $safeName</b>,<br><br>We have received your enquiry for <b>$safeHidden</b>.<br><br>We will get in touch with you within 24 hours with a personalised itinerary.<br><br>Best regards,<br>Touranzza Team";
                $autoReply->send();
            } catch (\Exception $eAuto) {
                // If auto-reply fails, do not block the admin email that already sent
            }

            // Redirect to thank you page
            header('Location: thank-you');
            exit;
        }

    } catch (Exception $e) {
        header('Location: thank-you?status=error');
        exit;
    }
} else {
    header('Location: ./');
    exit;
}
?>
