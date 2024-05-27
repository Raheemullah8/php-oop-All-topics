<?php
//traits hum tab use kar te hain jab hum 1 "traits" ka data   
//bohot sari class ma  show karwate hain
// "FOREXAMPLE" Class="A" , Class="B" , Class="C" || Ma hum 1 hi traits ka data show karate hain 
//hum multipul traits ko 1 class ma b use kar sakte hain
// hum traits ma multipul function b define kar sakte hain
trait hello{
    public function sayhello(){
        echo "Hello Every One:"."<br>";
    }
    public function sayhi(){
        echo "Say Hi:"."<br>";
    }
}
trait bye{
    public function sayBye(){
        echo "Bye Every One:"."<br>";
    }
}


class baseclass{
    use hello,bye;

}
$test = new baseclass();
$test->sayhello();
$test->sayBye();
$test->sayhi();

// class baseclass2{
//     use hello;
// }

// $test = new baseclass2();
// $test->sayhello();

?>