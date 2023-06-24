<?php
if(isset($_POST['register'])){
  include "./includes/db.php";
  
  $full_name=$_POST['full_name'];
  $username=$_POST['username'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $address=$_POST['address'];
  $password=$_POST['password'];

  $full_name = mysqli_escape_string($conn,$full_name);
  $username = mysqli_escape_string($conn,$username);
  $email = mysqli_escape_string($conn,$email);
  $contact = mysqli_escape_string($conn,$contact);
  $address = mysqli_escape_string($conn,$address);
  $password = mysqli_escape_string($conn,$password);
  

      // encrypting the password
      // $hashFormat="$2y$10$";
      // $salt="iused22characterstocry";
      // $conca="$salt.$hashFormat";
      // $password=crypt($conca);
    
      $query = "INSERT INTO customer (full_name, username, email, phone_number, address_1, user_password) 
      VALUES ('$full_name', '$username', '$email', '$contact',' $address', '$password')";
      $result = mysqli_query($conn,$query);
      if(!$result){
        echo "QUERY FAILED " . mysqli_error($conn);
      }else{
        echo '<script>alert("signed up successfully")</script>';
    echo "<script>window.location.href = 'login.php';</script>";
      }
}
?>
<?php include "./includes/header.php";  ?>

  <h3 class="text-center my-3" >Welcome to Sign Up</h3>
  <div class=" col-lg-8 px-3 border rounded" style="margin:10px auto;" >
  <form action="sign_up_inc.php" method="post">
          <div class="row">
          <div class="mb-3 col-md-6">
            <label for="recipient-name" class="col-form-label">Full Name:</label>
            <input type="text" name="full_name" class="form-control" id="recipient-name"  placeholder="Enter full name">
          </div>
          <div class="mb-3 col-md-6">
            <label for="recipient-name" class="col-form-label">Username:</label>
            <input type="text" name="username"  class="form-control" id="recipient-name" placeholder="Enter username">
          </div>
          <div class="mb-3 col-md-6">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" name="email" class="form-control" id="recipient-name"  placeholder="Enter email">
          </div>
          <div class="mb-3 col-md-6">
            <label for="recipient-name" class="col-form-label">Contact Number:</label>
            <input type="tel" name="contact" class="form-control" id="recipient-name"  placeholder="Enter phone number">
          </div>
          <div class="mb-3 col-md-6">
            <label for="recipient-name" class="col-form-label">Address:</label>
            <input type="text" name="address" class="form-control" id="recipient-name"  placeholder="Enter address">
          </div>
          <div class="mb-3 col-md-6">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="password" name="password" class="form-control" id="recipient-name"  placeholder="Enter password">
          </div>
          <div class="mb-3 col-md-6">
            <label for="recipient-name" class="col-form-label">Confirm Password:</label>
            <input type="password" class="form-control" id="recipient-name" placeholder="Confirm password">
          </div>
        
          <div class="mb-3 col-md-6 mx-3">
            
          <button name="register" class="btn btn-primary btn-lg my-3" style="width:200px" >
          <i class="fa-solid fa fa-right-to-bracket"></i>Register</button>
          </div>
          <div class="mb-3 col-md-4 my-3" >
            <p>Have an account?<a class="text-decoration-none p-2" href="login.php">Login</a></p>
          </div>
          </div>
  </form>
  </div