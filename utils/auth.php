<?php

function performAuth( $employee_entries,$username,$password) {
   
   // check if user is already logged in
  
         
       // loop through employee_entries array
       foreach ($employee_entries as $user) {
           // check if username and password match
           if ($username == $user['username'] && $password == $user['password']) {
               $_SESSION['username'] = $username;
               header("Location: /");
               exit();
           }
       }
      
       // if no match is found
       header("Location: /login");
       echo "Invalid username or password.";
       exit();
   
}