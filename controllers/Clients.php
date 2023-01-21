<?php

$pagename = "Clients";
if (isset($_SESSION['username'])) {
   
    $homepagecontent= " Welcome , $_SESSION[username]! " ;
 }
 else
 {
    header("Location: /login");
   exit();
 }

$clients = $dao->select("clients");
$tableEntries = $dao->getColumns("clients");


// GET TABLE TITLES
foreach($tableEntries as $column)
{
    $client_columns[] = $column;
}

foreach ($clients as $client) 
{
    $client_entries[] = $client;
}

if (isset($_GET['filter']) && isset($_GET['search']))  {
    
    $filter = $_GET['filter'];
    $search = $_GET['search'];
   
    


    require 'utils\filters.php';

    if($filter!="" && $search!="")
    {
        $client_entries= filterData($client_entries,$filter,$search);
         
    } 

    //dd($client_entries);
}

if (isset($_GET['ordertype']) && isset($_GET['order']))  {
 
    $ordertype = $_GET['ordertype'];
    $order = $_GET['order'];
     
   
    if($ordertype!="" && $order!="")
    {
        require 'utils\orders.php';
        $client_entries= orderData($client_entries,$ordertype,$order);
         
    } 

    

    


    require 'utils\filters.php';

    

    //dd($client_entries);
}

require "views/clients.view.php";