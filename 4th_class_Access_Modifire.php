<?php
// public jo hota ha os accsess modifire ko hum class k bahir b use kar sakte hain 
// object and dervid/inharite k saat b work kar ta ha     
class base{
public $name;
function __construct($n)
{
    $this->name = $n;
    
}
function info(){
    echo"Name :".$this->name.'<br>';
}
}
 $e = new base("raheem");
$e->name = "raheemullah";
$e->info();

// protected jo hota ha ose hum direct object ma call nahi kar sakte  
// lakin os k liya hame derived/inharite  class ka use kar na par ta hai
class base2{
    protected $name;
    public function __construct($n){
        $this->name = $n;
    }
    protected function show(){

        echo "Your-Name:".$this->name."<br>";
    }
}
class derived extends base2{
    public function get(){
        echo "Your_Name:".$this->name."<br>";
    }
}
$ob = new derived("Kashif");
$ob->get();
// private ko  hum na he derived/inharite ma use kar sakte hain our na he oska object bana k use kar sakte hain 
class p{
    private $name;
    function __construct($n){
        $this->name = $n;
    }
   public function get_p(){
        echo "Your-Name:".$this->name."<br>";
    }
    
}
// class p2 extends p{
//     public priData(){
//         echo "Your-Name:".$this->name."<br>";
//     }
// }
$priv = new p("Owais");
//  $priv->$name = "raheem";
$priv->get_p();


?>