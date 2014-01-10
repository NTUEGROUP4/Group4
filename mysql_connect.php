<?php  
$host="localhost";
$user="group4";
$password="cd5";
$link=mysql_connect($host,$user,$password);//帳號和密碼的紀錄
$query = "SET NAMES 'utf8'";
$result = mysql_query($query);
mysql_select_db("Group4",$link) || die("db error");
?>
