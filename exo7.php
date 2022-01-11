<?php

$csvParking = 'exo_fonction_php/data/occupation-parkings-temps-reel.csv';

if (file_exists($csvParking)){
    $datasParking = array_map('str_getcsv', file($csvParking));
}else{
    echo "Le document n'éxiste pas";
}

for ($i=0; $i < (count($datasParking)-1);$i++){
    $tabExplode = explode(';', $datasParking[$i+1][0]);
    $dataParks[] = $tabExplode;
    $nameParkList[] = $tabExplode[0];
    print $nameParkList[$i] . " ce parking est : " . $dataParks[$i][4] . PHP_EOL;
}
// print_r($dataParks);
// print "Merci de choisir le nom du parking que vous souhaiter connaitre sa disponibilité parmi la liste suivante :" . PHP_EOL;
// print_r($nameParkList);
?>