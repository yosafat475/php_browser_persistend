<?php
$password="password";

$encrypt_password=password_hash($password,PASSWORD_BCRYPT);//keaman an yg paling kuat saat ini PASSWORD_BCRYPT

echo $encrypt_password;

if(password_verify('password',$encrypt_password)){
    echo "You have access to this page";
}else{
    echo "You dont have access to this page";
}