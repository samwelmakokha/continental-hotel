<?php include "./includes/header.php";?>
<?php include "./includes/navigation.php";?>
<?php include "./includes/db.php";?>


<div class="container-md">

<div class="row my-5 ">
<div class="col-md-4 border rounded column-2" >
<h2 class=""style="text-align:start; color:orange;" ><i class="fa-solid fa fa-cart-shopping"></i> My Cart</h2>
<?php
        $query = "SELECT * FROM products LIMIT 2";
        $result = mysqli_query($conn,$query);

        if(!$result){
          echo "QUERY FAILED" . mysqli_error($conn);
        }

        while($row = mysqli_fetch_assoc($result)){
          $product_image = $row['product_image'];
          $product_name = $row['product_name'];
          $product_price = $row['product_price'];
        ?>
        
       <a href="#"><img src="./img/<?php echo "$product_image"; ?>" alt=""></a> 
        <h4 class="column-2"><?php echo "$product_name"; ?></h4>
        <p class="column-2" >$<?php echo "$product_price"; ?></p>
       
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star-o" ></i>
             <span style="color:orange">(428 rating)</span>
             <span><ion-icon class="icon" name="share-social-outline"></ion-icon></span>
             <span><ion-icon class="icon" name="heart-outline"></ion-icon></span>

          <div class="col-md-2 form-group my-2">
        
          Quantity: <input type="number" class="form-control" value="1" name="quantity" >
          </div>
          <div class="col-md-6 my-2">
           <p style="color:orange">Product price: Kshs 348</p>
          </div>
          <?php
         }
        ?>
        </div>
       
<div class="col-md-7 mx-5" >
  <h2 style="color:orange" >Delivery Information</h2>

<form action="" method="post">
          
          <div class="mb-3 col-md-9">
            <label for="recipient-name" class="col-form-label">Full Name:</label>
            <input type="text" name="full_name" class="form-control" id="recipient-name"  placeholder="Enter full name">
          </div>
          
          <div class="mb-3 col-md-9">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" name="email" class="form-control" id="recipient-name"  placeholder="Enter email">
          </div>
          <div class="mb-3 col-md-9">
            <label for="recipient-name" class="col-form-label">Contact Number:</label>
            <input type="tel" name="contact" class="form-control" id="recipient-name"  placeholder="Enter phone number">
          </div>
          <div class="mb-3 col-md-9">
            <label for="recipient-name" class="col-form-label">Address:</label>
            <input type="text" name="address" class="form-control" id="recipient-name"  placeholder="Enter address">
          </div>
          <div class="font-weight-bold my-4" style="color:#ffb900" >
         
            <p>Checkout:</p>
          <span>Goods Amount: Kshs 2550.00</span>
        <div>Shipping Fee: Kshs 129.00</div> 
        <p>Total Amount: Kshs 3579.00</p> 
        </div>

         
          <div class="mb-3 col-md-9 mx-3">
            
          <button name="payment" class="btn btn-warning btn-lg " style="width:300px; color:#fff" >
          <i class="fa-solid fa fa-right-to-bracket"></i>Proceed to Payment</button>
          </div>
         
         
  </form>
  </div>
 </div>
</div>

