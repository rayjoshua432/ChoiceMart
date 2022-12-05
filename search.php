<?php
   include_once 'header3.php';
?>

<main>
   <section class="search-container text-black fs-reg ff-primary">
      <img src="images/banners/search-banner.svg" alt="">
      <form action="" method="post">
         <div class="dropdown">
            <p class="fw-extra-bold">There are more than 1,000+ products from diffrent categories to choose from!</p>
            <input type="text" name="" id="" placeholder="Search a product...">
            <button class="dropbtn">Select a Category <img class="list" src="images/icons/chevron down.1.svg" alt="">
            </button>
            <div class="dropdown-content">
               <a href="#">Fruits</a>
               <a href="#">Vegetables</a>
               <a href="#">Snacks</a>
               <a href="#">Beverages</a>
               <a href="#">Meats</a>
               <a href="#">Canned Goods</a>
               <a href="#">Cleaners</a>
               <a href="#">Personal Care</a>
               <a href="#">Baking Goods</a>
               <a href="#">Dairy</a>
            </div>
            <button class="search-button">
               <a href="/PF-117-FINAL/search-result.php"><img style="padding: 10px 0 0 15px;"
                     src="images/icons/search 2.svg" alt=""></a>
            </button>
         </div>
      </form>
   </section>
   <section class="hot-deals-section" id="hot-deals-section">
      <div class="wrapper">
         <div class="hot-deals">
            <div class="hot-deals-heading">
               <h2>Fruit <span>Products</span></h2>
            </div>
            <div class="view-more">
               <a href="#">
                  <h4>Filter by</h4>
                  <img src="images/icons/chevron right 1.svg" alt="more">
               </a>
            </div>
         </div>
         <div class="product-cards text-black" id="custom-scroll">
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="images/icons/product-sale.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 10px; left: 50px;" class="main"
                        src="images/products/fruits/pineapple.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Pineapple</h3>
                  <p class="fw-bold text-red limited">Limited Stock</p>
                  <p>1 kilo </p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 4.svg" alt="">
                     <p>(34)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱94.00<span class="old-price"></span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 10px; left: 50px;" class="main"
                        src="images/products/fruits/redapple.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Red Apple</h3>
                  <p>6 pieces/ pack</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 4.svg" alt="">
                     <p>(204)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱75.05</h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: -40px; left: 50px;" class="main"
                        src="images/products/fruits/grapes.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Grapes</h3>
                  <p>Approx. 500g</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 3.svg" alt="">
                     <p>(45)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱162.15</h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 10px; left: 50px;" class="main"
                        src="images/products/fruits/lanzones.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Lanzones</h3>
                  <p>Approx. 1kg</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 4.svg" alt="">
                     <p>(52)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱280.00</h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 20px; left: 40px;" class="main"
                        src="images/products/fruits/mango.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Mango</h3>
                  <p>Approx. 500g</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 3.svg" alt="">
                     <p>(45)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱77.50</h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
   </section>
   <section class="hot-deals-section" id="hot-deals-section">
      <div class="wrapper">
         <div class="hot-deals">
            <div class="hot-deals-heading">
               <h2>Vegetable <span>Products</span></h2>
            </div>
            <div class="view-more">
               <a href="#">
                  <h4>Filter by</h4>
                  <img src="images/icons/chevron right 1.svg" alt="more">
               </a>
            </div>
         </div>
         <div class="product-cards text-black" id="custom-scroll">
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 45px; left: 70px;" class="main"
                        src="images/products/vegetables/onion.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Red Onion</h3>
                  <p>Approx. 500g</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 5.svg" alt="">
                     <p>(278)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱150.40</h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 15px; left: 40px;" class="main"
                        src="images/products/vegetables/beansprout.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Bean Sprout</h3>
                  <p>Approx. 500g</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 4.svg" alt="">
                     <p>(215)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱26.25</h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="" alt="">
                     <img class=" like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 10px; left: 50px;" src="images/products/vegetables/tomato.svg"
                        alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Tomatoes</h3>
                  <p>Approx. 500g</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 4.svg" alt="">
                     <p>(169)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱117.00</h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 25px; left: 70px;" class="main"
                        src="images/products/vegetables/eggplant.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Eggplant</h3>
                  <p>Approx. 500g</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 4.svg" alt="">
                     <p>(217)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱26.95</h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 25px; left: 30px;" src="images/products/vegetables/okra.svg"
                        alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Okra</h3>
                  <p>Approx. 300g</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 4.svg" alt="">
                     <p>(194)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱18.35</h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
   </section>
   <section class="hot-deals-section" id="hot-deals-section">
      <div class="wrapper">
         <div class="hot-deals">
            <div class="hot-deals-heading">
               <h2>Snack <span>Products</span></h2>
            </div>
            <div class="view-more">
               <a href="#">
                  <h4>Filter by</h4>
                  <img src="images/icons/chevron right 1.svg" alt="more">
               </a>
            </div>
         </div>
         <div class="product-cards text-black" id="custom-scroll">
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="images/sale/15.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 20px; left: 50px;" class="main"
                        src="images/products/snacks/skyflakes.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">M.Y. San Skyflakes Cracker</h3>
                  <p>10 pieces / pack</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 4.svg" alt="">
                     <p>(178)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱46.58 <span class="old-price">₱54.80</span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="images/sale/10.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 20px; left: 50px;"
                        src="images/products/snacks/nagarayacrackers.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Nagaraya Cracker Nuts</h3>
                  <p>Hot And Spicy Flavor </p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 4.svg" alt="">
                     <p>(171)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱10.40 <span class="old-price">₱11.55</span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="images/sale/9.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 15px; left: 55px;" class="main"
                        src="images/products/snacks/eggnog.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Nissin Eggnog Cookies</h3>
                  <p>10 pieces/ pack</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 4.svg" alt="">
                     <p>(155)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱53.60 <span class="old-price">₱58.90</span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="images/sale/7.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 20px; left: 55px;" class="main"
                        src="images/products/snacks/waferchoco.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Nissin Wafer Chocolate</h3>
                  <p>10 pieces / pack</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 5.svg" alt="">
                     <p>(277)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱55.57 <span class="old-price">₱59.75</span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="images/sale/16.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 10px; left: 55px;" class="main"
                        src="images/products/snacks/fita.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">M.Y Sans Fita Biscuit</h3>
                  <p>10 pieces/ pack</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 3.svg" alt="">
                     <p>(86)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱48.34 <span class="old-price">₱57.55</span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
         </div>
   </section>
</main>

<?php
   include_once 'footer.php';
?>