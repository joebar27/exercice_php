<?php
function Winner()
{
    require 'data/tableau_datas.php';

    foreach ($tableau as $data) {
        $arrayAccount = substr($data[5], 1);
        $listAccountInt[] = (int)str_replace(',', '', $arrayAccount);
    }
    $winnerAccount = 0;
    foreach ($listAccountInt as $key =>$account) {
        if ($account > $winnerAccount) {
            $winnerId = $key;
            $winnerAccount = $account;
        }
    }
    print $tableau[$winnerId][0] . " avec un gain de : $" . $winnerAccount . " est notre winner";
}
print_r(Winner());