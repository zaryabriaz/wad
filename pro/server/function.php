<?php
/**
 * Created by PhpStorm.
 * User: zaryab
 * Date: 1/2/2019
 * Time: 12:43 AM
 */
function getbrand()
{
    global $connection;
    $query="select * from brands";
    $data=mysqli_query($connection,$query);
    if(!$query)
    {
        die("query error");
    }
    return $data;
}
function getcategories()
{

    global $connection;
    $query="select * from categories";
    $data=mysqli_query($connection,$query);
    if(!$query)
    {
        die("query error");
    }
    return $data;
}
?>