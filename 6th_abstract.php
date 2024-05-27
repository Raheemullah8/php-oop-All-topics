<?php
// abstract class ka object nahi banta 
// abstract class ko hum derived class/inharetince ka use kar k use kar sakte hain
// abstract class k undar 1 abstrac object banana must ha

abstract class parentClass{
    public $name = "raheem";
    abstract protected function cal($a,$b);
}
class chaildClass extends parentClass{
    public function cal($c,$d){
        echo $c+$d;
    }
}
$test = new chaildClass();

$test->cal(10,15);
?>