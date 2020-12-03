<?php
class tester {
    private $objects;
    private $description;
    public function __construct(number ...$objects)
    {
        $this->objects = $objects;
    }
    public function executeTests($number){
        $description = [];
        $description['number'] = $number;
        foreach ($this->objects as $object){
            $description['self'] = $number;
            if($object->isDivisible($number)){
                array_shift($description);
                $description[get_class($object)] = $object->getDescription();
            }

        }
        unset($description['self']);
        return $description;
    }
}