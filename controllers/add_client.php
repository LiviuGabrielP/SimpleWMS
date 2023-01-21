<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  //  dd($_POST);
    $client_name = $_POST['client_name'];   
    $tax_id = $_POST['tax_id'];
    $tax_addr = $_POST['tax_addr'];
    $po_number = $_POST['po_number'];
  $shipping_prio = $_POST['shipping_prio'];

    $data = [
        								
        'Client_name' => $client_name,
        'tax_id' => $tax_id,
        'tax_address' => $tax_addr,
        'po_number' => $po_number,
        'shipping_priority' => $shipping_prio,
       
    ];

    //dd($data);
    $dao->insert('clients', $data);
    echo 'Employee added successfully';
    header("Location: /clients");
       
            exit();
}
