<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data5-contact.php');
include('include/data-footer.php');
include('include/data-menu.php');


// Lancement du moteur Twig :
// $twig->render($modele-de-page, $tableau-de-variables)
//
// Le premier paramètre est le nom du modèle de page (le fichier Twig) à utiliser
//
// Le second paramètre est un tableau contenant les variables envoyées au modèle Twig
// Chaque ligne indique 'nom-variable-twig' => valeur-variable-twig
echo $twig->render('contact.twig', [
	'titre' => 'Page de contact',
	'info' => $information,
	'menu' => $menuItems,
	'foot' => $footer
]);