<?php

function Date_Verif($date_choose)
{
    $date = strtotime($date_choose);
    $jour = date('d', $date);
    $mois = date('m', $date);
    
    // dates fériées fixes
    if (($jour == 1 && $mois == 1)          // 1er janvier
        || ($jour == 1 && $mois == 5)       // 1er mai
        || ($jour == 8 && $mois == 5)       // 8 mai
        || ($jour == 14 && $mois == 7)      // 14 juillet
        || ($jour == 15 && $mois == 8)      // 15 aout
        || ($jour == 1 && $mois == 11)      // 1 novembre
        || ($jour == 11 && $mois == 11)     // 11 novembre
        || ($jour == 25 && $mois == 12)) {  // 25 décembre
        print "cette date est ferié";
    } else {
        print "cette date n'est pas férié";
    }
    
    return ;
}

print 'Veuillez entrer un date pour vérifier si elle est férié, au format "01-12-1900"' . PHP_EOL;
$date_choose = readline();

print Date_Verif($date_choose);
