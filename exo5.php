<?php
$docDept = 'exo_fonction_php/data/departement.csv';
$docVille = 'exo_fonction_php/data/villes_france.csv';

if (file_exists($docDept)){
    $datasDept = array_map('str_getcsv', file($docDept));
    $datesVille = array_map('str_getcsv', file($docVille));
}else{
    echo "Le document n'éxiste pas";
}

print "Entrer le numéro de département que vous voulez connaitre :" . PHP_EOL;
$deptNb = readline();

foreach($datasDept as $data){
    if($deptNb== $data[1]){
        print $data[3];
    }
}


?>