<?php
//method chanining sa hum 1 class ma agar 3 function define kare
// to 3 function ko alg alg object  define nahi karna par ta 
//  1 he object ma work hojata ha
class abc{
    public function first(){
        echo "Function 1 \n";
        return $this;
    }
    
    public function Second(){
        echo "Function 2 \n";
        return $this;
    }
    public function third(){
        echo "Function 2 \n";
        return $this;
    }
}
$test = new abc();
$test->first()->Second()->third();

?>