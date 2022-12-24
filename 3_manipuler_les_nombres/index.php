<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nombre1 = 14;
    $nombre2 = 85;

    //Addiion
    $resultat = $nombre1 + $nombre2;

    //soustraction
    $resultat = $nombre1 - $nombre2;

    //multiplication
    $resultat = $nombre1 * $nombre2;

    //division
    $resultat = $nombre1 / $nombre2;

    // calcul "complexe"
    $resultat = $nombre1 + $nombre2 / 5;

    // Modulo
    $resultat = $nombre2 % $nombre1;

    // 9 est-il multiple de 3?
    var_dump(9 % 3);

    var_dump($resultat);

    // Incrémenter (ajouter1)
    $nombre1 += 1;
    var_dump(++$nombre1);

    // Décrémenter
    $nombre1 -= 1;
    var_dump($nombre1--);

    ?>
</body>

</html>