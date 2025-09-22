<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Définition de la langue à français
    $mail->setLanguage('fr', __DIR__ . '/vendor/phpmailer/phpmailer/language/');
    
    // Paramètres SMTP
    $mail->isSMTP();
    $mail->Host       = getenv('SMTP_HOST');
    $mail->SMTPAuth   = true;
    $mail->Username   = getenv('SMTP_USER');
    $mail->Password   = getenv('SMTP_PASS');
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = getenv('SMTP_PORT') ?: 587;

    return $mail;
} catch (Exception $e) {
    throw new Exception("Erreur config mailer : ". $e->getMessage());
}
