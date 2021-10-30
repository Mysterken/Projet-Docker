<?php

require "./common.php";
include_once 'Entity/Guerrier.php';
include_once 'Entity/Magicien.php';

$_POST = json_decode(file_get_contents('php://input'), true);

if ($_POST['classe'] == 0) {
    $player = new Guerrier($_POST['name']);
} else {
    $player = new Magicien($_POST['name']);
}
$_db->query("INSERT INTO `user` (`U_ID`, `U_NAME`, `U_CLASS`, `U_HP`, `U_ATTACK`, `U_DEFENSE`) VALUES 
                                 (NULL, '".$player->getName()."', ".$_POST['classe'].", ".$player->getHp().", ".$player->getAttack().", ".$player->getDefense().");" );
?>
