<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  //  dd($_POST);
    $first_name = $_POST['first_name'];   
    $last_name = $_POST['last_name'];
    $ssn = $_POST['ssn'];
    $clearance = $_POST['clearance'];
    $employment_status = $_POST['employment_status'];
    $employment_date = $_POST['employment_date'];
    $gender = $_POST['gender'];
    $blood_type = $_POST['blood_type'];

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
