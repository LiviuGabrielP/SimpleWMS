<?php

$pagename = "Machines";


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

require "views/machines.view.php";