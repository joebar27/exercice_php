<?php
function Dimanche_paques($annee)
{
    return date("d-m-Y", easter_date($annee));
}

function Vendredi_saint($annee)
{
    $dimanche_paques = Dimanche_paques($annee);
    return date("d-m-Y", strtotime("$dimanche_paques -2 day"));
}

function Lundi_paques($annee)
{
    $dimanche_paques = Dimanche_paques($annee);
    return date("d-m-Y", strtotime("$dimanche_paques +1 day"));
}

function Jeudi_ascension($annee)
{
    $dimanche_paques = Dimanche_paques($annee);
    return date("d-m-Y", strtotime("$dimanche_paques +39 day"));
}

function Lundi_pentecote($annee)
{
    $dimanche_paques = Dimanche_paques($annee);
    return date("d-m-Y", strtotime("$dimanche_paques +50 day"));
}


function Jours_feries($annee)
{
    $jours_feries = array(
        "Nouvel an" => "01-01-$annee",
        "Dimanche de paque" => Dimanche_paques($annee),
        "Lundi de paques" => Lundi_paques($annee),
        "Fête du travail" => "01-05-$annee",
        "Armistice 1945" => "08-05-$annee",
        "Jeudi de l'ascension" => Jeudi_ascension($annee),
        "Lundi de pentecote" => Lundi_pentecote($annee),
        "Fête nationale" => "14-07-$annee",
        "Assomption" => "15-08-$annee",
        "Toussaint" => "01-11-$annee",
        "Armistice 1918" => "11-11-$annee",
        "Noël" => "25-12-$annee",
    );
    return $jours_feries;
}

$annee = date('Y', time());
$holidayList = (Jours_feries($annee));
// print_r($holidayList);

print "Voici la liste des jours férié de cette année : " . PHP_EOL . PHP_EOL;

foreach($holidayList as $key=>$value){
    print $key . " : " . $value . PHP_EOL;
}
