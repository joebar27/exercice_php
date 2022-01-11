<?php

function Secu_verif($nbSecu){
    $regex = '/^[123478][0-9]{2}[0-1][0-9](2[AB]|[0-9]{2}|[9][78][1-9])[0-9]{3}[0-9]{3}$/x';
    
    if (preg_match($regex, $nbSecu)) {
        print "La longeur du numero de sécurité social est correct";
    }
    else{
        print "La longeur du numero de sécurité social n'est pas correct";
    }
    return;
}

// $nbSecu = 1870678029052;
print "Veuillez entrer votre numero de sécurité social".PHP_EOL;
$nbSecu = readline();
print Secu_verif($nbSecu);
?>