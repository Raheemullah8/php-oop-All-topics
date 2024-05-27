<?php
// ya 1 class ha
class calculation{

    // public jo ha assess modifire ha  and jo variable ha ya properties ha
    public $a,$b,$c;

    // es ko hum class k function kahte hain kahte hain
    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;

    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }

}
// ya class ka object ha 
$c1 = new calculation();
$c1->a = 20;
$c1->b = 30;

$c2 = new calculation();
$c2-> a = 20;
$c2->b = 30;

echo "sum value of C1 :".$c1->sum()."\n";echo"<br>"; 
echo "sub value of C2 :".$c2->sub()."\n";echo"<br>";


// class calculater
// {
//     public $cc,$ab,$bc;
    
//     function sum(){
//     $this->cc = $this->ab + $this->bc;
//     return $this->cc;

//     }
//     function mul(){
//         $this->cc = $this->ab * $this->bc;
//         return $this->cc;
//     }

// }
// $c3 = new calculater();
// $c3->ab = 10;
// $c3->bc = 20;
// $c4 = new calculater();
// $c4->ab = 10;
// $c4->bc = 5;

// echo"sum value of 3 :".$c3->sum()."\n"; echo"<br>";
// echo "mul value of 4 :".$c4->mul()."\n";




?>