<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if(!$conn)
{
    die("could not connect" .mysql_error());
}
echo"connection successfully";
$sql="CREATE database test_db";
$retval=mysql_query($sql,$conn);
if(!$retval)
{
    die("could not create database".mysql_error());
}
echo"Connection Successsfully";
mysql_close();
?>