<?php
/**
 * Created by PhpStorm.
 * User: kiwi feng
 * Date: 2017/9/7
 * Time: 22:59
 */
require_once 'VerifyImage.php';
session_start();
$VerifyImg=new VerifyImage();
$VerifyImg->CreateVerifyImage();
session_register("checkcode");
$_SESSION["checkcode"]=$VerifyImg->m_verify_code;
var_dump(
    $_SESSION
)
?>