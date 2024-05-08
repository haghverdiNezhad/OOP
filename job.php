<?php
include_once "connection.php";

class job extends connection
{
    protected $tableName = "jobs";
}

$newUser = new job();
var_dump($newUser->read(3));