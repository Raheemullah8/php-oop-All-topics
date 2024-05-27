<?php
//jab hum 1 traits  banatehain 
// our  class a define kar te hian
//our class "a" extands kar dete hain class "b" ma 
// and hum sab ma common method bana late hain tu
// jab hum function ka object banai ge to [1st class "B" ]ka mathod call hoga
//[2nd"TRAITS" class] ka method call ho ga
// [3rd class "A" ka method call ho ga];  
trait hello{
    private function sayhello(){
        echo "Hello Every One\n";
    }
}
// trait by{
//     public function sayhello(){
//         echo "by Every One\n";
//     }
// }
class baseclass{
    use hello{
        hello::sayhello as public newsay;
       
    //    by::sayhello as newhello;
    }
    // public function sayhello(){
    //     echo "bye Every One\n";
    // }
}
// class chaild extends baseclass{
//     // use hello;
//     // public function sayhello(){
//     //     echo "Come Every One\n";
//     // }
// }
$test = new baseclass();
$test->newsay();
// $test->newhello();
?>