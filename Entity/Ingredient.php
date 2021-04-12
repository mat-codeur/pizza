<?php
namespace Entity;
class Ingredient{
    /***
     * @var string
     */
    private $name;
    /***
     * @var boolean
     */
    private $isAllergen;

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getIsAllergen(){
        return $this->isAllergen;
    }
    public function setIsAllergen($isAllergen){
        $this->isAllergen = $isAllergen;
    }
}