<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data4-a_propos_en.php');
include('include/data-footer_en.php');
include('include/data-aside_en.php');
include('include/data-menu_en.php');


// Lancement du moteur Twig :
// $twig->render($modele-de-page, $tableau-de-variables)
//
// Le premier paramètre est le nom du modèle de page (le fichier Twig) à utiliser
//
// Le second paramètre est un tableau contenant les variables envoyées au modèle Twig
// Chaque ligne indique 'nom-variable-twig' => valeur-variable-twig
echo $twig->render('a_propos.twig', [
	'titre' => 'A Propos',
	'menu' => $menuItems,
	'asid' => $aside5,
	'foot' => $footer,
	'info' => $information
]);