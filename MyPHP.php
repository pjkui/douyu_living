<?php

/**
 */
class MyPHP
{
    private $name = null;

    public function __construct()
    {
        $this->name = 'myPHP';
    }

    public function SetName($_name)
    {
        $this->name = $_name;

    }

    public function GetName()
    {
        return $this->name;
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo '<br/>destruct function called!<br/>';
    }

}