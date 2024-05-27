<?php
//InterFace ka koi object nahi hota ||
//InterFace k andar hum koi be proparties define nahi kar te
//interface k ander jo be function banai ge ose srif declair karen ge implement nahi karen ge
//implement hum derived class ma karen ge | inter face k case ma hum ".IMPLEMENT." ka use kar te hain 
//"extands ka use nahi kar te"
//interface k under hum multipal interface call kar te hian
interface parent1{
   function cal($a,$b);
}
interface parent2{
    function sub($c,$d);
 }
 class chaild implements parent1,parent2{
       public function cal($a,$b){
        echo $a + $b."<br>";
       }
       public function sub($c,$d){
        echo $c - $d;
       }
 }
 $test = new chaild();
 $test->cal(12,15);
 
 $test->sub(23,3);
?>