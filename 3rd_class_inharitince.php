<?php
// inharite sa hum first class ka data 2class ma show kar wa sakte hain

class employee{
    public $name,$salery,$age;
    function __construct($n,$s,$a)
    {
        $this->name = $n;
        $this->salery = $s;
        $this->age = $a;
    }
    function info(){
        echo "<h3>Employee Profile</h3>";
        echo "Employee_name:".$this->name."<br>";
        echo "Employee_Salery:".$this->salery."<br>";
        echo "Employee_Age:".$this->age."<br>";
    }
}
class manager extends employee {
public $ta = 1000;
public $phone = 300;
public $tootalSalery;

  function info(){
    $this->tootalSalery = $this->salery + $this->ta + $this->phone;
    echo "<h3> manager Profile</h3>";
    echo"Manager_name".$this->name."<br>";
    echo"Manager_salery".$this->tootalSalery."<br>";
    echo"Manager_age".$this->age."<br>";

}


}



$e1 = new employee("kashif",200,20);
$e1->info();
$e2 = new manager("raheem",200,20);
$e2->info();

?>