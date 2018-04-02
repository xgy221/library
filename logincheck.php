<?php
/**
 * Created by PhpStorm.
 * User: xgy
 * Date: 2017/9/6
 * Time: 10:38
 */
session_start();
$user = $_POST["username"];
$psw = $_POST["password"];
if($user == "" || $psw == "")
{
    echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
}
else
{
    $_SESSION['username']=$user;
    $con=mysqli_connect("localhost","root","new_password","manager");
    mysqli_query($con,"set names 'gbk'");
    $sql = "select username,password from user where username = '$_POST[username]' and password = '$_POST[password]'";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    if($num)
    {
        $row = mysqli_fetch_array($result);  //将数据以索引方式储存在数组中
        echo "<script>alert('登录成功！'); window.location.href = 'homepage.php';</script>";
    }
    else
    {
        echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
    }
}
