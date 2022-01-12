<?php
function Winner()
{
    require 'data/tableau_datas.php';

    foreach ($tableau as $data) {
        $arraySolde = substr($data[5], 1);
        $listSoldeInt[] = (int)str_replace(',', '', $arraySolde);
        // Pour remplacer les deux ligne du dessus :
        // $listSoldeInt[] = (int)str_replace('$', '', str_replace(',', '', $data[5]));

    }
    $winnerSolde = 0;
    foreach ($listSoldeInt as $key =>$solde) {
        if ($solde > $winnerSolde) {
            $winnerId = $key;
            $winnerSolde = $solde;
        }
    }
    print $tableau[$winnerId][0] . " avec un gain de : $" . $winnerSolde . " est notre winner";
}
print_r(Winner());