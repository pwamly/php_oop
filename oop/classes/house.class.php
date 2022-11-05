<?php

class House
{
    public $name;
    private $age;
    public static $adultage = 18;


    public function __construct($alchol)
    {
        $this->name = $alchol;
        echo "house,";

    }


    public function behavour($alchol)
    {


    }


    public static function setAdultAge($adt)
    {
        self::$adultage = $adt;
        echo 'fffffffffffffffffffffff';
        return self::$adultage;
    }
}

?>