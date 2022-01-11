<?php
function DayOfDate($date_choose)
{
    $time = strtotime($date_choose);
    $jours = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
    $numJour = date('w', $time);
    $jour = $jours[$numJour];
    print $jour;
}
print 'Veuillez entrer une date  au format "01-12-1900", pour vérifier qu\'elle jour s\'était ou sera.' . PHP_EOL;
$date_choose = readline();
print DayOfDate($date_choose);
?>