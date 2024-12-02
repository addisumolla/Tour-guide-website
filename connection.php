<?php
$hostname='localhost';
$uname='root';
$pass='';
$dname='group_one1';

$conn=mysqli_connect($hostname,$uname,$pass,$dname);

if(!$conn)
{
die('could not connect'.mysqli_error());
}
?>