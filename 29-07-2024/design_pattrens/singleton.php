<?php
class Singleton{
    private static $var = null;
    private function __construct(){
        echo 'constructor call';
    }
    public static function showInstance(){
        if (self::$var==null){
            self::$var = new static();
        }
        else{
            echo '<br>Already Connected';
        }
    }
}
$obj = Singleton::showInstance();
$obj5 = Singleton::showInstance();
?>
