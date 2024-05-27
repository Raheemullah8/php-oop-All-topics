<?php
//wake up method ma hum serialize  method ko unserialize kar ke arry ki form sa data
//object ki form ma convert kar laite hain 
class student{
    public $course="PHP";
    private $first_name;
    private $last_name;
    public function studata($fname,$laname){
        $this->first_name = $fname;
        $this->last_name = $laname;
        

    }
    public function __sleep(){
        return array("first_name","last_name");
    }
    public function __wakeup(){
        echo "this is wakeup method:"."<br>";
}
}
$test = new student();
$test->studata("Raheem","Ullah");
$ser = serialize($test);
// echo $ser;
$us=unserialize($ser);
print_r($us);

?>