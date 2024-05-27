<?php
//jab hum same name ki proparties derived class ma bana laite hian ose hum overriding kahte hain

class baseclass{
    public $name = "parent class";
 //jab hum same name ka Method derived class ma bana laite hian ose hum overriding kahte hain
 public function cal($a,$b){
    return $a * $b;

 }

}

class dervide extends baseclass{
 public $name = "chaild class"."<br>";
 public function cal($a, $b)
 {
    return $a + $b;
 }
}


$test = new dervide();
echo $test->name;
echo $test->cal(10,5);

?>