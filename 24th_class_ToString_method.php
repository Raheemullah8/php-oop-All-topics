<?php

//Yeh PHP class abc hai, jisme ek __toString magic method hai. 
//Jab aap is class ka object ko directly echo ya print statement ke andar use karte hain, 
//toh yeh __toString method automatically call hota hai. 
//Is method mein class ka ek string representation return hota hai.

class abc{
public function __toString(){
 
    return "cant be object as a string of class:". get_class( $this );

}
}
$test = new abc();
echo $test;

?>