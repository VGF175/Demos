﻿<?php
$con = mysqli_connect('localhost', 'username', 'password');
if(! $con )
{
    die('连接失败: ' . mysqli_error($con));
}
mysqli_select_db($con,'bdm256727651_db');
$sql=" INSERT INTO Forms (userName, passWord)
VALUES('$_POST[signup_userName]','$_POST[signup_passWord]') ";
mysqli_query($con,$sql);
echo "<script>window.location.href='signup.html';</script>";	


mysqli_close($con)
?>
