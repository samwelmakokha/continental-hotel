<?php
if(isset($_POST['sign_up'])){
  include "db.php";
  // global $conn;
  $email_info = $_POST['email_info'];
  $phone = $_POST['phone'];

  $email_info = mysqli_escape_string($conn,$email_info);
  $phone = mysqli_escape_string($conn,$phone);

  $query = "INSERT INTO newsletter (email, phone) VALUES ('$email_info', '$phone')";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Query Failed!" . mysqli_error($conn);
  }else{
    echo '<script>alert("signed up successfully")</script>';
    echo "<script>window.location.href = '../index.php';</script>";
  }
}


?>