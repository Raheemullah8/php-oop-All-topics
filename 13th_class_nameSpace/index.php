<?php
// name spacce ki madat sa hum same name ki classes ko hum 
// 1 he file ke under include kar wa sakte hain 
require "product.php";
require "testing.php";
function wow(){
    echo "Index File testing";
}
 $test = new pro\product();
// $test2 = new test\product();
pro\wow();
?>