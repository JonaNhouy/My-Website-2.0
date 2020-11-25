<?php
// session_start();

$fichier = explode('/', $_SERVER['REQUEST_URI'])[1];
require '../view/onglet.php';
switch($fichier){
    case 'presentation':
        $titre = 'Présentation';
        $content = 'Presentation de mon profil actuel';
        require '../view/entete.php';
        require '../view/presentation.php';
        // require '../view/pied_de_page.php';
        break;
    case 'downloads':
        $titre = 'Téléchargements';
        $content = 'Les téléchargements proposés';
        require '../view/entete.php';
        // require '../view/onglet.php';
        require '../view/downloads.php';
        // require '../view/pied_de_page.php';
        break;
    case 'links':
        $titre = 'Liens';
        $content = 'Liens utiles';
        require '../view/entete.php';
        // require '../view/onglet.php';
        require '../view/links.php';
        // require '../view/pied_de_page.php';
        break;
    case 'form':
        $titre = 'Formulaire';
        $content = 'Le formulaire pour me contacter';
        require '../view/entete.php';
        // require '../view/onglet.php';
        require '../view/form.php';
        // require '../view/pied_de_page.php';
        break;
    case 'about':
        $titre = 'A propos';
        $content = 'A propos de moi';
        require '../view/entete.php';
        // require '../view/onglet.php';
        require '../view/form.php';
        // require '../view/pied_de_page.php';
        break;
    case 'ideas':
        $titre = 'Idées';
        $content = 'Ms idées de projet';
        require '../view/entete.php';
        // require '../view/onglet.php';
        require '../view/form.php';
        // require '../view/pied_de_page.php';
        break;
    default :
        $titre = 'Accueil';
        $content = 'Presentation de mon profil actuel';
        require '../view/entete.php';
        // if(isset($_SESSION['mail']) && isset($_SESSION['mdp']))
        //     require 'vue/enTeteConnecte.php';
        // else
        //     require 'vue/enTeteDeconnecte.php';
        // require '../view/onglet.php';
        require '../view/presentation.php';
}
require '../view/pied_de_page.php';