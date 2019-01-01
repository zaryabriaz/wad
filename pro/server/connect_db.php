<?php
/**
 * Created by PhpStorm.
 * User: zaryab
 * Date: 1/2/2019
 * Time: 12:43 AM
 */
$host="localhost";
$username="root";
$password="";
$database="techbox";
$connection=mysqli_connect($host,$username,$password,$database);
if(!$connection)
{
    die("connection error");
}

?>