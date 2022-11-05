<?php

class Person
{
    public $name;
    private $age;
    public function behavour($alchol)
    {
        $this->name = $alchol;
        echo "he is drinking alchol,";

        return $this->name;

    }
}

?>