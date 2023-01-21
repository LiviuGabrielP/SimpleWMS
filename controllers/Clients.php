<?php

$pagename = "Clients";


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

require "views/clients.view.php";