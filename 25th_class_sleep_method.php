<?php
//[1] __sleep method class ke ek magic method hai, 
//jo object ko serialize karte waqt specific properties ko select karne mein madad karta hai.

//[2] student class mein __sleep method mein,
// "course" aur "First_name" properties ko serialize karne ke liye specify kiya gaya hai.

//[3] studata method ke zariye object ki properties ko set kiya gaya hai.

//[4] serialize function se object ko serialize kiya gaya hai, 
//aur phir serialized data ko echo statement se display kiya gaya hai.
class student{
    public $course="PHP";
    private $First_name;
    private $Last_name;
    public function studata($f_name,$_name){
        $this->First_name = $f_name;
        $this->Last_name = $f_name;
    }
    public function __sleep(){
        return array("course","First_name");
    }
    
}
$test = new student();
$test->studata("raheem","Ullah");
$srl = serialize($test);
echo $srl;


?>