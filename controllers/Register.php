<?php

$pagename = "Register";


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    //  dd($_POST);
      $first_name = $_POST['first_name'];   
      $last_name = $_POST['last_name'];
      
  
      $data = [
                                          
          'First_Name' => $first_name,
          'Last_Name' => $last_name,
          'SSN' => $ssn,
          'Clearance' => $clearance,
          'Employment_status' => $employment_status,
         'Employment_date' => $employment_date,
          'Gender' => $gender,
          'Blood_type' => $blood_type
      ];
  
      //dd($data);
      $dao->insert('employees', $data);
      echo 'Employee added successfully';
      header("Location: /employees");
         
              exit();
  }

require "views/register.view.php";