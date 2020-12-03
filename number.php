<?php
abstract class number{
    private $value;
    private $description;
    protected function setValue($value){
        $this->value = $value;
    }
    protected function setDescription($description){
        $this->description = $description;
    }
    public function isDivisible($number){
        return !($number % $this->value);
    }
    public function getDescription(){
        return $this->description;
    }
}
