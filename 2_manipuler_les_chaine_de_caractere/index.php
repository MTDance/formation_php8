<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
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
        $chaine = str_replace('Ceci', 'Celà',$chaine);

        var_dump(str_contains($chaine, 'brouette'));
    ?>
</body>
</html>