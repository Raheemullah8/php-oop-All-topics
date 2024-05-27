<?php
class myclass{
    public function className(){
        echo "Class Name" . get_class($this) . '<br>';
    }
}
$obj = new myclass();
$obj->className();
/////////////////////////////////////////////
////////////////////////////////////////////
class parentClass{
    
}
class chaildClass extends parentClass{
    public function showData(){
        echo "parent Class Name:" . get_parent_class($this).'<br>';
    }
}
$obj1 = new chaildClass();
$obj1->showData();
///////////////////////////////////////////
//////////////////////////////////////////
class mysecondClass{
    public function __construct(){
         print_r(get_class_methods($this));

    }
    public function abc(){

    }
    private function abcd2(){

    }
}
$obj2 = new mysecondClass();
$get_class_method = get_class_methods('mysecondClass');
print_r($get_class_method);
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
class varClass{
    public $var1 = "name";
    public $var2 = "20";
    private $var4;
    public function __construct()
{
    print_r(get_class_vars(__CLASS__));
}
}
$obj5 = new varClass();
$class_var = get_class_vars(get_class($obj5));
print_r($class_var);
////////////////////////////////////////////////////
////////////////////////////////////////////////////
class objClass{
    public $varA = "1";
    public $varB = "2";
    public $varC = "3";
    private $varD = "4";
    public function __construct(){
        $this->varA ="raheem";
        $this->varB ="second";
        $this->varC ="3rd";
        $this->varD ="private property";
        print_r(get_object_vars($this));
    }
}
$objclass = new objClass();
$get_obj = get_object_vars($objclass);
print_r($get_obj);
////////////////////////////////////////////
////////////////////////////////////////////
class ab{
public static function test(){
    var_dump(get_called_class());
}
}
class bc extends ab{

}
ab::test();
bc::test();
////////////////////////////////////////////////
///////////////////////////////////////////////
class declairCLass{

}
class declairCLass1{
    
}
class declairCLass2{
    
}


// print_r(get_declared_classes());
////////////////////////////////
interface inter{

}
// print_r(get_declared_interfaces());
////////////////////////////////////////
///////////////////////////////////////

trait testTreat{

}
trait testTreat2{
    
}
 class useTreat{

    use testTreat;
}
print_r(get_declared_traits());
/////////////////////////////////////////////////
/////////////////////////////////////////////////
class aliceC{
    public $test;
   
}
class_alias("aliceC","ac");
$ali2 = new aliceC();
$aliobj = new ac();
$aliobj->test = "hello";
echo $aliobj->test;
?>