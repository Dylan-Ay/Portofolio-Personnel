<?php
    // Déclaration des variables
    $name = !empty($_POST["name"]) ? $_POST["name"] : NULL;
    $email = !empty($_POST["email"]) ? $_POST["email"] : NULL;
    $numero = !empty($_POST["phone"]) ? $_POST["phone"] : NULL;
    $message = !empty($_POST["message"]) ? $_POST["message"] : NULL;
    $error = "";
    $errorNumber = "";
    $errorMail = "";

    // Récupération des informations du message pour mise en forme par mail.
    if(isset($_POST['message'])){
        $header  = 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $header .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page contact de dylanayache.com</h1>
        <p>
            <b>Nom : </b>' . $_POST['name'] . '<br>
            <b>Téléphone : </b>' . $_POST['phone'] . '<br>
            <b>Destinataire : </b>' . $_POST['email'] . '<br>
            <b>Message : </b>' . $_POST['message'] . 
        '</p>';
    }
    // Si conditions remplies le mail est envoyé, sinon afficher une erreur
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        // Si le champ téléphone n'est pas vide et que les caractères insérés ne sont pas des chiffres.
        if ( !empty($_POST['phone']) && !is_numeric($_POST['phone']) ) {
            $errorNumber = '<p class="red almost-bold mt-2">Veuillez insérer uniquement des chiffres.</p>';
        // Sinon Si le champ mail n'est pas vide et que le mail inséré n'est pas valide.
        } else if ( !empty($_POST["email"]) && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ) {
            $errorMail = '<p class="red almost-bold mt-2">Veuillez insérer un email valide.</p>';
        // Sinon Si les champs name, email et messages ne sont pas vides afficher une alerte message envoyé.
        } else if ( !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"]) && (empty($_POST['website'])) ){
            echo '<script>alert("Votre message a bien été envoyé, je vous répondrai sous peu.")</script>';
            $retour = mail('dylan.ayache.68@gmail.com', 'Mail du PortFolio', $message, $header);
        //Sinon afficher un message d'erreur.
        } else {
            $error = '<p class="red almost-bold mt-2">Veuillez remplir tous les champs requis.</p>';
        }
    }
?>