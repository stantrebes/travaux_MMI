<?php

$figurine_natsu = [
	'titre' => 'Natsu',
	'provenance' => 'Fairy Tail',
	'createur' => 'Tsume Art',
	'description' => 'Natsu Dragnir est l\'un des Chasseurs de Dragons de la Guilde Fairy Tail de première génération ',
	'prix' => 426,50,
    'caracteristiques' => [
            'hauteur' => 'Hauteur : 36 cm',
            'largeur' => 'Largeur : 36 cm',
            'poids' => 'Poids : 10 kg',
    ],
    'url_image' => 'images/figurine/figurine1.jpg',
	'alt_image' => 'Fairy Tail',
    'carrousel' => [
        'img1' => 'images/figurine/carrousel/fig_carrousselle.jpg',
        'img2' => 'images/figurine/carrousel/fig_carrousselle2.jpg',
        'img3' => 'images/figurine/carrousel/fig_carrousselle3.jpg',
    ],
];

$figurine_luffy = [
    'titre' => 'Luffy',
	'provenance' => 'One Piece',
	'createur' => 'Figuart',
	'description' => 'Monkey D. Luffy est un pirate et le principal protagoniste du manga et anime One Piece.',
	'prix' => 26,66,
    'caracteristiques' => [
            'hauteur' => 'Hauteur : 30 cm',
            'largeur' => 'Largeur : 30 cm',
            'poids' => 'Poids : 200 grammes',
    ],
    'url_image' => 'images/figurine/figurine2.jpg',
	'alt_image' => 'One piece',
    'carrousel' => [
        'img1' => 'images/figurine/carrousel/fig2_carrousselle.jpg',
        'img2' => 'images/figurine/carrousel/fig2_carrousselle2.jpg',
    ],
];

$figurine_toji = [
	'titre' => 'Toji',
	'provenance' => 'Jujutsu Kaisen',
	'createur' => 'Sega Prize',
	'description' => 'Toji Fushiguro est un ancien membre du clan Zenin, devenu un tueur à gages connu sous le nom de Tueur d\'Exorcistes. ',
	'prix' => 29,90,
    'caracteristiques' => [
            'hauteur' => 'Hauteur : 20 cm',
            'largeur' => 'Largeur : 20 cm',
            'poids' => 'Poids : 100 grammes',
    ],
    'url_image' => 'images/figurine/figurine3.jpg',
	'alt_image' => 'JJK',
    'carrousel' => [
        'img1' => 'images/figurine/carrousel/fig3_carrousselle.jpg',
        'img2' => 'images/figurine/carrousel/fig3_carrousselle2.jpg',
    ],
];

$figurine_renji = [
	'titre' => 'Renji',
	'provenance' => 'Bleach',
	'createur' => 'Figuart Zero',
	'description' => 'Renji Abarai est le lieutenant de la 6ème Division du Gotei 13 du Capitaine Byakuya Kuchiki. ',
	'prix' => 84,90,
    'caracteristiques' => [
            'hauteur' => 'Hauteur : 25 cm',
            'largeur' => 'Largeur : 25 cm',
            'poids' => 'Poids : 200 grammes',
    ],
    'url_image' => 'images/figurine/figurine4.jpg',
	'alt_image' => 'Bleach',
    'carrousel' => [
        'img1' => 'images/figurine/carrousel/fig4_carrousselle.jpg',
        'img2' => 'images/figurine/carrousel/fig4_carrousselle2.jpg',
        'img3' => 'images/figurine/carrousel/fig4_carrousselle3.jpg',
    ],
];

$figurine_guts = [
	'titre' => 'Guts',
	'provenance' => 'Berserk',
	'createur' => 'POP UP',
	'description' => 'Guts ,est un ancien mercenaire et vagabond',
	'prix' => 84,90,
    'caracteristiques' => [
            'hauteur' => 'Hauteur : 28 cm',
            'largeur' => 'Largeur : 28 cm',
            'poids' => 'Poids : 200 grammes kg',
    ],
    'url_image' => 'images/figurine/figurine5.jpg',
	'alt_image' => 'Berserk',
    'carrousel' => [
        'img1' => 'images/figurine/carrousel/fig5_carrousselle.jpg',
        'img2' => 'images/figurine/carrousel/fig5_carrousselle2.jpg',
        'img3' => 'images/figurine/carrousel/fig5_carrousselle3.jpg',
    ],
];

$categorie_figurine = [$figurine_natsu, $figurine_luffy, $figurine_toji, $figurine_renji, $figurine_guts];

$information = [
    'desc' => 'Description du personnage : ',
    'anim' => 'Anime : ',
    'crea' => 'Créateur : ',
    'pri' => 'Prix : ',
    'panier' => 'Mettre dans le panier' ,
    'plus' => 'Plus d\'images : ',
    'im' => 'Si vous voulez voir plus de photos : ',
    'asid_titre' => 'Quelque liens externes de documentation' ,
    'opp' => [
        'lien' => 'figurine_en.php',
        'lang' => 'en',
        'nom' => 'English',
    ],
];


?>