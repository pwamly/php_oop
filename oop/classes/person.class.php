<?php

class Person
{
    public $name;
    private $age;
    public static $adultage = 18;


    public function __construct($alchol)
    {
        $this->name = $alchol;
        echo "he is drinking alchol,";

    }


    public function behavour($alchol)
    {


    }


    public static function setAdultAge($adt)
    {
        self::$adultage = $adt;
        return self::$adultage;
    }
}

?>