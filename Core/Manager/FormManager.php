<?php

namespace App\Manager;

/**
 * FromManager gère le formulaire de contact de la page d'accueil.
 */
class FormManager
{
    /**
     * Traite le formulaire, envoie le message à l'administrateur et un mail de confirmation au visiteur.
     *
     * @param string $nom
     * @param string $prenom
     * @param string $email
     * @param string $message
     */
    public function fromTraiment($nom, $prenom, $email, $message)
    {
        $entetemail = "From: FlowDesign blog <madurba.c@gmail.com>\r\n";
        $entetemail .= 'Reply-To: '.$email."\n";
        $entetemail .= 'X-Mailer: PHP/'.phpversion()."\n";
        $entetemail .= "Content-Type: text/plain; charset=utf8\r\n";
        $objet = 'Confirmation de la réception de votre message';
        $message_email = 'Nous avons bien reçu votre message';

        mail($email, $objet, $message_email, $entetemail);

        $entetemail = 'From:'.$nom.' '.$prenom.' <'.$email.">\r\n";
        $entetemail .= 'Reply-To: '.$email."\n";
        $entetemail .= 'X-Mailer: PHP/'.phpversion()."\n";
        $entetemail .= "Content-Type: text/plain; charset=utf8\r\n";
        $objet = 'Contact depuis votre Blog FlowDesign';
        $message_email = $message;

        mail('madurba.c@gmail.com', $objet, $message_email, $entetemail);
    }
}
