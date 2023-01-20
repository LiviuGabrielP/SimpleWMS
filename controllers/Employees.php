<?php

$pagename = "Employees";

$users = $dao->select("users");
$tableEntries = $dao->getColumns("users");


// GET TABLE TITLES
foreach($tableEntries as $column)
{
    $columns[] = $column;
}

foreach ($users as $user) 
{
    $entries[] = $user;
}





require "views/employees.view.php";