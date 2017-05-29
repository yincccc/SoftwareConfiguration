<?php
session_start();
/**
 * Created by PhpStorm.
 * User: 高凯辉
 * Date: 2017-05-25
 * Time: 19:56
 */

/**
 * 必须在require "sql.php"之后调用
 */
function getPrivilege(){

    //获取privilege,区分是市用户还是省用户
    $sql="select * from user where id='".$_SESSION["id"]."'";
    $result=mysql_query($sql);
    $row=mysql_fetch_array($result);

    return $row["privilege"];
}

/**
 * 必须在require "sql.php"之后调用
 */
function getAdminCity(){

    $sql="select * from city where user_id='".$_SESSION["id"]."'";
    $result=mysql_query($sql);
    $row=mysql_fetch_array($result);

    return $row["id"];
}