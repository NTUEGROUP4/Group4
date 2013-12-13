<?php  
$host="localhost";
$user="root";
$password="NTUE";
$link=mysql_connect($host,$user,$password);
$query = "SET NAMES 'utf8'";
$result = mysql_query($query);
mysql_select_db("Group4",$link) || die("db error");
?>