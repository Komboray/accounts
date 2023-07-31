<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'account';
$conn = '';

$conn = mysqli_connect($server, $user, $pass, $db_name);

// try{
//     if($conn){
//         echo 'connected';
//      }else{
//          echo 'not connected';
//      }
     
// }catch(mysqli_error){
//     echo "${mysqli_error}";
// }



?>