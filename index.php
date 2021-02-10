<?php

## PHP - Les dates
## Pour tous les exercices, vous pouvez utiliser le site http://php.net
## N'hesitez pas à faire des pages avec du HTML/CSS

## Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)
echo "ex 1 <br>";
echo date("d/m/Y");

echo "<br><br>ex 2 <br>";
## Exercice 2 Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)
echo date("d-m-y");

## Exercice 3 Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
echo "<br><br>ex 3 <br>";
echo date("l j F Y")."<br>";

## Bonus : Le faire en français.
setlocale(LC_ALL, 'fr','fra', 'fr_FR');

echo strftime("%A %d %B %Y");

## Exercice 4 Afficher le timestamp du jour.
echo "<br><br>ex 4 <br>";
## Afficher le timestamp du mardi 2 août 2016 à 15h00.
echo "timestamp du 2 aout 2016 à 15h00 : ".mktime(15, 0, 0, 8,2,2016);

##Exercice 5 Afficher le nombre de jours qui séparent la date du jour avec le 16 mai 2016.
echo "<br><br>ex 5 <br>";
$dateDay = new DateTime('2021-01-28');
$nextDate = new DateTime('2016-05-16');

$interval = $nextDate->diff($dateDay);
echo $interval->days." jours";

##Exercice 6 Afficher le nombre de jours dans le mois de février de l'année 2016.
echo "<br><br>ex 6 <br>";
echo "nombre de jours de février 2016 : ".cal_days_in_month(CAL_GREGORIAN, 2, 2016);

##Exercice 7 Afficher la date du jour + 20 jours.
echo "<br><br>ex 7 <br>";
$dateTime = new dateTime('2021-02-02');
$dateTime->modify('+20 day');
echo $dateTime->format('d-m-Y');

##Exercice 8 Afficher la date du jour - 22 jours
echo "<br><br>ex 8 <br>";
$dateTime = new dateTime('2021-02-02');
$dateTime->modify('-22 day');
echo $dateTime->format('d-m-Y');
echo "<br><br>";


## TP Faire un formulaire avec deux listes déroulantes.
echo "<br><br>TP <br>";
## La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo-153-PHP</title>
</head>
<body>
    <form method="post" action="index.php">
        <div>
            <label for="date">mois</label>
            <input type="date" id="date">
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>
        
    </form>
</body>
</html>

<?php
# MEGA BONUS ( surligné et caractère gras :-)  ) : En fonction des choix, afficher un calendrier ( voir libs JS ou autres )
