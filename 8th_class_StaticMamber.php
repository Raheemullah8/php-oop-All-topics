<?php
// jab b hum staticMamber ko class k under use kar te hian to waha likte hain "SELF"
// jab inharite kar k use kar te hain tu hum parint likte hain
// static class banane ke liya hum kise b mathod ya properties ke acsess modifire k bad "STATIC" likte hian 
// static class k liya hame koi object banane ki zarorat nahi parti
class baseclass{
public static $name = "Raheem";
public static function show(){
   echo self::$name;

}
// public function __construct($n)
// {
//     self::$name = $n."<br>";
    
// }
 }
 class derived extends baseclass{
    public static function show(){
        echo parent::$name;
    }
 }
// echo baseclass::$name;
// baseclass::show();
// $test = new baseclass("kashif"); 
// $test = new baseclass("kashif"); 
// $test = new baseclass("kashif"); 
// $test->show();
// $test->show();
// $test->show();
$test = new derived();
$test->show();
?>