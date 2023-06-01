<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>The ArtBox</title>
</head>

<body>
  <?php include("../header.php");// L'inclusion de "header.php" peut être utilisée pour afficher un en-tête commun à plusieurs pages d'un site web. Cela peut inclure un logo, une barre de navigation, des styles CSS ou d'autres éléments récurrents.?>
  <main>

    <?php
   /*$links  contient plusieurs éléments, chacun représentant les détails d'une œuvre d'art. Chaque élément est un tableau associatif contenant les clés suivantes :

    'id': Un identifiant numérique unique pour chaque œuvre.
    'titre': Le titre de l'œuvre.
    'auteur': Le nom de l'artiste qui a créé l'œuvre.
    'description': Une description détaillée de l'œuvre.
    'img': Le chemin de l'image représentant l'œuvre.
    'alt': Le texte alternatif de l'image.*/

      $links = [
        [
          'id' => 1,
          'titre' => '8/7Dodomu',
          'auteur' => 'Mia Tozerski',
          'description' => 'Mia Tozerski est une artiste peintre ukrainienne réfugiée de la guerre. Sur cette œuvre, Dodomu ("domicile" en ukrainien), elle nous montre la tristesse du peuple ukrainien qu\'elle partage, ayant elle-même dû quitter son foyer. L\'œuvre évoque le drapeau liquéfié d\'une Ukraine en souffrance, pleurant la mort de ses compatriotes. Ce travail chargé d\'émotion est le symbole d\'un événement qui marquera l\'Histoire. Cette peinture à l\'acrylique rayonne grâce à son fond lisse et ses mélanges de couleurs éclatantes.',
          'img' => 'img/clark-van-der-beken.png',
          'alt' => 'Dodomu',

        ],
        [
          'id' => 2,
          'titre' => 'Aashaaheen Baadal',
          'auteur' => 'Anaisha Devi',
          'description' => 'Sur cette oeuvre conceptuelle à la fois organique, minérale et liquide, Anaisha Devi nous transporte dans un nuage noir envoûtant. Un sombre tableau qui, par son verni éclatant, rayonne tel un marbre poli. Une oeuvre à la cohérence transcendantale, exécutée à la perfection',
          'img' => 'img/pawel-czerwinski-3.png',
          'alt' => 'Aashaaheen Baadal',
        ],
        [
          'id' => 3,
          'titre' => 'Nightlife Traffic',
          'auteur' => 'Andrew Forsythe',
          'description' => 'Quisque accumsan ultrices ligula vestibulum posuere. Aliquam feugiat ligula eget massa blandit condimentum. Morbi volutpat erat luctus suscipit pellentesque. Quisque cursus tempor nibh at sollicitudin. Sed blandit libero velit. Etiam tincidunt facilisis mollis. Ut mollis nunc sit amet lacinia luctus. Suspendisse volutpat enim semper arcu rutrum, et iaculis risus interdum. Duis at libero.',
          'img' => 'img/dan-cristian-padure.png',
          'alt' => 'Nightlife Traffic',
        ],
        [
          'id' => 4,
          'titre' => 'Le refuge de l\'Havre',
          'auteur' => 'Simon Pelletier',
          'description' => '  Nam tempus neque nec felis venenatis auctor. Nam velit risus, lobortis eu quam non, interdum efficitur nibh. Phasellus a augue ac orci lacinia mattis et vel lectus. Sed nec tellus urna. Donec at turpis turpis. Cras quam tellus, imperdiet vitae finibus id, varius quis felis. Maecenas blandit eleifend risus, vel hendrerit erat dignissim id. Nullam at laoreet nibh. Nulla gravida varius sollicitudin. Etiam non aliquam diam, tempor varius sapien. Aenean et velit eu nisi lobortis massa nunc.',
          'img' => 'img/steve-johnson-5.png',
          'alt' => 'Le refuge de l\'Havre'
        ],
        [
          'id' => 5,
          'titre' => 'Red Washover',
          'auteur' => 'Kit Van Der Borght',
          'description' =>  'Nunc euismod ullamcorper tortor, id efficitur ante interdum in. Integer eu condimentum nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras viverra suscipit feugiat. Mauris vehicula luctus tellus, eu hendrerit libero laoreet ut. In tristique vehicula nisl in tempus. Morbi tempus aliquet gravida. In eget est congue, rhoncus sapien at, cursus metus.',
          'img' => 'img/steve-johnson.png',
          'alt' => 'Red Washover',
        ],
        [
          'id' => 6,
          'titre' => 'Chromatics',
          'auteur' => 'Jean-Michel Delatronchette',
          'description' => ' Vivamus commodo non libero at hendrerit. In lacinia dui sit amet pellentesque iaculis. Donec at ultricies sem porttitor.',
          'img' => 'img/pawel-czerwinski.png',
          'alt' => 'Chromatics',
        ],
        [
          'id' => 7,
          'titre' => 'Digital Negative',
          'auteur' => 'Hamish McKee',
          'description' => ' Integer in nisl posuere, pulvinar ex ac, tincidunt risus. Nullam vel lorem et leo dignissim accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempor, magna non consectetur dapibus, est libero iaculis lacus, eget semper turpis orci vitae felis. Fusce eget molestie.',
          'img' => 'img/jazmin-quaynor.png',
          'alt' => 'Digital Negative',
        ],
        [
          'id' => 8,
          'titre' => 'Blast from the past',
          'auteur' => 'Juliette Baskerville',
          'description' => ' Nunc fermentum purus dapibus justo fermentum auctor. Maecenas non tincidunt leo. Morbi vitae iaculis sem. Donec quis scelerisque massa. Fusce quis accumsan diam, et interdum lectus. Suspendisse mattis pulvinar vehicula. Duis nisi.',
          'img' => 'img/steve-johnson-6.png',
          'alt' => 'Blast from the past',
        ],
        [
          'id' => 9,
          'titre' => 'Hurricane',
          'auteur' => 'Natalie Wellington',
          'description' => ' Aliquam tristique tempus molestie. Nulla nisl eros, dapibus eu lectus in, cursus accumsan arcu. Suspendisse bibendum diam dignissim porta maximus. Praesent sollicitudin consectetur faucibus. Cras pulvinar massa a orci rutrum, id blandit enim viverra. Praesent sed congue augue. Suspendisse efficitur, nisl quis finibus faucibus, lacus felis bibendum leo, eu euismod lacus mauris in felis. Quisque dignissim et dui et aliquet. Donec ut lobortis eros, vitae tincidunt augue metus.',
          'img' => 'img/victor-grabarczyk.png',
          'alt' => 'Hurricane',
        ],
        [
          'id' => 10,
          'titre' => 'La marée rouge',
          'auteur' => 'Martin Rodriguez',
          'description' => ' Vivamus quis odio vel ligula feugiat facilisis. Donec eleifend pellentesque massa, ut malesuada est bibendum sit amet. Morbi tincidunt nec tellus vel ornare. Mauris dolor tellus, gravida eget euismod eu, viverra eget urna. Phasellus feugiat ipsum nec lorem accumsan, sed porta quam dictum massa nunc.',
          'img' => 'img/pawel-czerwinski-2.png',
          'alt' => 'La marée rouge',
        ],
        [
          'id' => 11,
          'titre' => 'Asimilacion',
          'auteur' => 'Angel Sanchez-Fernandez',
          'description' => ' Mauris ut justo ac mi pretium eleifend. Curabitur sed magna ut elit facilisis pharetra. Maecenas tincidunt fermentum ipsum ut sollicitudin. Nullam feugiat, neque vel egestas sollicitudin, quam leo mattis mauris, in lacinia sem mi id risus. Nullam ultrices quam eu leo auctor tempus. Fusce vestibulum mi ex, vel ultricies purus mollis sollicitudin. Aenean ac vehicula ipsum. Nam turpis ante, ultrices eget odio sed, luctus bibendum mauris sodales sed.',
          'img' => 'img/steve-johnson-2.png',
          'alt' => 'Asimilacion',
        ],
        [
          'id' => 12,
          'titre' => 'La Galaxia Gialla',
          'auteur' => 'Eduardo Tancredi',
          'description' => '  Mauris maximus, orci sollicitudin ultrices elementum, tellus neque feugiat leo, quis lobortis purus neque vel lectus. Ut sagittis eros id lectus porttitor tincidunt. Donec scelerisque diam nec felis egestas, eget finibus ante porttitor. Sed malesuada sapien ut semper accumsan. Duis tristique dui vel egestas porttitor. Nunc tristique dapibus orci a amet.',
          'img' => 'img/fly-d.png',
          'alt' => 'La Galaxia Gialla',
        ],
        [
          'id' => 13,
          'titre' => 'Puffy Amalgamate',
          'auteur' => 'Sandro De Blasi',
          'description' => '  Donec semper a massa quis congue. In malesuada lorem ligula, ut posuere magna pulvinar in. Proin vitae enim gravida, commodo odio.',
          'img' => 'img/orfeas-green.png',
          'alt' => 'Puffy Amalgamate',
        ],
        [
          'id' => 14,
          'titre' => 'Mirage',
          'auteur' => 'Stéphanie Kaiser',
          'description' => '   Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam iaculis lorem ac ex tristique egestas et nec sapien. Donec tincidunt id erat sit amet tempus. Nullam vel molestie dui. Duis a neque massa. Vivamus quis ornare lacus. Nullam eleifend condimentum egestas. Vivamus magna purus, fermentum mollis mauris sed, consectetur interdum libero. Duis interdum tortor tellus, eget sollicitudin quis.',
          'img' => 'img/steve-johnson-4.png',
          'alt' => 'Mirage',
        ],
        [
          'id' => 15,
          'titre' => 'Blaue Gelbe Muster',
          'auteur' => 'Adelheid Von Schreiber',
          'description' => '   Curabitur dui odio, porta vel tempor sed, consectetur vitae mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus nec.',
          'img' => 'img/steve-johnson-3.png',
          'alt' => 'Blaue Gelbe Muster',
        ],
        
          [
          'id' => 16,
          'titre' => 'TEST',
          'auteur' => 'TEST',
          'description' => '   Curabitur dui odio, porta vel tempor sed, consectetur vitae mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus nec.',
          'img' => 'img/steve-johnson-3.png',
          'alt' => 'Blaue Gelbe Muster',
        ],
      ];
      
    
    

if (isset($_GET['id'])) {// vérifie si le paramètre 'id' est présent dans la requête GET. Cela permet de vérifier si l'ID de l'œuvre a été spécifié.
    $id = $_GET['id'];//récupère la valeur de l'ID spécifié dans la requête GET et la stocke dans la variable $id.
    if (!is_numeric($id)) { //vérifie si l'ID n'est pas un nombre valide. Si c'est le cas, cela signifie que le format de l'ID est invalide. Dans ce cas, un article avec une image d'erreur et un message indiquant que le format de l'ID est invalide est affiché.?> 
       <article id="detail-oeuvre">
          <div id="img-oeuvre">
            <img class="image-oeuvre alert-warning" src="/img/notvalid.jpeg" alt="ID">
          </div>
          <div id="contenu-oeuvre">
            <h1 id="detail-oeuvre">Format d'ID invalide</h1>
            <p class="auteur-oeuvre">Par : L'artiste</p>
            <p class="description-oeuvre"></p>
          </div>
        </article>
        <?php
    } else {// Si l'ID est un nombre valide, le code continue ici.
        $id = intval($id);//convertit l'ID en un entier en utilisant la fonction intval(). Cela assure que l'ID est un nombre entier.
        $selectedArt = null;// initialise la variable $selectedArt à null. Cette variable sera utilisée pour stocker les détails de l'œuvre sélectionnée.
        $index = 0;//initialise la variable $index à 0. Cette variable sera utilisée comme indice lors de la recherche de l'œuvre correspondant à l'ID spécifié.
    
        while ($index < count($links) && $selectedArt === null) {//commence une boucle while qui se répète tant que l'indice $index est inférieur au nombre d'éléments dans le tableau $links et tant que $selectedArt est null. Cette boucle recherche l'œuvre correspondant à l'ID spécifié.
            $link = $links[$index];//récupère l'élément correspondant à l'indice $index dans le tableau $links et le stocke dans la variable $link.
            if ($link['id'] === $id) {//vérifie si l'ID de l'œuvre dans $link correspond à l'ID spécifié. Si c'est le cas, l'œuvre est trouvée et assignée à la variable $selectedArt.
                $selectedArt = $link;
            }
            $index++;//incrémente la valeur de $index pour passer à l'élément suivant du tableau $links.
        }

        $articleId = "detail-oeuvre";
        $imgClass = "image-oeuvre";
        $imgSrc = "";
        $imgAlt = "";
        $titre = "";
        $auteur = "";
        $description = "";//Les lignes suivantes définissent des variables ($articleId, $imgClass, $imgSrc, $imgAlt, $titre, $auteur, $description) avec des valeurs par défaut.

        if ($selectedArt) {//vérifie si une œuvre a été sélectionnée (c'est-à-dire si $selectedArt n'est pas null). Si c'est le cas, les variables sont mises à jour avec les détails de l'œuvre sélectionnée.
            $imgSrc = $selectedArt['img'];
            $imgAlt = $selectedArt['alt'];
            $titre = $selectedArt['titre'];
            $auteur = $selectedArt['auteur'];
            $description = $selectedArt['description'];
        } else {//Si aucune œuvre n'a été sélectionnée, les variables sont mises à jour avec des valeurs indiquant qu'aucune œuvre correspondante n'a été trouvée.
            $imgSrc = "/img/21.-TTD-c.jpg";
            $imgAlt = "n'existe pas";
            $titre = "L'œuvre d'art sélectionnée n'existe pas";
            $auteur = "L'artiste";
        }

        if (!$selectedArt) {
            $imgSrc = "/img/monkey.png";
            $imgAlt = "ID";
            $titre = "Paramètre ID manquant";
        }
        ?>

        <article id="<?php echo $articleId; ?>">
            <div id="img-oeuvre">
                <img class="<?php echo $imgClass; ?> <?php if (!$selectedArt) echo 'alert-warning'; ?>" src="<?php echo $imgSrc; ?>" alt="<?php echo $imgAlt; ?>">
            </div>
            <div id="contenu-oeuvre">
                <h1 id="<?php echo $articleId; ?>"><?php echo $titre; ?></h1>
                <p class="auteur-oeuvre">Par <?php echo $auteur; ?></p>
                <p class="description-oeuvre"><?php echo $description; ?></p>
            </div>
        </article>
    <?php // code affiche les détails de l'œuvre
    }
}
?>

</main>
<?php include("../footer.php"); ?>
</body>
</html>

  
  
  
