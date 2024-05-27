<?php
//isset method sa hum ya check kar sakte hain ke value set ha ke nahi
//agar value set hogi to ans ai ga "1";
//agar value set nahi hogi to ans ai ga "0";




//properties @ method use issset Works
class student{
    public $course;
    private $fname;
    private $lname;
    public function setNAme($first_name,$last_name){
        $this->fname = $first_name;
        $this->lname = $last_name;

    }
    public function __isset($property){
        echo isset($property);

    }
}
//Arry use isset work
$test = new student;
$test->setNAme("Raheem","ullah");
echo isset($test->fname)."<br>";
class arryData{
    private $details=["Name"=>"Test_name","AGE"=>"20"];
    public function __isset($name)
    {
        echo isset($this->details[$name]);
    }
}
$test = new arryData;
echo isset($test->Name);


?>