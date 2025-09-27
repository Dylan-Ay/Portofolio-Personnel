<?php
    require('php-mailer.php');

    // Si conditions remplies le mail est envoyé, sinon afficher une erreur
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $name = !empty($_POST["name"]) ? $_POST["name"] : NULL;
        $email = !empty($_POST["email"]) ? $_POST["email"] : NULL;
        $numero = !empty($_POST["phone"]) ? $_POST["phone"] : NULL;
        $message = !empty($_POST["message"]) ? $_POST["message"] : NULL;
        $error = "";
        $errorNumber = "";
        $errorMail = "";
        $redirectToContactForm = "<script>window.location.replace('/index.php#Contact')</script>";

    // Récupération des informations du message pour mise en forme par mail.
        if(!empty($_POST['message'])){
            $message = 
            '<p>
                <b>Nom : </b>' . $_POST['name'] . '<br>
                <b>Téléphone : </b>' . $_POST['phone'] . '<br>
                <b>Email : </b>' . $_POST['email'] . '<br>
                <b>Message : </b> <p>' . $_POST['message'] . 
            '</p></p>';
        } else {
            $error = '<p class="red almost-bold mt-2">Veuillez remplir tous les champs requis.</p>';
        }

        // Si le champ téléphone n'est pas vide et que les caractères insérés ne sont pas des chiffres.
        if ( !empty($_POST['phone']) && !is_numeric($_POST['phone']) ) {
            $errorNumber = '<p class="red almost-bold mt-2">Veuillez insérer uniquement des chiffres.</p>';
            echo $redirectToContactForm;
        // Sinon Si le champ mail n'est pas vide et que le mail inséré n'est pas valide.
        } else if ( !empty($_POST["email"]) && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ) {
            $errorMail = '<p class="red almost-bold mt-2">Veuillez insérer une adresse mail valide.</p>';
            echo $redirectToContactForm;
        // Sinon Si les champs name, email et messages ne sont pas vides afficher une alerte message envoyé.
        } else if ( !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"]) && (empty($_POST['website'])) ){
            try {
            // Adresse validée par SendGrid
            $mail->setFrom('dylan.developpeur@gmail.com', 'Portfolio');

            // Destinataire
            $mail->addReplyTo($email, $name);

            // Adresse où je reçois le mail
            $mail->addAddress('dylan.developpeur@gmail.com');

            // Contenu
            $mail->isHTML(true);
            $mail->Subject = 'Message provenant du PortFolio de la part de '. $_POST['email'];
            $mail->CharSet = "UTF-8";
            $mail->Body    = $message;

            $mail->send();
            echo '<script>alert("Votre message a bien été envoyé, je vous répondrai sous peu 😊.")</script>';
            } catch (Exception $e) {
                $error = "Message non envoyé. Erreur: {$mail->ErrorInfo}";
            }
        }
    }
?>