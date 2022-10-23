<?php

class  user
{
    public $name;
    public $family;
    public $username;
    public $tel;

    function add()
    {

    }

    function info()
    {
        echo $this->name;
    }
}

$u = new user();
$u->name = "ali";
$u->family = "alavi";
$u->tel = "123456";

$u->info();


