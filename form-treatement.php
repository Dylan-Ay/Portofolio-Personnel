<?php
    require __DIR__ . '/vendor/autoload.php';
    use SendGrid\Mail\Mail;

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
            $message = '
            <p><b>Nom :</b> ' . htmlspecialchars($_POST['name']) . '</p>
            <p><b>Téléphone :</b> ' . htmlspecialchars($_POST['phone']) . '</p>
            <p><b>Email :</b> ' . htmlspecialchars($_POST['email']) . '</p>
            <p><b>Message :</b><br>' . nl2br(htmlspecialchars($_POST['message'])) . '</p>
            ';
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
            $emailSendGrid = new Mail();
            
            $emailSendGrid->setFrom('dylan.developpeur@gmail.com', 'Portfolio');
            $emailSendGrid->setSubject("Message provenant du Portfolio de la part de $email");
            $emailSendGrid->addTo("dylan.developpeur@gmail.com", "Dylan");
            $emailSendGrid->setReplyTo($email, $name);
            $emailSendGrid->addContent("text/plain", strip_tags($message));
            $emailSendGrid->addContent("text/html", $message);
            
            $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
            $response = $sendgrid->send($emailSendGrid);

            if ($response->statusCode() >= 200 && $response->statusCode() < 300) {
                echo '<script>alert("Votre message a bien été envoyé, je vous répondrai sous peu 😊.")</script>';
            } else {
                $error = "Message non envoyé. Erreur SendGrid: " . $response->statusCode();
            }
            } catch (Exception $e) {
                $error = "Message non envoyé. Exception SendGrid: " . $e->getMessage();
            }
        }
    }
?>