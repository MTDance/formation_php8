<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Manipuler les chaine de caractère</title>
</head>

<body>
    <?php
    $chaine = "Ceci est une chaîne de caractères";

    // Afficher 1 caractère de la chaine
    // echo $chaine[5];

    // Modifier un caractère de la chaine
    // $chaine [0]= "F";

    // Extraire une partie de la chaine
    // var_dump(substr($chaine, -11)) ;

    // Remplacer une partie de la chaîne
    $chaine = str_ireplace('Ceci', 'Celà', $chaine);

    var_dump(strpos($chaine, 'Le'));
    ?>

</body>

</html>