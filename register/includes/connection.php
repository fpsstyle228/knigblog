<?php
mysql_connect('localhost','root','') or die(mysql_error());  
	mysql_select_db('knigblog') or die("No database");
    mysql_set_charset("utf8");
?>
<?php session_start(); ?>