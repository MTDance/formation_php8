<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bases</title>
</head>

<body>
    <?php
    /* On écrit Hello World */
    echo "<h1>Hello World!!!</h1>";

    $nomPersonne = "Minh-Tuan";

    // L'injection de variable fonctionne UNIQUEMENT avec les "", pas avec les ''
    echo "<p>Bonjour $nomPersonne, comment ça va?</p>";

    // Les types de variables
    // Entiers (integer)
    $nombre = 85;

    // Décimaux (float)
    $nombre2 = 85.2;

    // chaine de caractères (string)
    $chaine = "ceci est un texte";

    // Booléen (boolean)
    $booleen = true; // false

    // Connaitre le contenu et le type d'un variable
    var_dump($booleen);
    ?>
</body>

</html>