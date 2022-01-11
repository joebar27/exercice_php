<?php
$csvVille = 'exo_fonction_php/data/villes_france.csv';

if (file_exists($csvVille)){
    $datasVille = array_map('str_getcsv', file($csvVille));
}else{
    echo "Le document n'éxiste pas";
}
// print_r($datasVille);
print "Entrer le numéro de département que vous voulez connaitre :" . PHP_EOL;
$deptNb = readline();
// $tabVille = array();
foreach($datasVille as $data){
    if($deptNb == $data[1]){
            // print $data[3] . " dont le code postal est : ". $data[8] . PHP_EOL;
            $tabVille[] = $data[3];
        }
    }
    print_r($tabVille);
?>