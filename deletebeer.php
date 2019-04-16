<?php
require 'db.php';

$sql = "DELETE FROM `biere` WHERE `id`=1";
$nb = $pdo->exec($sql);
echo $nb;
//vider table /!\
//DELETE FROM `biere`
//supprime ligne 1
//DELETE FROM `biere` WHERE `id`=1
