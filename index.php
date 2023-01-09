<?php
require_once ('librairies/tools.php');
require_once ('pdo.php');

$request = $pdo->query("SELECT * FROM jeux");
$jeux = $request->fetchAll();

render("home", [
    "jeux"=>$jeux,
    "pageTitle"=>"accueil du Site"
]);
?>
