<?php
// class abcd{
// private $name; 
// public  function __set($property,$value)
// {
//     echo "this is non existis or property  :$property ";
    
// }

// }
// $test = new abcd();
// $test->name = "Raheem";





// Ye PHP class abcd hai, jisme ek private property $name aur ek public method hello hai. 
//Is class mein __set magic method ka istemal kiya gaya hai. Jab koi code $test->name = "Raheem"; 
//se try karta hai toh __set method trigger hota hai.
// Agar property exist karti hai toh uski value set hoti hai,
// warna ek message show hota hai ke property exist nahi karti.
class abcd{
    private $name ;
    public function hello(){
        echo $this->name;
    }
    public function __set($property, $value)
    {
       if(property_exists($this,$property)){
        $this->$property = $value;
       }else{
        "Property Does Not Exist : $property";
       }
        
    }
}
$test = new abcd();
$test->name="Raheem";
$test->hello();// Yeh "Raheem" ko print karega


?>