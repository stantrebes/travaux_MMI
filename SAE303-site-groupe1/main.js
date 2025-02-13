const tips = {
    salon: [
        {
            title: "La Lampe",
            probleme: "Si la lumière reste allumée alors qu'il n'y a personne dans la pièce, elle gaspille de l’énergie.",
            solution: "Quand tu sors d’une pièce, pense toujours à éteindre la lumière !",
            image_gauche : "img/image_gauche_lampe.png",
            image_droite : "img/image_droite_lampe.gif",
            couleur : "var(--salon-partie1)",
            credit : "TIMMEL Benjamin",
            source : "https://www.monenergie.be/blog/les-enfants-qui-neteignent-jamais-les-lumieres-quel-est-le-cout-annuel-pour-leurs-parents/"
        },
        {
            title: "La Prise", 
            probleme: "Même si ton jouet est complètement chargé, le laisser branché continue de consommer de l’énergie.",
            solution: "Dès que ton jouet est chargé à 100 %, débranche-le et pense aussi à retirer le chargeur de la prise !",
            image_gauche : "img/image_gauche_prise.png",
            image_droite : "img/image_droite_prise.png",
            couleur : "var(--salon-partie2)",
            credit : "GARAU Niels",
            source : "https://www.data.gouv.fr/fr/datasets/consommation-electrique-heure-par-heure-des-appareils-domestiques/#/resources"
        },
        {
            title: "La Télévision",
            probleme: "Si tu laisses la télé allumée toute la journée, elle utilise de l’électricité même quand tu ne la regardes pas !",
            solution: "Dès que ton émission ou ton dessin animé est fini, éteins la télé avec la télécommande !",
            image_gauche : "img/image_gauche_tele.png",
            image_droite : "img/image_droite_tele.png",
            couleur : "var(--salon-partie3)",
            credit : "TIMMEL Benjamin",
            source : "https://particuliers.engie.fr/economies-energie/conseils-economies-energie/conseils-calcul-consommation/consommation-electrique-television.html"
        }
    ],
    chambre: [
        {
            title: "Les Rideaux",
            probleme: "Si tu ne ouvres pas les rideaux, la pièce reste sombre et tu dois allumer la lumière, ce qui gaspille de l’énergie.",
            solution: "Ouvre les rideaux pour laisser entrer la lumière du soleil !️ Tu verras mieux et tu pourras jouer sans allumer la lumière",
            image_gauche : "img/image_gauche_fenetre.png",
            image_droite : "img/image_droite_fenetre.png",
            couleur : "var(--chambre-partie1)",
            credit : "RAGOT Elias",
            source : "https://www.bluetek.fr/fr/article/bilan-energetique-positif-de-leclairage-naturel#:~:text=La%20recommandation%20du%20GIF%20Lumi%C3%A8re,d"
        },
        {
            title: "Le chauffage",
            probleme: "Le chauffage utilise beaucoup d’énergie et réchauffe trop la Terre.",
            solution: " Demande à tes parents de régler le chauffage à 19°C ou pense à le baisser toi-même. Et si tu as froid, enfile un pull bien chaud !",
            image_gauche : "img/image_gauche_chauffage.png",
            image_droite : "img/image_droite_chauffage.png",
            couleur : "var(--chambre-partie2)",
            credit : "RAGOT Elias",
            source : "https://www.mesdepanneurs.fr/blog/chauffage-19-degres"
        }
    ],
    "salle de bain": [
        {
            title: "Les Toilettes",
            probleme: "Une grande chasse d’eau utilise deux fois plus d’eau qu’une petite. Cela gaspille beaucoup d’eau !",
            solution: "Utilise la petite chasse d’eau quand c’est possible pour économiser l’eau.",
            image_gauche : "img/image_gauche_toilette.png",
            image_droite : "img/image_droite_toilette.png",
            couleur : "var(--sdb-partie1)",
            credit : "KUPSCHUS Abigaelle",
            source : "https://www.geberit.fr/produits-de-salle-de-bains/inspiration/conseils/utilisation-chasse-d-eau/"
        },
        {
            title: "La Douche",
            probleme: "Si tu prends une douche trop longue ou un bain, tu gaspilles beaucoup d’eau !",
            solution: "Prends une douche rapide (5 minutes suffisent) et évite les bains quand tu peux.",
            image_gauche : "img/image_gauche_douche.png",
            image_droite : "img/image_droite_douche.png",
            couleur : "var(--sdb-partie2)",
            credit : "KUPSCHUS Abigaelle",
            source : "https://www.linfodurable.fr/vie-quotidienne/les-gestes-simples-pour-economiser-leau-au-quotidien-37425?"
        },
        {
            title: "Le Lavabo",
            probleme: "Si tu laisses couler l’eau pendant que tu te brosses les dents, tu peux gaspiller jusqu’à 15 litres d’eau à chaque fois !",
            solution: "Pense à fermer le robinet pendant que tu te brosses les dents. Ça économise beaucoup d’eau !",
            image_gauche : "img/image_gauche_lavabo.png",
            image_droite : "img/image_droite_lavabo.png",
            couleur : "var(--sdb-partie3)",
            credit : "TREBES Stan",
            source : "https://www.linfodurable.fr/vie-quotidienne/les-gestes-simples-pour-economiser-leau-au-quotidien-37425?"
        }
    ],
    cuisine: [
        {
            title: "Le Frigo",
            probleme: "Si tu laisses la porte du frigo ouverte trop longtemps, il perd son froid et doit travailler plus pour redevenir frais. Cela utilise beaucoup d’électricité !",
            solution: "Avant d’ouvrir le frigo, pense bien à ce que tu veux prendre pour ne pas le laisser ouvert trop longtemps.",
            image_gauche : "img/image_gauche_frigo.png",
            image_droite : "img/image_droite_frigo.png",
            couleur : "var(--cuisine-partie1)",
            credit : "TREBES Stan",
            source : "https://agirpourlatransition.ademe.fr/particuliers/maison/economies-denergie-deau/electricite-combien-consomment-appareils-maison"
        },
    ]
};


document.querySelectorAll('.room').forEach(room => {
    room.addEventListener('click', () => {
        const roomType = room.dataset.room;
        displayTips(roomType);
    });
});

function recupcolor(roomType) {
    if (roomType === "salle de bain") {
        return "var(--sdb-fini)";
    } else if (roomType === "chambre") {
        return "var(--chambre-fini)";
    } else if (roomType === "cuisine") {
        return "var(--cuisine-fini)";
    } else if (roomType === "salon") {
        return "var(--salon-fini)";
    }
}

function recuplien(roomType) {
    if (roomType === "salle de bain") {
        return "https://www.enargia.eus/fr/blog/sobriete-energetique/sobriete-2-des-gestes-simples-dans-la-salle-de-bain";
    } else if (roomType === "chambre") {
        return "http://www.vedura.fr/guide/eco-geste/chambre";
    } else if (roomType === "cuisine") {
        return "https://laureganisatrice.fr/10-eco-gestes-faciles-a-mettre-en-place-dans-sa-cuisine/";
    } else if (roomType === "salon") {
        return "http://www.vedura.fr/guide/eco-geste/salle-sejour";
    }
}

function updateLink() {
    const salonLink = document.getElementById('link-salon');
    const cuisineLink = document.getElementById('link-cuisine');
    const chambreLink = document.getElementById('link-chambre');
    const salledebainLink = document.getElementById('link-salledebain'); 

    // Définissez vos URLs ici
    const salon0 = '#salon0'; 
    const cuisine0 = '#cuisine0'; 
    const chambre0 = '#chambre0'; 
    const salledebain0 = '#salle de bain0'; 

    const salon1 = '#salon1'; 
    const cuisine1 = '#cuisine1';
    const chambre1 = '#chambre1'; 
    const salledebain1 = '#salle de bain1'; 

    if (window.innerWidth < 600) { // Lien pour mobile
        salonLink.href = salon1;
        cuisineLink.href = cuisine1;
        chambreLink.href = chambre1;
        salledebainLink.href = salledebain1;
    } else { // Lien pour desktop
        salonLink.href = salon0; 
        cuisineLink.href = cuisine0;
        chambreLink.href = chambre0;
        salledebainLink.href = salledebain0;
    } 
}

// Mettre à jour les liens au chargement de la page
updateLink();

// Mettre à jour les liens lors du redimensionnement de la fenêtre
window.addEventListener('resize', updateLink);

// Fonction pour obtenir le nombre d'éléments dans chaque pièce
function getTipsCountByRoom(room) {
    if (tips[room]) {
        return tips[room].length;
    } else {
        return 0; 
    }
}
function displayTips(roomType) {
    const tipsContent = document.getElementById('tips-content');
    const roomTips = tips[roomType];

    const visitedRooms = JSON.parse(localStorage.getItem('visitedRooms')) || [];
    if (!visitedRooms.includes(roomType)) {
        visitedRooms.push(roomType);
        localStorage.setItem('visitedRooms', JSON.stringify(visitedRooms));
    }

    let html = `<div id="${roomType}0" class='img-piece' style="background-image: url('img/${roomType}.png');">
                    <h2 >${roomType.charAt(0).toUpperCase() + roomType.slice(1)}</h2>
                    <div class="fleche-section">
                        <a href="#${roomType}1"><i class="bi bi-arrow-down"></i></i></a>
                    </div>
                </div>`;
    
    let html2 = `<div id="${roomType}${tips[roomType].length+1}"  class='section-fin' style="background-color: ${recupcolor(roomType)}">
                    <div class="gif-centre">
                        <img src="img/image_gauche_fin.png" class="gif">
                    </div>
                    <div class='div-fin'>
                        <div class="dialogue-item-fin">
                            <div class="speech-bubble-end ">
                                <p>Bravo tu as complété la pièce !</p>
                            </div>
                            <div class="speech-bubble-end ">
                                <p>Si tu veux plus de précisions : </br> <a href="${recuplien(roomType)}" target="_blank">Clique ici</a></p>
                            </div>
                            <div class="speech-bubble-end hero-bubble-2">
                                <p>Tu peux continuer l'aventure en cliquant sur la maison !</p>
                            </div> 
                        </div>     
                        <div class="retour-maison">
                            <div class="bloc-fin">
                                <a href="#maison"><i class="bi bi-house-fill"></i></a>
                            </div>
                            <div class="character hero img-change">
                                <img src="img/heros.png" alt="Super héros">
                            </div>
                        </div> 
                    </div>
                    <div class="gif-centre">
                        <img src="img/image_droite_fin.png" class="gif"> 
                    </div>                       
                </div>`;

    let html3 = `<div id="${roomType}${tips[roomType].length+1}"  class='section-fin' style="background-color: ${recupcolor(roomType)}">
                    <div class="gif-centre">
                            <img src="img/heros_gauche_fin.gif">
                    </div> 
                    <div class='div-fin'>
                    <h2>🎉 Bravo, Petit Héros de la Planète !</h2>
                        <div class="dialogue-item-fin">
                            <div class="speech-bubble-end ">
                                <p>Tu as découvert tous les gestes pour économiser l’énergie et l’eau ! Maintenant, tu es un vrai Protecteur de la Planète. 🎖️✨</p>
                            </div>
                            <div class="speech-bubble-end ">
                                <h3 class="h3-end">🌟 Ton défi du jour ! 🌟</h3>
                                <p>Essaie d’appliquer au moins 3 gestes écologiques chez toi aujourd’hui. Par exemple :</p>
                                <ol>
                                    <li>Éteindre la lumière en sortant d’une pièce 💡</li>
                                    <li>Fermer le robinet en te brossant les dents 🚰</li>
                                    <li>Prendre une douche rapide au lieu d’un bain 🚿</li>
                                </ol>                            
                            </div>
                            <div class="speech-bubble-end hero-bubble-2">
                                <h3 class="h3-end">🏆 Gagne ton diplôme ! 🏆</h3>
                                <p>Tu as bien appris ! Pour te récompenser, voici ton diplôme de Protecteur de la Planète à afficher ou à imprimer ! 🎓💚</p>
                                <a href="diplome.pdf" target="_blank">Imprimer le diplome</a>
                            </div> 
                        </div>     
                        <div class="retour-maison-spe">
                            <div class="bloc-fin">
                                <a href="#maison"><i class="bi bi-house-fill"></i></a>
                            </div>
                            <div class="character hero img-change">
                                <img src="img/heros.png" alt="Super héros">
                            </div>
                        </div> 
                    </div>
                    <div class="gif-centre">
                                                    <img src="img/heros_droite_fin.gif">

                    </div>                       
                </div>`;
    
    var i = 1;

    roomTips.forEach(tip => {
        html += `
            <div id="${roomType}${i}"class="tip-card" style="background-color: ${tip.couleur}">
                <img src="${tip.image_gauche}">
                <div class="text-section-centre">
                    <h2>${tip.title}</h2>
                    <h3>Problème</h3>
                    <p>${tip.probleme}</p>
                    <h3>Solution</h3>
                    <p>${tip.solution}</p>
                </div>
                <figure>
                    <img src="${tip.image_droite}">
                    <figcaption>Fait par ${tip.credit}</br><a href=${tip.source} target="_blank">Source</a></figcaption>
                </figure>
                <div class="fleche-section">
                    <a href="#${roomType}${i+1}"><i class="bi bi-arrow-down"></i></i></a>
                </div>
            </div>
        ` ;
        i+=1    
    });
    
    if (visitedRooms.length != 4){
    tipsContent.innerHTML = html + html2; }

    else{
        tipsContent.innerHTML = html + html3;
    }
}


document.addEventListener("DOMContentLoaded", function () {
    // Active imageMapResizer
    if (window.imageMapResize) {
        imageMapResize();
    }

    // 🎯 Effet d'apparition de la section conseils au clic sur une pièce
    const areas = document.querySelectorAll("area.room");
    const tipsSection = document.querySelector(".tips-section");

    
    areas.forEach(area => {
        area.addEventListener("click", () => {
            tipsSection.classList.add("visible");
            // ✨ Ajout d'une courte animation de secousse sur l'élément cliqué
            area.classList.add("clicked");
            setTimeout(() => {
                area.classList.remove("clicked");
            }, 500);
        });
    });

    // ✨ Animation de secousse au clic sur les personnages
    document.querySelectorAll(".character img").forEach(character => {
        character.addEventListener("click", () => {
            character.classList.add("shake");
            setTimeout(() => {
                character.classList.remove("shake");
            }, 300);
        });
    });
});







    
    const preview = document.querySelector('.room-preview');
    const house = document.querySelector('.house'); // Récupère le conteneur de la maison
    
    if (window.innerWidth > 1200) { // Lien pour mobile
        document.querySelectorAll('.room').forEach(area => {
        
            area.addEventListener('mouseover', function() {
                const roomName = this.getAttribute('data-room'); // Récupère le nom de la pièce
                preview.style.backgroundImage = `url('img/accueil_${roomName}.png')`; // Change l’image
                preview.style.display = 'block';
            });
        
            area.addEventListener('mouseout', function() {
                preview.style.display = 'none'; // Cache l’image
            });
        });
    } else {}


    
    localStorage.removeItem('visitedRooms');


