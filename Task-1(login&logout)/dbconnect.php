<?php
$servername="localhost";
$username="root";
$password="";
$databasename="task1";
//connect the database in php code
$connect=new mysqli($servername,$username,$password,$databasename);
//check the connection of database
if($connect->connect_error)//doesn't connect properly in database if(condition used)
{
    die("connection failed".$connect->connect_error);//error msg
}
//connect properly in database
//echo"connection successfully";
?>




