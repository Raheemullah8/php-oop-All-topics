<?php
//late static binding ma hum derived class ki value ko show karane ke liya
// "LATE STATIC BINDING " ka use kar te hain;
class baseClass{
    protected static $name = "Raheem";
    public static function show(){
        echo self::$name;
        echo static::$name;
    }
}
class derived extends baseClass{
    public static $name = "Ullah";
}
$test = new derived();
$test->show();

?>