<?php

$ramen = [
'titre' => 'Ramen',
'marque' => 'cup noodles',
'description' => 'Ramen box composed of noodles as well as a sauce which varies according to the boxes',
'prix' => 2,
    'contenant' => '100ml',
    'caracteristiques' => [
        'Energie' => 'Energy: 338 kJ/81 kcal',
        'Matières grasses' => 'Fat: 3.5 g, including saturated fatty acids 1.9g',
        'Glucides' => 'Carbohydrates: 9.6 g, including sugars 0.8 g',
        'Protéines' => 'Proteins: 2.1 g',
        'Sel' => 'Salt: 1.1 g',
    ],
    'url_image' => 'images/repas/repas1.jpg',
	'alt_image' => 'Ramen',
];

$sake = [
'titre' => 'Sake',
'marque' => 'sasaki shuzo',
'description' => 'Japanese alcoholic drink based on rice.It is a rice alcohol produced by fermentation titling from 11 to 20 °. ',
'prix' => 28,
    'contenant' => '720ml',
    'caracteristiques' => [
        'Volume d\'alcool pur' => 'Pure alcohol volume: 16%',
        'Ingrédients' => 'Ingredients: gohyakumangoku rice & iwai & kyo-no-kagayaki cultivated in the prefecture of Kyoto, rizing kôji',
        'Conservation' => 'Conservation: in the refrigerator between +2 ° C and +10 ° C',
    ],
    'url_image' => 'images/repas/repas2.jpg',
	'alt_image' => 'Ramen',
];

$taiyaki = [
'titre' => 'Taiyaki',
'marque' => 'meito',
'description' => 'Molded Gauger in the shape of a Japanese dorade composed of a crispy monaka waffle filled with chocolate',
'prix' => 1.70,
    'contenant' => '5g',
    'caracteristiques' => [
        'Energie Kcal' => 'Energy Kcal: 534 kcal',
        'Energie KJ' => 'Energy KJ: 2242.8 kj',
        'Matières grasses' => 'Fat: 29.4 g',
        'Glucides' => 'Carbohydrates: 63.0 g',
        'Protéines' => 'Proteins: 3.6 g',
    ],
    'url_image' => 'images/repas/repas3.jpg',
	'alt_image' => 'Taiyaki',
];

$the = [
'titre' => 'Green tea',
'marque' => 'pokka p',
'description' => 'Japanese Sencha Green Tea without sugar in a can',
'prix' => 1.50,
    'contenant' => '300ml',
    'caracteristiques' => [
        'Aromes' => 'Aromas: Successless',
        'Type de thé' => 'Type of tea: sencha',
        'Pourcentage de thé' => 'Percentage of green tea: 43%',
    ],
    'url_image' => 'images/repas/repas4.jpg',
	'alt_image' => 'the',
];

$soupe = [
  'titre' => 'Soup Miso instantaneous',
'marque' => 'amano Foods',
'description' => 'Japanese instant soup of Lightened Salt in Tôfu',
'prix' => 2.50,
    'contenant' => '9g',
    'caracteristiques' => [
        'Energie Kcal' => 'Energy Kcal: 401 kcal',
        'Energie KJ' => 'Energie KJ: 1677 KJ',
        'Matières grasses' => 'Fat: 9.27 g',
        'Glucides' => 'Carbohydrates: 55.8 g',
        'Protéines' => 'Proteins: 23.6 g',
    ],
    'url_image' => 'images/repas/repas5.jpg',
	'alt_image' => 'Soupe',
];

$categorie_nourriture = [$ramen, $sake, $taiyaki, $the, $soupe];

$information = [
    'desc' => 'Description : ',
    'marq' => 'Brand : ',
    'quant' => 'Quantity : ',
    'panier' => 'Put in the Basket',
    'pri' => 'Price : ' ,
    'asid_titre' => 'Some external links of documentation' ,
    'opp' => [
        'lien' => 'nourriture.php',
        'lang' => 'fr',
        'nom' => 'Français',
    ],
];



?>