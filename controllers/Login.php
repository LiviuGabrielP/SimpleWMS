<?php

$pagename = "Login";
$users = $dao->select("users");
$tableEntries = $dao->getColumns("users");


   foreach ($users as $user) 
{
    $employee_entries[] = $user;
}

if (isset($_SESSION['username'])) {
   header("Location: /");
   exit();
}



if (isset($_POST['login'])) {

   $username = $_POST['username'];
   $password = $_POST['password'];


   require 'utils\auth.php';
    performAuth($employee_entries,$username,$password);
   
}



require "views/Login.view.php";