<?php
// session_start();

$fichier = explode('/', $_SERVER['REQUEST_URI'])[1];
require 'MVC/view/onglet.php';
require 'MVC/view/entete.php';
switch($fichier){
    case 'presentation':
        $titre = 'Présentation';
        $content = 'Presentation de mon profil actuel';
        require 'MVC/view/presentation.php';
        // require 'MVC/view/pied_de_page.php';
        break;
    case 'downloads':
        $titre = 'Téléchargements';
        // require 'MVC/view/onglet.php';
        // require 'MVC/view/entete.php';
        require 'MVC/view/downloads.php';
        // require 'MVC/view/pied_de_page.php';
        break;
    case 'links':
        $titre = 'Liens';
        // require 'MVC/view/onglet.php';
        // require 'MVC/view/entete.php';
        require 'MVC/view/links.php';
        // require 'MVC/view/pied_de_page.php';
        break;
    case 'form':
        $titre = 'Formulaire';
        // require 'MVC/view/onglet.php';
        // require 'MVC/view/entete.php';
        require 'MVC/view/form.php';
        // require 'MVC/view/pied_de_page.php';
        break;
    case 'about':
        $titre = 'Formulaire';
        // require 'MVC/view/onglet.php';
        // require 'MVC/view/entete.php';
        require 'MVC/view/form.php';
        // require 'MVC/view/pied_de_page.php';
        break;
    case 'ideas':
        $titre = 'Formulaire';
        // require 'MVC/view/onglet.php';
        // require 'MVC/view/entete.php';
        require 'MVC/view/form.php';
        // require 'MVC/view/pied_de_page.php';
        break;
    default :
        $titre = 'Accueil';
        // if(isset($_SESSION['mail']) && isset($_SESSION['mdp']))
        //     require 'vue/enTeteConnecte.php';
        // else
        //     require 'vue/enTeteDeconnecte.php';
        // require 'MVC/view/onglet.php';
        // require 'MVC/view/entete.php';
        require 'MVC/view/presentation.php';
}
require 'MVC/view/pied_de_page.php';