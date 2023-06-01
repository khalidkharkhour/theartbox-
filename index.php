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
    <?php include("../header.php"); ?>
    <main>
        <div id="liste-oeuvres">
<?php        //tableau des oeuvres.
            $oeuvres = [
                ["8/7Dodomu", "Mia Tozerski", "clark-van-der-beken.png"],
                ["Aashaaheen Baadal", "Anaisha Devi", "pawel-czerwinski-3.png"],
                ["Nightlife Traffic", "Andrew Forsythe", "dan-cristian-padure.png"],
                ["Le refuge de l'Havre", "Simon Pelletier", "steve-johnson-5.png"],
                ["Red Washover", "Kit Van Der Borght", "steve-johnson.png"],
                ["Chromatics", "Jean-Michel Delatronchette", "pawel-czerwinski.png"],
                ["Digital Negative", "Hamish McKee", "jazmin-quaynor.png"],
                ["Blast from the past", "Juliette Baskerville", "steve-johnson-6.png"],
                ["Hurricane", "Natalie Wellington", "victor-grabarczyk.png"],
                ["La marée rouge", "Martin Rodriguez", "pawel-czerwinski-2.png"],
                ["Asimilacion", "Angel Sanchez-Fernandez", "steve-johnson-2.png"],
                ["La Galaxia Gialla", "Eduardo Tancredi", "fly-d.png"],
                ["Puffy Amalgamate", "Sandro De Blasi", "orfeas-green.png"],
                ["Mirage", "Stéphanie Kaiser", "steve-johnson-4.png"],
                ["Blaue Gelbe Muster", "Adelheid Von Schreiber", "steve-johnson-3.png"]
            ];

            $currentURL = $_SERVER['REQUEST_URI'];//  récupère l'URL actuelle de la requête en utilisant la superglobale $_SERVER['REQUEST_URI'] et la stocke dans la variable $currentURL.
            $redirectURL = 'http://theartbox.com:8080';// définit l'URL de redirection vers laquelle l'utilisateur sera redirigé s'il est sur la page d'accueil (/index.php).

            if ($currentURL === '/index.php') {
//vérifie si l'URL actuelle correspond à /index.php. Si c'est le cas, le script se termine immédiatement avec exit, ce qui signifie que rien d'autre ne sera exécuté.
                exit;
            } elseif ($currentURL !== '/') {
           // vérifie si l'URL actuelle n'est pas exactement /. Si c'est le cas, cela signifie que l'URL n'est pas correcte et une réponse d'erreur est affichée à l'utilisateur. Dans ce cas, une image et un message d'erreur sont affichés, et le script se termine avec exit.
                echo '<img class="image-oeuvre alert-warning" src="/img/baq.jpeg" alt="ID">';
                echo '<h1 id="detail-oeuvre">Bad Request</h1>';
                exit;
            } else {//Si aucune des conditions précédentes n'est satisfaite, cela signifie que l'utilisateur est sur la page d'accueil (/). Dans ce cas, une boucle foreach est utilisée pour parcourir un tableau $oeuvres.
                foreach ($oeuvres as $index => $oeuvre) {
                    $id = $index + 1; // définit la variable $id en ajoutant 1 à l'index de la boucle actuelle. Cela est utilisé pour générer des identifiants uniques pour chaque élément dans le tableau $oeuvres.
                    echo '<article class="oeuvre">
                          <a href="oeuvres.php?id=' . $id . '">
                              <img src="img/' . $oeuvre[2] . '" alt="' . $oeuvre[0] . '" >
                              <h2>' . $oeuvre[0] . '</h2>
                              <p class="description">' . $oeuvre[1] . '</p>
                          </a>
                      </article>'; // affiche le contenu HTML pour chaque élément dans le tableau $oeuvres. Cela inclut une balise <a> avec un lien vers une page oeuvres.php avec l'ID de l'oeuvre passé en paramètre, une image, un titre et une description.
                }
               
            }//marque la fin de la boucle foreach
            ?>
        </div>
    </main>
    <?php include("../footer.php"); //L'inclusion de "footer.php" est souvent utilisée pour afficher un pied de page commun à plusieurs pages d'un site web. Cela peut inclure des informations de contact, des liens supplémentaires, des copyrights, des scripts ou d'autres éléments récurrents.?>
</body>

</html>

