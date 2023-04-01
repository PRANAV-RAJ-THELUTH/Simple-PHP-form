<?php
var_dump($_POST);
die;
$username=$_POST['username'];
$password=$_POST['password'];
if($username=="admin" && $password=="admin")
{
    echo "login success";
}
else{
    echo "login failed";
}
?>