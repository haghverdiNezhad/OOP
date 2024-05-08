<?php
include_once "connection.php";
class user extends connection
{
    protected $tableName="users";
}
$newUser=new user();
var_dump($newUser->read(2));