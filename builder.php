<?php
class builder{
    private static $list = [];
    private static $three = null;
    private static $both = null;
    private static $five = null;
    public function __construct()
    {
        for($i = 1; $i <= 100; $i++){
            array_push(self::$list, $i);
        }
    }
    public static function render($number){
        var_dump(three::test($number));
        self::$three = three::test($number);
        self::$three = five::test($number);
        self::$both = self::both(self::$three, self::$five);
        return $number . self::$three . self::$both. self::$five . PHP_EOL;
    }
    private static function test($number){
        return self::both(three::test($number), five::test($number));
    }
    private static function both($three, $five){
        return ($three && $five) ? "And" : null;
    }
}