<?php
// destruct method ka object nahi banta our wo sab sa last ma work kar ta ha 
//hum 1 class banate hain os class ma 3 function define kar te hain 
// our class ka object bana te hain to destruct method ki value sab sa last ma print ho ge
class abc{
    // private $conn;
    public function __Construct(){
         echo "Hello Every One"."<br>";
        // $this->conn = mysqli_connect();
    }
    public function insert(){
        echo"class Data"."<br>";
    }
    public function __destruct()
    {
        echo "Last Data"."<br>";
        // mysqli_close($this->conn);
    }
}
$test = new abc();
$test->insert();



?>