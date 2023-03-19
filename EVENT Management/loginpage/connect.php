<?php
  $username=$_POST['username'];
  $password=$_POST['password'];

  $conn = new mysqli('localhost','root','','logindata');
  if($conn->connect_error){
    die('Connection failed : ' .$conn->connect_error);
  
  }else{
    $stmt = $conn->prepare("insert into logindata(username,password) values(?,?)");
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    echo"resistrtion successflly...";
    $stmt->close();
    $conn->close();
  }
?>