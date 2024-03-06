<h1>POO Banque</h1>



<?php

spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name. '.php';
});


$t1 = new Titulaire("MATHIEU", "Quentin", "1981-05-13", "Strasbourg, Livret A");
$c1 = new Compte("Livret A", 1500, "euros", $t1);
$c2 = new Compte("Livret B", 15, "euros", $t1);

echo $t1->getInfos();
echo $t1->afficherComptesbancaires();

//echo $c1->getInfos();

