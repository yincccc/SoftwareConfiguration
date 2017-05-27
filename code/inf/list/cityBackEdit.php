<?php
session_start();
/**
 * Created by PhpStorm.
 * User: 高凯辉
 * Date: 2017-05-23
 * Time: 19:36
 */

require "../../admin/sql.php";

$report_id=$_POST["report_id"];
$content=$_POST["content"];


$sql1="update entjobless set status=2 where id='".$report_id."' ";
$result1=mysql_query($sql1);

$sql="insert into backedit(report_id,user_id,reason,time) values('".
    $report_id."','".$_SESSION["id"]."','".$content."',NOW())";
$result=mysql_query($sql);

echo 1;

