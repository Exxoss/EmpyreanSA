<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 29/02/2016
 * Time: 18:11
 */
$mail = "gerance@empyreansaangency.com";//email destinataire
$subject = "Web mailing";
$message = "Nom : ".htmlspecialchars($_POST['nom'])."\n"."Prenom : ".htmlspecialchars($_POST['prenom'])."\n\n";
$message .= "e-mail : ".htmlspecialchars($_POST['email'])."\n"."Tel : ".htmlspecialchars($_POST['tel'])."\n\n";
$message .= "Message :\n".htmlspecialchars($_POST['message']);

try {
    mail($mail, $subject, $message);
    echo "Success";
} catch (Exception $e) {
    echo $e;
}

