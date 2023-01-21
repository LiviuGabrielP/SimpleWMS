<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  //  dd($_POST);
    $username = $_POST['username'];   
    $password = $_POST['password'];
    $email = $_POST['email'];
   

    $data = [
        								
        'username' => $username,
        'password' => $password,
        'email' => $email,
        
       
    ];

    //dd($data);
    $dao->insert('users', $data);
    echo 'Signed up successfully';
    header("Location: /");
       
            exit();
}
