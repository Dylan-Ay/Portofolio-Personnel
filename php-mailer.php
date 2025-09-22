<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Définition de la langue à français
    $mail->setLanguage('fr', __DIR__ . '/vendor/phpmailer/phpmailer/language/');
    
    // Paramètres SMTP
    $mail->isSMTP();

    $mail->Host       = $_ENV['SMTP_HOST'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $ENV['SMTP_USER'];
    $mail->Password   = $ENV['SMTP_PASS'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $ENV['SMTP_PORT'] ?: 587;
    
    return $mail;
} catch (Exception $e) {
    throw new Exception("Erreur config mailer : ". $e->getMessage());
}
