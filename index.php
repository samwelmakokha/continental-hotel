<?php include "./includes/db.php";?>
<?php include "./includes/header.php";?>
<?php include "./includes/navigation.php";?>



<body>
<main>
  <section class="main-content">
    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/breakfast.jpg" class="d-block w-100 breakfast" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./img/cafeteria.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./img/fried.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

      <!-- <div class="first-content">
      
        <h1 class="clip-text">Welcome to Continental Hotel</h1>
   
        <p class="header-p">Let Us Satisfy You Today!</p> 
   
    </div> -->

  </section>
  <section class="second-content">
    
    <h1 class="clip-text">Lets Us Know What Food You Want To Eat Today!</h1>
   
    <div class="row1">
      <div class="column">
        <h2>Breakfast Dishes</h2>
    <div class="form-text">
          <form action="food.php" method="post">
            <div class="order">
            <!-- <label for="category">Category</label></br> -->
            <span>Category:</span>
            <select name="" id="">
              <option value="italian">Select Preference</option>
            <?php
            
            $query = "SELECT * FROM breakfast";
            $result = mysqli_query($conn,$query);
            while ($row=mysqli_fetch_assoc($result)){
              $breakfastId=['breakfast_id'];
              $breakfast=$row['breakfast_category'];
              echo "<option value='{$breakfastId}'>{$breakfast}</option>";
            }
            
            
            ?>

            
            </select>
            <!-- <input type="text" name="category" placeholder="Choose food category" required></br> -->
          </div>
          <div class="order">
            <!-- <label for="food">Food</label></br> -->
            <span>Food:</span>
            <input type="text" name="food" placeholder="Choose your favourite meal" required></br>
          </div>
          <input type="submit" value="Order Now">
          </form>
        </div>
        </div>
      <div class="column">
        <h2>Lunch Dishes</h2>
        
        <div class="form-text">
          <form action="food.php" method="post">
            <div class="order">
            <!-- <label for="category">Category</label></br> -->
            <span>Category:</span>
            <select name="" id="">
              <option value="italian">Select Preference</option>
              <?php
              $query = "SELECT * FROM lunch";
            $result = mysqli_query($conn,$query);
            while ($row=mysqli_fetch_assoc($result)){
              $lunchId=['lunch_id'];
              $lunch=$row['lunch_category'];
              echo "<option value='{$lunchId}'>{$lunch}</option>";
            }
            ?>
     
            </select>
            <!-- <input type="text" name="category" placeholder="Choose food category" required></br> -->
          </div>
          <div class="order">
            <!-- <label for="food">Food</label></br> -->
            <span>Food:</span>
            <input type="text" name="food" placeholder="Choose your favourite meal" required></br>
          </div>
          <input type="submit" value="Order Now">
          </form>
        </div>
      </div>
      <div class="column">
        <h2>Dinner Dishes</h2>
        <div class="form-text">
          <form action="food.php" method="post">
            <div class="order">
            <!-- <label for="category">Category</label></br> -->
            <span>Category:</span>
            <select name="" id="">
              <option value="italian">Select Preference</option>

              <?php
              $query = "SELECT * FROM dinner";
            $result = mysqli_query($conn,$query);
            while ($row=mysqli_fetch_assoc($result)){
              $dinnerId=['dinner_id'];
              $dinner=$row['dinner_category'];
              echo "<option value='{$dinnerId}'>{$dinner}</option>";
            }
            ?>

            
            </select>
            <!-- <input type="text" name="category" placeholder="Choose food category" required></br> -->
          </div>
          <div class="order">
            <!-- <label for="food">Food</label></br> -->
            <span>Food:</span>
            <input type="text" name="food" placeholder="Choose your favourite meal" required></br>
           
          </div>
          <input type="submit" value="Order Now">
          </form>
        </div>
      </div>
    </div>

  </section>

  <section class="foods">
   
    <h1 class="clip-text">Order Now, We D<span><i class="fa-solid fa-truck-fast"></i></span>liver At Your Doorstep!</h1>
    
    
   <div class="container-md">
    <div class="row col-lg-12" >
      <div class="col-md-4 column-2">
 
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
             <span>(428 rating)</span>
             <span><ion-icon class="icon" name="share-social-outline"></ion-icon></span>
             <span><ion-icon class="icon" name="heart-outline"></ion-icon></span>
             <div class="cart">
              <a href="#"><button  class="btn btn-warning my-4">
              <ion-icon class="icon" name="cart-outline"></ion-icon>
            <span> Add to cart</span>
              </button></a>
             </div> 
             <!-- </div> -->
             <?php
         }
        ?>
      
            </div>
          </div>
        </div>

      
      <!-- <div class="column-2 img-2">
      <a href="#"> <img src="/img/cheese.jpg" alt=""></a>
      <h2>Pastry</h2>
      <p>$68.00</p>
      <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star-o" ></i>
             <span>(428 rating)</span>
             <span><ion-icon class="icon" name="share-social-outline"></ion-icon></span>
             <span><ion-icon class="icon" name="heart-outline"></ion-icon></span>
            <div class="cart">
    <button class="btn btn-warning"> <ion-icon class="icon" name="cart-outline"></ion-icon><span>Add to cart</span></button>
            </div>
   
      </div>
      <div class="column-2 img-3">
        <a href="#"><img src="/img/tomatoes.jpg" alt=""></a>
        <h2>Cheese</h2>
      <p>$69.00</p>
      <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star-o" ></i>
             <span>(534 rating)</span>
             <span><ion-icon class="icon" name="share-social-outline"></ion-icon></span>
             <span><ion-icon class="icon" name="heart-outline"></ion-icon></span>
            <div class="cart">
  <button class="btn btn-warning"> <ion-icon class="icon" name="cart-outline"></ion-icon><span>Add to cart</span></button>
</div>
      </div>

      <div class="column-2 img-4">
      <a href="#"><img src="/img/mutura.jpg" alt=""></a> 
        <h2>Spicy Meat</h2>
        <p>$44.00</p>
      <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star-o" ></i>
             <span>(694 rating)</span>
             <span><ion-icon class="icon" name="share-social-outline"></ion-icon></span>
             <span><ion-icon class="icon" name="heart-outline"></ion-icon></span>
            <div class="cart">
  <button class="btn btn-warning"> <ion-icon class="icon" name="cart-outline"></ion-icon><span>Add to cart</span></button>
</div>  
      </div>

      <div class="column-2 img-5">
      <a href="#"><img src="/img/italia.jpg" alt=""></a> 
        <h2>Italia Pizza</h2>
        <p>$70.00</p>
      <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star-o" ></i>
             <span>(800 rating)</span>
             <span><ion-icon class="icon" name="share-social-outline"></ion-icon></span>
             <span><ion-icon class="icon" name="heart-outline"></ion-icon></span>
            <div class="cart">
  <button class="btn btn-warning"> <ion-icon class="icon" name="cart-outline"></ion-icon><span>Add to cart</span></button>
</div>
      </div>

      <div class="column-2 img-6">
      <a href="#"><img src="/img/breakfast.jpg" alt=""></a> 
        <h2>Food Plating</h2>
        <p>$45.00</p>
      <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star-o" ></i>
             <span>(400 rating)</span>
             <span><ion-icon class="icon" name="share-social-outline"></ion-icon></span>
             <span><ion-icon class="icon" name="heart-outline"></ion-icon></span>
            <div class="cart">
    <button class="btn btn-warning"> <ion-icon class="icon" name="cart-outline"></ion-icon><span>Add to cart</span></button>
</div>
      </div>

      <div class="column-2 img-7">
      <a href="#"><img src="/img/ingredients.jpg" alt=""></a> 
        <h2>Food Salad</h2>
        <p>$48.00</p>
      <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star-o" ></i>
             <span>(567 rating)</span>
             <span><ion-icon class="icon" name="share-social-outline"></ion-icon></span>
             <span><ion-icon class="icon" name="heart-outline"></ion-icon></span>
            <div class="cart"><button class="btn btn-warning"> <ion-icon class="icon" name="cart-outline"></ion-icon><span>Add to cart</span></button>
</div>
      </div>

      <div class="column-2 img-8">
      <a href="#"><img src="/img/fruits.jpg" alt=""></a> 
        <h2>Green Fruit Salad</h2>
        <p>$51.00</p>
      <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star-o" ></i>
             <span>(255 rating)</span>
             <span><ion-icon class="icon" name="share-social-outline"></ion-icon></span>
             <span><ion-icon class="icon" name="heart-outline"></ion-icon></span>
            <div class="cart">
      <button class="btn btn-warning"> <ion-icon class="icon" name="cart-outline"></ion-icon><span>Add to cart</span></button>
</div>
      </div>

      <div class="column-2 img-9">
      <a href="#"><img src="/img/eggs.jpg" alt=""></a> 
        <h2>Sandwich</h2>
        <p>$62.00</p>
      <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star-o" ></i>
             <span>(644 rating)</span>
             <span><ion-icon class="icon" name="share-social-outline"></ion-icon></span>
             <span><ion-icon class="icon" name="heart-outline"></ion-icon></span>
            <div class="cart">
      <button class="btn btn-warning"> <ion-icon class="icon" name="cart-outline"></ion-icon><span>Add to cart</span></button>
</div>
      </div>

      <div class="column-2 img-10">
      <a href="#"><img src="/img/platter.jpg" alt=""></a> 
        <h2>Breakfast Meal</h2>
        <p>$58.00</p>
      <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star-o" ></i>
             <span>(700 rating)</span>
             <span><ion-icon class="icon" name="share-social-outline"></ion-icon></span>
             <span><ion-icon class="icon" name="heart-outline"></ion-icon></span>
            <div class="cart">
        <button class="btn btn-warning"> <ion-icon class="icon" name="cart-outline"></ion-icon><span>Add to cart</span></button>
</div>
      </div>

      <div class="column-2 img-11">
      <a href="#"><img src="/img/sandwich.jpg" alt=""></a> 
        <h2>Boiled Eggs</h2>
        <p>$66.00</p>
      <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star-o" ></i>
             <span>(308 rating)</span>
             <span><ion-icon class="icon" name="share-social-outline"></ion-icon></span>
             <span><ion-icon class="icon" name="heart-outline"></ion-icon></span>
            <div class="cart">
        <button class="btn btn-warning"> <ion-icon class="icon" name="cart-outline"></ion-icon><span>Add to cart</span></button>
</div>
      </div>

      <div class="column-2 img-12">
      <a href="#"><img src="/img/juice.jpg" alt=""></a> 
        <h2>Breakfast Idli</h2>
        <p>$65.00</p>
      <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star-o" ></i>
             <span>(549 rating)</span>
             <span><ion-icon class="icon" name="share-social-outline"></ion-icon></span>
             <span><ion-icon class="icon" name="heart-outline"></ion-icon></span>
            <div class="cart">
          <button class="btn btn-warning"> <ion-icon class="icon" name="cart-outline"></ion-icon><span>Add to cart</span></button>
</div>
      </div>

      <div class="column-2 img-13">
      <a href="#"><img src="/img/toast.jpg" alt=""></a> 
        <h2>Fried Eggs</h2>
        <p>$60.00</p>
      <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star-o" ></i>
             <span>(628 rating)</span>
             <span><ion-icon class="icon" name="share-social-outline"></ion-icon></span>
             <span><ion-icon class="icon" name="heart-outline"></ion-icon></span>
            <div class="cart">
          <button class="btn btn-warning"> <ion-icon class="icon" name="cart-outline"></ion-icon><span>Add to cart</span></button>
</div>
      </div>

      <div class="column-2 img-14">
      <a href="#"><img src="/img/pancake.jpg" alt=""></a> 
        <h2>Italian hommade cheese</h2>
        <p>$63.00</p>
      <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star-o" ></i>
             <span>(372 rating)</span>
             <span><ion-icon class="icon" name="share-social-outline"></ion-icon></span>
             <span><ion-icon class="icon" name="heart-outline"></ion-icon></span>
            <div class="cart">
            <button class="btn btn-warning"> <ion-icon class="icon" name="cart-outline"></ion-icon><span>Add to cart</span></button>
</div>
      </div>

      <div class="column-2 img-15">
      <a href="#"><img src="/img/cinnamon.jpg" alt=""></a> 
        <h2>Cinnamon Rolls</h2>
        <p>$72.00</p>
      <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star-o" ></i>
             <span>(522 rating)</span>
             <span><ion-icon class="icon" name="share-social-outline"></ion-icon></span>
             <span><ion-icon class="icon" name="heart-outline"></ion-icon></span>
            <div class="cart">
              <button class="btn btn-warning"> <ion-icon class="icon" name="cart-outline"></ion-icon><span>Add to cart</span></button>
</div>
      </div>
    </div> -->
  </section>

  <section class="food-display">
    <h1 class="clip-text center">New Arrival Delicacies</h1>
    <p class="center">Let Us Satisfy You Today!</p>
    <div class="container">
      <div id="carouselExampleControlsNoTouchingg" class="carousel slide" data-bs-touch="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/oil.jpg" class="d-block w-100" alt="...">
            <div class="button-buy">
            <button class="btn btn-success">Place Order Now</button>
          </div>
          </div>
          <div class="carousel-item">
            <img src="./img/pizza.jpg" class="d-block w-100" alt="...">
            <div class="button-buy">
              <button class="btn btn-success">Place Order Now</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/juice.jpg" class="d-block w-100" alt="...">
            <div class="button-buy">
              <button class="btn btn-success">Place Order Now</button>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouchingg" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouchingg" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>

  </section>

  <section class="contact">
    <div class="contact-row">
      <div class="contact-col">
      <div class="image-newsletter">
        <!-- <img src="./img/man.jpg" alt=""> -->
     
      <h2>Don't miss out!</h2>
      <p>We bring you latest news about new arrivals,discounts 
        and free deliveries</p>
        <p>Everything you need to know about us, 
        we got you at our helm. Sign up today to our newsletter and be ahead of everybody</p>
    </div>
    
      </div>
      <div class="contact-col">
       
        <div class="form-contact">
          <h3>Sign up for latest updates</h3>
          <form action="./includes/sign_up_newsletter.php" method="post" >
            <div class="small-content">
              <small>Enter your email</small>
              <input type="email" name="email_info" placeholder="Enter your email" required>
            </div>
            <div class="small-content">
              <small>Enter your contact number</small>
              <input type="tel" placeholder="Enter your contact number" name="phone" required>
            </div>
            <input type="submit" name="sign_up" value="Sign Up Today">
          </form>
        </div>
      </div>
    </div>
       </section>


  <section class="kitchen">
   <h1 class="clip-text">Lets Get Into Our Kitchen</h1>
   <div class="kitchen-row">
    <div class="kitchen-row-1">
<img src="./img/kitchen.jpg" alt="">
    </div>
    <div class="kitchen-row-1">
      <div class="kitchen-header">
        <h2>Our Kitchen Services:</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum laboriosam iste culpa 
          eos tempora dicta alias adipisci natus voluptates veritatis.</p>
        
        
      </div>
    </div>
   </div>
  </section>

  <section class="kitchen">
    <h1 class="clip-text">What Our Chefs Had To Say</h1>
    <div class="kitchen-row">
     <div class="kitchen-row-1">
 <img src="./img/making food.jpg" alt="">
     </div>
     <div class="kitchen-row-1">
       <div class="kitchen-header">
        <div class="quotes">
          <i class="fa-sharp fa-solid fa-quote-left"></i>
          <i class="fa-sharp fa-solid fa-quote-left"></i>
        </div>
         <h2>We Offer Our Customers Quality Delicacies</h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum laboriosam iste culpa 
           eos tempora dicta alias adipisci natus voluptates veritatis.</p>
         
       </div>
     </div>
    </div>
   </section>
 

   <section class="chefs">
    <h1 class="clip-text">More From The Sweetness Behind Our Delicacy <i class="fa-solid fa-droplet"></i> </i></h1>
    <div class="chefs-row">
      <div class="chefs-col chef-1">
        <img src="./img/men.jpg" alt="">
        <div class="more">
          <h5>John Doe</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Commodi, veniam eaque suscipit laboriosam at placeat?  ipsum dolor sit amet consectetur adipisicing elit</p>
        </div>
      </div>
      <div class="chefs-col chef-2">
        <img src="./img/cook.jpg" alt="">
        <div class="more">
          <h5>Jennifer Lopez</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Commodi, veniam eaque suscipit laboriosam at placeat?  ipsum dolor sit amet consectetur adipisicing elit</p>
        </div>
      </div>
      <div class="chefs-col chef-3">
        <img src="./img/server.jpg" alt="">
        <div class="more">
          <h5>Luther Kering</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Commodi, veniam eaque suscipit laboriosam at placeat?  ipsum dolor sit amet consectetur adipisicing elit</p>
        </div>
      </div>
      <div class="chefs-col chef-4">
        <img src="./img/profession.jpg" alt="">
        <div class="more">
          <h5>Aisha Hassan</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Commodi, veniam eaque suscipit laboriosam at placeat?  ipsum dolor sit amet consectetur adipisicing elit</p>
        </div>
      </div>
    </div>
   </section>

   <section class="customers">
    <h1 class="clip-text">Here From Our Esteemed Customers</h1>
    <div class="customers-row">
      <div class="customer-col">
        <div class="customer-testimonial">
          <img src="./img/baby.jpg" alt="">
          <h6>Baby Pendo</h6>
        </div>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae, ipsum. Repellat cumque nulla aliquid doloribus!</p>
      <div class="rating">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
      </div>
      </div>
      <div class="customer-col">
        <div class="customer-testimonial">
          <img src="./img/restaurant.jpg" alt="">
          <h6>Jonas Schedtmann</h6>
        </div>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae, ipsum. Repellat cumque nulla aliquid doloribus!</p>
      <div class="rating">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half-stroke"></i>
      </div>
      </div>
      <div class="customer-col">
        <div class="customer-testimonial">
          <img src="./img/Karen.jpeg" alt="">
          <h6>Karen Githaiga</h6>
        </div>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae, ipsum. Repellat cumque nulla aliquid doloribus!</p>
      <div class="rating">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
      </div>
      </div>
    </div>

   </section>
   
   
   <?php include "./includes/footer.php" ?>
<?php include "./includes/bootstraping.php"; ?>
</body>


