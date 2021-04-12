<?php

use DAO\IngredientDAO;
require_once 'autoload.php';

$ingredientDAO= new IngredientDAO();
$ingredients= $ingredientDAO->getAll();

var_dump($ingredients);


