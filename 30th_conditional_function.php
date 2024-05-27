<?php
class myclass{

}
if(class_exists("myclass")){
    echo "Myclass is exist:"."<br>";
}
else{
    echo "my class is not exist";
}
///////////////////////////////////////
//////////////////////////////////////
interface myenterface{

}
if(interface_exists("myenterface")){
    echo "enterface is exist"."<br>";
}else{
    echo "enter face are not exist"."<br>";
}
//////////////////////////////////
/////////////////////////////////

class myMethoClass{
    public function myMethod(){

    }
}
$obj = new myMethoClass();
if(method_exists($obj,"myMethod")){
    echo "this is exist method"."<br>";
}
else{
    echo "this is not exist method"."<br>";
}
////////////////////////////////////
///////////////////////////////////

trait mytrait{
    public function mytrait(){

    }
}
if(trait_exists("mytrait")){
    echo "this is exist trait:"."<br>";
}
else{
    echo "This is not exist trait:";
}
///////////////////////////////////
//////////////////////////////////

class propertyClass{
    public $test;
}
if(property_exists("propertyClass","test")){
    echo "this  is property exist"."<br>";
}else{
    echo "this property is not exist"."<br>";
}
//////////////////////////////////////////////////
/////////////////////////////////////////////////
 class myobjclass{

 }
 $obj1 = new myobjclass();
if(is_a($obj1,"myobjclass")){
    echo "this object of is class"."<br>";
}else{
    echo "this object of is not class "."<br>";
}
///////////////////////////////////////////////
///////////////////////////////////////////////

class parentClass{

}
class childClass extends parentClass{   

}
$obj3  = new childClass();
if(is_subclass_of($obj3,"parentClass")){
    echo "this \$obj is a object of subclass of parentClass "."<br>";
}
else{
    echo "this \$obj is not object of subclass of parentClass "."<br>";
}
?>