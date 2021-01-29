<?php

/*
PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano 
delle partite di basket di un’ipotetica tappa del calendario. 
Ogni array della partita avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60
*/

$matches = [
    [
        "squadraDiCasa" => "NEW ORLEANS PELICANS",
        "squadraOspite" => "UTAH JAZZ",
        "puntiSDC" => rand(1, 100),
        "puntiO" => rand(1, 100),
    ],
    [
        "squadraDiCasa" => "ATLANTA HAWKS",
        "squadraOspite" => "BOSTON CELTICS",
        "puntiSDC" => rand(1, 100),
        "puntiO" => rand(1, 100),
    ],
    [
        "squadraDiCasa" => "CHICAGO BULLS",
        "squadraOspite" => "CHARLOTTE HORNETS",
        "puntiSDC" => rand(1, 100),
        "puntiO" => rand(1, 100),
    ],
    [
        "squadraDiCasa" => "NEW YORK KNICKS",
        "squadraOspite" => "TORONTO RAPTORS",
        "puntiSDC" => rand(1, 100),
        "puntiO" => rand(1, 100),
    ],
    [
        "squadraDiCasa" => "PHILADELPHIA 76ERS",
        "squadraOspite" => "DENVER NUGGETS",
        "puntiSDC" => rand(1, 100),
        "puntiO" => rand(1, 100),
    ],

];


/* 
PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack PHP</title>
        <style>
            body{
                background-color: rgb(55, 55, 55);
            }
        </style>
    </head>
    <body>

        
        <?php
        
            $i = 0;
            while($i < count($matches)){
                echo "<h1>" .  $matches[$i]["squadraDiCasa"] . " - " . $matches[$i]["squadraOspite"] . " | " . $matches[$i]["puntiSDC"] . " - " . $matches[$i]["puntiO"] . "</h1>";
                $i++;
            }

            if (strlen($name) > 2 && strpos($mail, "@") !== false && strpos($mail, ".") !== false && is_numeric($age)) {
                echo "<h1>Accesso riuscito</h1>";
            } else {
                echo "<h1>Accesso negato</h1>";
            }

        ?>
        
        
    </body>
</html>