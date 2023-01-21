<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  //  dd($_POST);
    $machine_name = $_POST['machine_name'];   
    $machine_type = $_POST['machine_type'];
    $checkup_date = $_POST['checkup_date'];
    
    $checkup_status = $_POST['checkup_status'];
   
    $deployment = $_POST['deployment'];
    $firmware_version = $_POST['firmware_version'];
    $operator_id = $_POST['operator_id'];

    $data = [
        								
        'machine_name' => $machine_name,
        'machine_type' => $machine_type,
        'checkup_date' => $checkup_date,
        
        'checkup_status' => $checkup_status,
       
        'deployment' => $deployment,
        'firmware_version' => $firmware_version,
        'operator_id'=>$operator_id
    ];

    //dd($data);
    $dao->insert('machinery', $data);
    echo 'Employee added successfully';
    header("Location: /machines");
       
            exit();
}
