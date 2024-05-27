<?php
// class person{

//     public $name,$age;

//     function show(){
//         echo  "Name:".$this->name . '<br>'."Age:". $this->age;
//     }
// }
// $p1 = new person();
// $p1->name = "raheem";
// $p1->age = 20;
// $p1->show();

class person{
    public $name ;
    public $age ;
    public $sallry;
    // constructer function jo hota ha wo khud hi call ho jata ha tab jab hum class ka object bana te hain 
    function __construct($name = "No name",$age = "0",$sal = "0")
    {
        $this->name = $name;
        $this->age = $age;
        $this->sallry = $sal;
        
    }

    function show(){
        echo "<br>"."Name:".$this->name ."<br>"."Age:". $this->age. "<br>"."Sallry".$this->sallry ;
    }
}


// $p1->name = "raheem";
// $p1->age = 20;
$p1 = new person();
$p2 = new person("kashif",22,2000);

$p2->show();
$p1->show();



?>