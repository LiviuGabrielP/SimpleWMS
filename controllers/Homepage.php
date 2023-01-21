<?php
//dd($_SESSION['username']);
$pagename = "Homepage";
//dd($_SESSION['username']);
if (isset($_SESSION['username'])) {
   
    $homepagecontent= " Welcome , $_SESSION[username]! " ;
 }
 else
 {
    header("Location: /login");
   exit();
 }

 

require "views/homepage.view.php";


