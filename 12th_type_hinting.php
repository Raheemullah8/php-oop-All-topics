<?php
// Function ke under hum jo b value send kar rahe hote hain
//osko starting ma bata dete hain ke oski data type kia ho ge
//agar wo object hogi tho konse class ka object hogi 
//agar wo arry hogi tu kon sa arry hogi 



///////////////////////
function sum(int $v){
    echo $v + 1;
}
sum(11);
///////////////////////

////////////////////////
function fruites(array $name){
    foreach($name as $names){
        echo $names."<br>";
    }

}
$test = ["Apple","oringe","banana"];
fruites($test);
//////////////////////

////////////////////////
class hello{
    function sayHello(){
        echo "Hello every One";
    }
}
class bye{
    function sayBye(){
        echo "Bye every One";
    }
}
function wow(hello $c){
    $c->sayHello();
}
$test = new hello();
wow($test);
////////////////////

//////////////////////
//Advance Works
class school{
    public function getName(students $name){
    foreach( $name->NAMES() as $stuName){
         echo $stuName."<br>";
    }


    }
}
class students{
    public function NAMES(){
    return ["Raheem","Kashif","Ali"];
}
}
$stu = new students();
$sch = new school();
$sch->getName($stu);





?>