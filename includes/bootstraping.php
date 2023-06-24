<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="./bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
<script src="main.js"></script>


<!-- modals -->
<!-- login modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Welcome to Login Page</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="login.php" method="post" >
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Username:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Enter the username">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="password" class="form-control" id="recipient-name" placeholder="Enter the password">
          </div>
          <!-- <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div> -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
        <button type="button" name="login" class="btn btn-primary ">LOGIN</button>
      </div>
    </div>
  </div>
</div>

<!-- modal window sign up -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel2">Welcome to Sign Up</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="./sign_up_inc.php" method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Full Name:</label>
            <input type="text" name="full_name" class="form-control" id="recipient-name"  placeholder="Enter full name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Username:</label>
            <input type="text" name="username"  class="form-control" id="recipient-name" placeholder="Enter username">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" name="email" class="form-control" id="recipient-name"  placeholder="Enter email">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Contact Number:</label>
            <input type="tel" name="contact" class="form-control" id="recipient-name"  placeholder="Enter phone number">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Address:</label>
            <input type="text" name="address" class="form-control" id="recipient-name"  placeholder="Enter address">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="password" name="password" class="form-control" id="recipient-name"  placeholder="Enter password">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Confirm Password:</label>
            <input type="password" class="form-control" id="recipient-name" placeholder="Confirm password">
          </div>
          <!-- <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div> -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
        <button type="button" name="sign" class="btn btn-primary" >SIGN UP</button>
      </div>
    </div>
  </div>
</div>




<!-- carousel -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/6425a26d31ebfa0fe7f59287/1gspg4vja';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->

  <!-- Menu bar -->
  <script>
    let navLinks=document.getElementById("navLinks")
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
</script>

</html>