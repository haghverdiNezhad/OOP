<?php
include_once "connection.php";
class car extends connection
{
   protected $tableName="cars";
}
$newUser=new car();
var_dump($newUser->read(1));