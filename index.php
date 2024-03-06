<h1>POO Banque</h1>

//require "Titulaire.php";
//require "Compte.php";


<?php

spl_autoload_register(function ($class_name){
    require 'classes/'. $classe_name. '.php';
});

