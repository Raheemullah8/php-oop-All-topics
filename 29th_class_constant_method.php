<!-- LIST OF MAGIC CONSTANTS
8 type of magic constants 
1)LINE  2)FILE  3)DIR  4)FUNCTION 
5)CLASS 6)METHOD 7)NAMESPACE 8)TRAIT -->
<?php

echo"Line number: ". __LINE__."<br>";
/////////////////////////////////////

echo "The full path of this file :". __FILE__."<br>";
/////////////////////////////////////////////////////

echo "The full path of this Directory :". __DIR__."<br>";
/////////////////////////////////////////////////////////
 function myfunction(){
    echo"The function Name is :". __FUNCTION__ ."<br>";
}
myfunction();
///////////////////////////////////////////
//////////////////////////////////////////

class Myclass{
    public function getClass(){
        //class constant  basicaly class ka name return kar deta hain 
        return __CLASS__;
    }
}
$obj = new Myclass();
echo $obj->getClass()."<br>";
/////////////////////////////////////////////
/////////////////////////////////////////////

class Myclass2{
    public function getmethod(){
        //method constant  basicaly method  ka name return kar deta hain 
        return __METHOD__;
    }
}
$obj = new Myclass2();
echo $obj->getmethod()."<br>";
//////////////////////////
/////////////////////////
// namespace MyNamespace;
// class Myclass3{
//     public function getnamespace(){
//         //method constant  basicaly method  ka name return kar deta hain 
//         return __NAMESPACE__;
//     }
// }
// $obj = new Myclass3();
// echo $obj->getnamespace();
trait mytrait{
    public function gettrait(){
        return __TRAIT__;
    }
   
}
class Myclas{
    use mytrait;
}
$obj = new Myclas;
echo $obj->gettrait();


?>