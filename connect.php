<?php
   $Fristname = $_POST[ 'Fristname'];
   $Lastname = $_POST[ 'Lastname'];
   $Email = $_POST[ 'Email'];
   $Password = $_POST[ 'Password'];
   $emal = $_POST[ 'emal'];
   $psw = $_POST[ 'psw'];
   $free = $_POST['free']
   $paid = $_POST['paid']
   //database connection
   $conn = new mysqli('127.0.0.1','root','','user');
   if($conn->connect_error){
    die('connection Failed  : ' .$conn->connect_error);
   } else{
    $stmt = $conn->prepare("insert into user(Fristname, Lastname, Email, Password, emal, psw, free, paid)
    values(?, ?, ?, ?, ?, ?, ?, ?,)");
    $stmt->bind_param("ssssssii",$Fristname, $Lastname, $Email, $Password, $emal, $psw, $free, $paid)
    $stmt->execute();
    echo "Login Successfully...";
    $stmt->close();
    $conn->close();
}
?>