<?php

// Yeh PHP class abc hai, jisme ek private property $name hai. Is class mein __get magic method ka istemal kiya gaya hai. 
//Jab koi code $test->name; se try karega toh __get method trigger hoga aur ek error message display hoga jo ke yeh keh raha hai ke aap ek none existent property ko access kar rahe hain.

// class abc{
// private $name = "name";
// function __get($propertie)
// {
//     echo "You Are Trying To none Exist Proparties($propertie)";
    
// }
// }
// $test = new abc();
// $test->name;

///////////////////////////////////////
class abc{
    private $data = ["name" => "Raheem", "Course" => "Php", "fee" => "2000"];
    
    public function __get($key)
    {
        if(array_key_exists($key, $this->data)){
            return $this->data[$key];
        } else {
            return "This key ($key) is not defined";
        }
    }
}

$test = new abc();
echo $test->name; //  Yeh __get method ko trigger karega aur error message display hoga

?>