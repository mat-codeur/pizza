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
    public function getisAllergen(){
        return $this->isAllergen;
    }
    public function setisAllergen($isAllergen){
        $this->isAllergen = $isAllergen;
    }
}