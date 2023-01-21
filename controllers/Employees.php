<?php

$pagename = "Employees";
if (isset($_SESSION['username'])) {
   
    $homepagecontent= " Welcome , $_SESSION[username]! " ;
 }
 else
 {
    header("Location: /login");
   exit();
 }
$users = $dao->select("Employees");
$tableEntries = $dao->getColumns("Employees");


// GET TABLE TITLES
foreach($tableEntries as $column)
{
    $employee_columns[] = $column;
}

foreach ($users as $user) 
{
    $employee_entries[] = $user;
}

if (isset($_GET['filter']) && isset($_GET['search']))  {
    
    $filter = $_GET['filter'];
    $search = $_GET['search'];
   
    


    require 'utils\filters.php';

    if($filter!="" && $search!="")
    {
        $employee_entries= filterData($employee_entries,$filter,$search);
         
    } 

    //dd($employee_entries);
}

if (isset($_GET['ordertype']) && isset($_GET['order']))  {
 
    $ordertype = $_GET['ordertype'];
    $order = $_GET['order'];
     
   
    if($ordertype!="" && $order!="")
    {
        require 'utils\orders.php';
        $employee_entries= orderData($employee_entries,$ordertype,$order);
         
    } 

    

    


    require 'utils\filters.php';

    

    //dd($employee_entries);
}
require "views/employees.view.php";