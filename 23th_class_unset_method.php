<?php

//Yeh PHP class student hai, jismein public property $course aur private properties $fname aur $lname hain.
// Is class mein setname method hai jo $fname aur $lname ko set karne ke liye istemal hota hai. 
//Iske alawa, class mein __unset magic method bhi hai,
// jo $property ko unset karne ke liye istemal hota hai.

class student{
public $course = "PHP";
private $fname ;
private $lname;
public function setname($first_name,$last_name){
    $this->fname = $first_name;
    $this->lname = $last_name;

}
public function __unset($property){
    unset($this->$property);

}

}
$test = new student();
$test->setNAme("raheem","ullah");
unset($test->course);
print_r($test);
// unset($test->course);
//  print_r($test);


?>