<?php
$pagename = "About us";

if (isset($_SESSION['username'])) {
   
    $homepagecontent= " Welcome , $_SESSION[username]! " ;
 }
 else
 {
    header("Location: /login");
   exit();
 }
require "views/about.view.php";

