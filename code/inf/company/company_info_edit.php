﻿<?php
session_start();
/**
 * Created by PhpStorm.
 * User: 高凯辉
 * Date: 2017-05-22
 * Time: 17:36
 */

require "../../admin/sql.php";

$sql="select * from entinfo where admin_id='".$_SESSION["id"]."'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

$sql="update entinfo set code='".$_POST["code"]."',namech='".$_POST["namech"]."'".
    ",nature='".$_POST["nature"]."'".
    ",industrial='".$_POST["industrial"]."',bus='".$_POST["bus"]."',contactch='".$_POST["contactch"]."',".
    "contact_addr='".$_POST["contact_addr"]."'".
    ",zipcode='".$_POST["zipcode"]."',tel='".$_POST["tel"]."',fax='".$_POST["fax"]."',".
    "email='".$_POST["email"]."' where id='".$row["id"]."'";
$sql=mysql_query($sql);

echo 1;