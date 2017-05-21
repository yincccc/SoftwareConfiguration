<?php
	header("Content-type: text/html;charset=utf-8;");
	error_reporting(0); 
	 

	$con=mysql_connect("localhost","root","123456");
	mysql_select_db("humanresource");
	mysql_query("set names utf8");