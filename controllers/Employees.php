<?php

$pagename = "Employees";

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





require "views/employees.view.php";