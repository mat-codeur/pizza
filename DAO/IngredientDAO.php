<?php

namespace DAO;
use PDO;
use Entity\Ingredient;

class IngredientDAO
{
    //CRUD-create-read-update-delete


    // creation ingredient en bdd

    public function create(Ingredient $ingredient)
    {


    }

    // recuperer tous les ingredients en bdd

    public function getAll()

    {

        try{
        $pdo = new PDO("mysql:dbname=POO;host=127.0.0.1", "root", "");

    }
catch (\Exception $e)
{
    var_dump($e);
    die();

}

$sql= "SELECT * FROM ingredient";
        $stmt= $pdo->prepare($sql);
        $stmt->execute();
        $result=[];
        foreach ($stmt->fetchAll() as $dbResult) {

            $result[] = $this->dataTransform($dbResult);
        }
            return $result;

        }

private function dataTransform(array $dbResult){
        $ingredient= new Ingredient();
        $ingredient->setName($dbResult['name']);
        $ingredient->setIsAllergen($dbResult['isAllergen']);
        return $ingredient;


}


// recupere un ingredient par id

public
function getById(int $id)

{

    try{
        $pdo = new PDO("mysql:dbname=POO;host=127.0.0.1", "root", "");

    }
    catch (\Exception $e)
    {
        var_dump($e);
        die();

    }

    $sql = "SELECT * FROM ingredient WHERE id=?",
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    $result= [];
    foreach ($stmt->fetchAll() as $dbResult){

        $result[] = $this->dataTransform($dbResult);
    }
    return $result[0];



}


}