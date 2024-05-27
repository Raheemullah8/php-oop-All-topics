<?php
//Yeh PHP class student hai, jismein do private properties $Fname aur $LastName hain,
// aur ek private method setData hai. setData method, 
//$Fname aur $LastName ko set karne ke liye istemal hota hai.
//Is class mein __call magic method ka istemal kiya gaya hai. 
//Jab koi method call hoti hai jo class mein exist nahi karti, toh __call method trigger hota hai.
// Ismein check kiya jata hai ke agar woh method private ya non-existent hai toh ek error message display hota hai,
//warna call_user_func_array function ke zariye woh method call kiya jata hai.





// class student{
//     private $FirstName;
//     private $LastName;

//     private function setName($FN,$LN){
//         $this->FirstName = $FN;
//         $this->LastName = $LN;

//     }
//     public function __call($method, $arguments)
//     {
//         echo "This is private or non exist Method:$method";
        
        
//     }

// }
// $test = new student();
// $test->setName(); 
class student{
    private $Fname;
    private $LastName;
    private function setData($fn,$ln){
        $this->Fname = $fn;
        $this->LastName = $ln;    
    }
    public function __call($method, $arguments)
    {
     if(method_exists($this, $method)){
        call_user_func_array([$this, $method], $arguments);
     }else{
        echo "This is private or non Exist Methos:$method";
     }
    }
}
$test = new student();
$test->setData("Raheem","Ullah");
echo '<pre>';
print_r($test);
echo '</pre>';

?>