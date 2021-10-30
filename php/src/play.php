<?php
require "./common.php";
include_once 'Entity/Guerrier.php';
include_once 'Entity/Magicien.php';

    foreach ($_db->query('SELECT * FROM user') as $user) {
        if ($user['U_CLASS'] == 0) {
            $player = new Guerrier($user['U_NAME']);
        } else {
            $player = new Magicien($user['U_NAME']);
        }
        $player->setHp($user['U_HP']);
        $player->setAttack($user['U_ATTACK']);
        $player->setDefense($user['U_DEFENSE']);
        echo '
       <div style="background-color: cyan; margin-bottom: 10px">
            <h2>'.$player->getName().'</h2>
            <h4>'.$player->getHp().'</h4>
            <h5>'.$player->getAttack().' ATK</h5>
            <h5>'.$player->getDefense().' DEF</h5>
        </div>
        ';
    }
?>