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
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'dylan.developpeur@gmail.com';
    $mail->Password   = 'pjmdzgsvnnwloiab';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    
    return $mail;
} catch (Exception $e) {
    throw new Exception("Erreur config mailer : ". $e->getMessage());
}
