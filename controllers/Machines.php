<?php

$pagename = "Machines";

if (isset($_SESSION['username'])) {
   
    $homepagecontent= " Welcome , $_SESSION[username]! " ;
 }
 else
 {
    header("Location: /login");
   exit();
 }
 
$machines = $dao->select("machinery");
$tableEntries = $dao->getColumns("machinery");


// GET TABLE TITLES
foreach($tableEntries as $column)
{
    $machine_columns[] = $column;
}

foreach ($machines as $machine) 
{
    $machine_entries[] = $machine;
}


if (isset($_GET['filter']) && isset($_GET['search']))  {
    
    $filter = $_GET['filter'];
    $search = $_GET['search'];
   
    


    require 'utils\filters.php';

    if($filter!="" && $search!="")
    {
        $machine_entries= filterData($machine_entries,$filter,$search);
         
    } 

    //dd($machine_entries);
}

if (isset($_GET['ordertype']) && isset($_GET['order']))  {
 
    $ordertype = $_GET['ordertype'];
    $order = $_GET['order'];
     
   
    if($ordertype!="" && $order!="")
    {
        require 'utils\orders.php';
        $machine_entries= orderData($machine_entries,$ordertype,$order);
         
    } 

    

    


    require 'utils\filters.php';

    

    //dd($machine_entries);
}

require "views/machines.view.php";