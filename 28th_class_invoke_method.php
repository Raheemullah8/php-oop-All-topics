<?php
//jab be hum kise object ko function bana kar call karne  
// ki koshish karen ge tho invoke method apne aap call hojai ga
 class cal{
    public $a,$b;
    public function __construct($a,$b){ 
        $this->a=$a; 
        $this->b=$b;       
    }
    // public function sum(){
    //     echo $this->a + $this->b;   
    // }
    public function  __invoke(){
        echo $this->a + $this->b;
 }
}
 $obj = new cal(15,15);
//  $obj->sum();
 $obj();


?>