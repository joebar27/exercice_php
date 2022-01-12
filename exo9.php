<?php
function NbWorkers($ville)
{
    require 'data/tableau_datas.php';
    $i = 0;
    foreach ($tableau as $data) {
        if (in_array($ville, $data)) {
            $i += 1;
        }
    }
    print "il y a " . $i . " travailleur(s)";
}

print "Veillez entrer une ville pour connaitre le nombre de travailleur : " . PHP_EOL;
$ville = readline();
print_r(NbWorkers($ville));
