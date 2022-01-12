<?php

function Dept($deptNb)
{
    $document = 'exo_fonction_php/data/departement.csv';

    if (file_exists($document)) {
        $datas = array_map('str_getcsv', file($document));
    } else {
        echo "Le document n'éxiste pas";
    }
    foreach($datas as $data){
        if($deptNb == $data[1]){
            print $data[3];
        }
    }
}
print "Entrer le numéro de département que vous voulez connaitre :" . PHP_EOL;
$deptNb = readline();
Dept($deptNb);

?>
