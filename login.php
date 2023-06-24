<?php
 if(isset($_POST['login'])){
  include "./includes/db.php";

  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM customer WHERE username = '$username' AND user_password = '$password';";
  $result = mysqli_query($conn,$query);
  
  
  if(!$result){
      die("Query Failed" . mysqli_error($conn));
  }
  
  $count=mysqli_num_rows($result);
  if($count > 0){
    echo '<script>alert("Login successfully")</script>';
    echo "<script>window.location.href = 'index.php';</script>";
  
  }
  else
  {
    echo "<h4 style='color: red; text-align: center; margin-top: 20px;'>credentials do not match!</h4>"; 
  }
}



?>
<?php include "./includes/header.php"; ?>
  <div class="d-flex justify-content-center align-items-center my-5 " >
<div class="border mx-5 p-3 col-lg-4 rounded" >

 
<form action="" method="post"  enctype="multipart/form-data">
  <h4 class="text-center font-weight-bold" >Login</h4>

<div class="form-group col-md-12">
<label for="username">Enter Username</label>
<input value="" type="text" class="form-control" name="username">
</div>
<div class="form-group col-md-12">
  <label for="password">Enter Password</label>
  <input type="password" class="form-control" name="password" >
</div>

<div class="form-group col-md-12 d-flex justify-content-center my-3">

  <!-- <input type="submit" value="Login" class="form-control" name="password" > -->
  <button name="login" class="btn btn-primary btn-lg " style="width:200px">
  <i class="fa-solid fa fa-right-to-bracket"></i>Login</button>
  
</div>
<div>
  <div class="row d-flex justify-content-space-between" >
<p class="col-md-6" style="color:orange" ><a href="index.php" class="text-decoration-none">
  <i class="fa-solid fa fa-home"></i>Home</a></p>
<p class="col-md-6" >Don't have an account?<a class="text-decoration-none" href="sign_up_inc.php">Register</a></p>
</div>
</div>


</form>

</div>


  </div>

 
