<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data3-nourriture-en.php');
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
echo $twig->render('nourriture.twig', [
	'title_en' => 'Food & Drinks',
	'repas' => $categorie_nourriture,
	'info' => $information,
	'menu' => $menuItems,
	'asid' => $aside4,
	'foot' => $footer
]);
