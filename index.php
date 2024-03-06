<h1>POO Banque</h1>



<?php

spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name. '.php';
});


$t1 = new Titulaire("MATHIEU<br>", "Quentin<br>", "1981-05-13", "Strasbourg, <br>Livret A");
$c1 = new Compte("Livret A<br>", 1500, "euros<br>", $t1,);

 echo $t1->getInfos();

 echo $t1->afficherComptesbancaires();

 echo $c1->getInfos();

