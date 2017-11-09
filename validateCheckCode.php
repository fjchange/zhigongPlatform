<?php
/**
 * Created by PhpStorm.
 * User: kiwi feng
 * Date: 2017/9/9
 * Time: 15:55
 */
session_start();
    $codeT=$_GET["validateCode"];
    $codeP=$_SESSION["checkcode"];
    if(strtolower($codeT)==strtolower($codeP)){
        echo "1";
    }
    else {
        echo "0";
    }
?>