<?php
$csvParking = 'exo_fonction_php/data/occupation-parkings-temps-reel.csv';
if (file_exists($csvParking)) {
    $datasParking = array_map('str_getcsv', file($csvParking));
} else {
    echo "Le document n'éxiste pas";
}

// proposition de la liste des noms de parking
for ($i=0; $i < (count($datasParking)-1);$i++) {
    $tabExplode = explode(';', $datasParking[$i+1][0]);
    $dataParks[] = $tabExplode;
    $nameParkList[] = $tabExplode[0];
    print($i+1) . " --> " . $nameParkList[$i] . PHP_EOL;
}

function Space_available($parkChoosen, $dataParks)
{
    $park= $dataParks[($parkChoosen-1)];
    $parkingEmpty = $park[6];
    if ($park[4] == 'Ouvert') {
        return print "Il reste : " . $parkingEmpty . " place dans le " . $park[0] . ".";
    }else{
        return print "Le " . $park[0] . " a une " . $park[4] . " et indique " . $parkingEmpty . " place libre.";
    }
}

print PHP_EOL . "Merci de choisir parmi la liste précédente, le \"numéro\" du nom de parking que vous souhaiter consulté sa disponibilité :" . PHP_EOL;
$parkChoosen = readline();
Space_available($parkChoosen, $dataParks);