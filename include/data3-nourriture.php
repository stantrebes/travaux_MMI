<?php

$ramen = [
	'titre' => 'Ramen',
	'marque' => 'Cup Noodles',
	'description' => 'Boîte de Ramen composé de nouilles ainsi que d\'une sauce qui varie selon les boîtes',
	'prix' => 2,
    'contenant' => '100ml',
    'caracteristiques' => [
        'Energie' => 'Énergie : 338 kJ/81 kcal',
        'Matières grasses' => 'Matières grasses : 3,5 g, dont acides gras saturés 1,9 g',
        'Glucides' => 'Glucides : 9,6 g, dont sucres 0,8 g',
        'Protéines' => 'Protéines : 2,1 g',
        'Sel' => 'Sel : 1,1 g',
    ],
    'url_image' => 'images/repas/repas1.jpg',
	'alt_image' => 'Ramen',
];

$sake = [
    'titre' => 'Saké',
	'marque' => 'SASAKI SHUZO',
	'description' => 'Boisson alcoolisée japonaise à base de riz. Il s\'agit d\'un alcool de riz produit par fermentation titrant de 11 à 20°.',
	'prix' => 28,
    'contenant' => '720ml',
    'caracteristiques' => [
        'Volume d\'alcool pur'  =>  'Volume d\'alcool pur : 16%',
        'Ingrédients' => 'Ingrédients : riz Gohyakumangoku & Iwai & Kyo-no-Kagayaki cultivé dans la Prefecture de Kyoto, riz-kôji',
        'Conservation' => 'Conservation : au réfrigérateur entre +2°C et +10°C',
    ],
    'url_image' => 'images/repas/repas2.jpg',
	'alt_image' => 'Ramen',
];

$taiyaki = [
    'titre' => 'Taiyaki',
	'marque' => 'Meito',
	'description' => 'Gaufrette moulée en forme de dorade japonaise composé d\une gaufre croustillante Monaka fourrée au chocolat ',
	'prix' => 1.70,
    'contenant' => '5g',
    'caracteristiques' => [
        'Energie kcal' => 	'Energie kcal : 534 Kcal',
        'Energie kJ' => 'Energie kJ : 2242.8 kJ',
        'Matières grasses' => 'Matières grasses : 29.4 g',
        'Glucides' => 'Glucides	: 63.0 g',
        'Protéines' => 'Protéines :	3.6 g',
    ],
    'url_image' => 'images/repas/repas3.jpg',
	'alt_image' => 'Taiyaki',
];

$the = [
    'titre' => 'Thé vert',
	'marque' => 'Pokka P',
	'description' => 'Thé vert sencha japonais sans sucre en cannette',
	'prix' => 1.50,
    'contenant' => '300ml',
    'caracteristiques' => [
        'Aromes' => 'Aromes : Sans sucre',
        'Type de thé' => 'Type de thé : Sencha',
        'Pourcentage de thé' => 'Pourcentage de thé vert : 43%',
    ],
    'url_image' => 'images/repas/repas4.jpg',
	'alt_image' => 'the',
];

$soupe = [
    'titre' => 'Soupe Miso instantanée',
	'marque' => 'Amano Foods',
	'description' => 'Soupe instantanée japonaise de miso allégée en sel au tôfu',
	'prix' => 2.50,
    'contenant' => '9g',
    'caracteristiques' => [
        'Energie kcal' => 	'Energie kcal : 401 Kcal',
        'Energie kJ' => 'Energie kJ : 1677 kJ',
        'Matières grasses' => 'Matières grasses : 9.27 g',
        'Glucides' => 'Glucides	: 55.8 g',
        'Protéines' => 'Protéines :	23.6 g',
    ],
    'url_image' => 'images/repas/repas5.jpg',
	'alt_image' => 'Soupe',
];

$categorie_nourriture = [$ramen, $sake, $taiyaki, $the, $soupe];

$information = [
    'desc' => 'Description : ',
    'marq' => 'Marque : ',
    'quant' => 'Quantité : ',
    'panier' => 'Mettre dans le panier',
    'pri' => 'Prix : ' ,
    'tab_titre' => 'Différents commentaires :',
    'asid_titre' => 'Quelque liens externes de documentation' ,
    'opp' => [
        'lien' => 'nourriture_en.php',
        'lang' => 'en',
        'nom' => 'English',
    ],
];



?>