<?php
include_once 'header.php';
?>

<main>
   <section class="slider-section">
      <div class="carousel-btn">
         <a class="btn" href="#slide-1"></a>
         <a class="btn" href="#slide-2"></a>
         <a class="btn" href="#slide-3"></a>
         <a class="btn" href="#slide-4"></a>
      </div>

      <div class="slides">
         <div id="slide-1">
            <a href="#"><img src="images/banners/Banner 1.png" alt=""></a>
         </div>
         <div id="slide-2">
            <a href="#"><img src="images/banners/Banner 4.png" alt=""></a>
         </div>
         <div id="slide-3">
            <a href="#"><img src="images/banners/Banner 3.png" alt=""></a>
         </div>
         <div id="slide-4">
            <a href="#"><img src="images/banners/Banner 2.png" alt=""></a>
         </div>
      </div>
   </section>

   <!-- Top Categories Section -->

   <section class="top-categories-section text-black">
      <div class="wrapper">
         <div class="top-categories">
            <div class="top-categories-heading">
               <div>
                  <h2>Browse our <span>Top Categories</span></h2>
               </div>
            </div>
            <div class="view-more">
               <a href="#">
                  <h4>View more</h4>
                  <img src="images/icons/chevron right 1.svg" alt="more">
               </a>
            </div>
         </div>
         <div class="category-cards" id="custom-scroll">
            <div class="category-card">
               <a href="/PF-117-FINAL/fruit-products1.php">
                  <img class="card-img" src="images/categories/fruits.svg" alt="" />
                  <div class="card-content">
                     <h3>Fruits</h3>
                     <p>40 items</p>
                  </div>
               </a>
            </div>
            <div class="category-card">
               <a href="">
                  <img style="margin-left: 8px" class="card-img" src="images/categories/vegatables.svg" alt="" />
                  <div class="card-content">
                     <h3>Vegetables</h3>
                     <p>40 items</p>
                  </div>
               </a>
            </div>
            <div class="category-card">
               <a href="/PF-117-FINAL/snack-products1.php">
                  <img class="card-img" src="images/categories/snacks.svg" alt="" />
                  <div class="card-content">
                     <h3>Snacks</h3>
                     <p>40 items</p>
                  </div>
               </a>
            </div>
            <div class="category-card">
               <a href="">
                  <img class="card-img" src="images/categories/beverages.svg" alt="" />
                  <div class="card-content">
                     <h3>Beverages</h3>
                     <p>40 items</p>
                  </div>
               </a>
            </div>
            <div class="category-card">
               <a href="">
                  <img class="card-img" src="images/categories/meats.svg" alt="" />
                  <div class="card-content">
                     <h3>Meats</h3>
                     <p>40 items</p>
                  </div>
               </a>
            </div>
            <div class="category-card">
               <a href="">
                  <img class="card-img" src="images/categories/canned goods.svg" alt="" />
                  <div class="card-content">
                     <h3>Canned<br>Goods</h3>
                     <p style="padding-top: 6px;">40 items</p>
                  </div>
               </a>
            </div>
            <div class="category-card">
               <a href="">
                  <img class="card-img" src="images/categories/cleaners.svg" alt="" />
                  <div class="card-content">
                     <h3>Cleaners</h3>
                     <p>40 items</p>
                  </div>
               </a>
            </div>
            <div class="category-card">
               <a href="">
                  <img class="card-img" src="images/categories/personal care.svg" alt="" />
                  <div class="card-content">
                     <h3>Personal <br> Care</h3>
                     <p style="padding-top: 6px;">40 items</p>
                  </div>
               </a>
            </div>
            <div class="category-card">
               <a href="">
                  <img src="images/categories/cooking goods.svg" alt="" />
                  <div class="card-content">
                     <h3>Baking <br>Goods</h3>
                     <p style="padding-top: 6px;">40 items</p>
                  </div>
               </a>
            </div>
            <div class="category-card">
               <a href="">
                  <img src="images/categories/dairy.svg" alt="" />
                  <div class="card-content">
                     <h3>Dairy</h3>
                     <p>40 items</p>
                  </div>
               </a>
            </div>
         </div>
      </div>
      </div>
   </section>
   <script src="js/horizontal-scroll.js"></script>

   <!-- Hot Deals Section -->

   <section class="hot-deals-section" id="hot-deals-section">
      <div class="wrapper">
         <div class="hot-deals">
            <div class="hot-deals-heading">
               <h2>Hot Deals <span>Products</span></h2>
            </div>
            <div class="view-more">
               <a href="#">
                  <h4>View more</h4>
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
                     <img class="main" src="images/products/eggs.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Tray of Eggs</h3>
                  <p class="fw-bold text-red limited">Limited Stock</p>
                  <p>36 pieces/ tray</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 4.svg" alt="">
                     <p>(204)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱105.35 <span class="old-price">₱150.50</span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="images/icons/product-sale.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 20px; left: 25px;" src="images/products/mag chicken.svg"
                        alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Magnolia Whole Chicken</h3>
                  <p></p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 4.svg" alt="">
                     <p>(98)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱243.00 <span class="old-price">₱270.00</span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="images/icons/product-sale.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 8px; left: 55px;" class="main"
                        src="images/products/coca cola coke.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Coca-cola Softdrink</h3>
                  <p>1.25 litres bottle</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 5.svg" alt="">
                     <p>(52)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱66.50 <span class="old-price">₱70.00</span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="images/icons/product-sale.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 20px; left: 55px;" class="main"
                        src="images/products/lactum milk.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Lactum Powdered Milk</h3>
                  <p>150 grams/ box</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 3.svg" alt="">
                     <p>(45)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱239.60 <span class="old-price">₱299.50</span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="images/icons/product-sale.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 20px; left: 55px;" class="main"
                        src="images/products/lays chips.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Lay's Classic Chips</h3>
                  <p></p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 3.svg" alt="">
                     <p>(34)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱28.50 <span class="old-price">₱30.00</span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="images/icons/product-sale.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 10px; left: 80px;" class="main"
                        src="images/products/gardenia bread.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Gardenia White Bread</h3>
                  <p class="fw-bold text-red limited"></p>
                  <p></p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 3.svg" alt="">
                     <p>(48)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱56.99 <span class="old-price">₱59.99</span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="images/icons/product-sale.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 25px; left: 55px;" class="main"
                        src="images/products/toblerone chocolate.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Toblerone Chocolate</h3>
                  <p class="fw-bold text-red limited"></p>
                  <p></p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 5.svg" alt="">
                     <p>(124)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱135.00 <span class="old-price">₱150.00</span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="images/icons/product-sale.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 25px; left: 80px;" class="main"
                        src="images/products/nescafe original.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Nescafe Original Box</h3>
                  <p class="fw-bold text-red limited"></p>
                  <p></p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 4.svg" alt="">
                     <p>(75)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱159.20 <span class="old-price">₱199.00</span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="images/icons/product-sale.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 20px; left: 60px;" class="main"
                        src="images/products/tender juicy hotdog.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Tender Juicy Hotdog</h3>
                  <p class="fw-bold text-red limited"></p>
                  <p>500g /pack</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 3.svg" alt="">
                     <p>(38)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱159.20 <span class="old-price">₱190.00</span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="sale" src="images/icons/product-sale.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 10px; left: 50px;" class="main"
                        src="images/products/hellmanns mayo.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Hellmann's Real Mayo</h3>
                  <p class="fw-bold text-red limited"></p>
                  <p></p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 4.svg" alt="">
                     <p>(18)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱238.00 <span class="old-price">₱280.00</span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
         </div>
   </section>

   <!-- Featured Brands Section-->

   <section class="featured-brands-section">
      <div class="wrapper">
         <div class="featured-brands">
            <div class="featured-brands-heading">
               <h2>Featured Brands</h2>
            </div>
            <div class="view-more">
               <a href="#">
                  <h4>View more</h4>
                  <img src="images/icons/chevron right 1.svg" alt="more">
               </a>
            </div>
         </div>
         <div class="featured-brand-cards" id="custom-scroll">
            <div class="featured-brand-card">
               <a class="featured-brand-img" href="">
                  <img src="images/banners/brand 1.svg" alt="">
               </a>
               <h3 style="cursor: default;" class="text-black fs-brand fw-bold">Nestle Bear Brand</h3>
               <div>
                  <a style="text-decoration: none;" class="see-all text-primary" href="">
                     <p>See all</p>
                     <img src="images/icons/see-all.svg" alt="">
                  </a>
               </div>
            </div>
            <div class="featured-brand-card">
               <a class="featured-brand-img" href="">
                  <img src="images /banners/brand 2.svg" alt="">
               </a>
               <h3 style="cursor: default;" class="text-black fs-brand fw-bold">Lucky Me</h3>
               <div>
                  <a style="text-decoration: none;" class="see-all text-primary" href="">
                     <p>See all</p>
                     <img src="images/icons/see-all.svg" alt="">
                  </a>
               </div>
            </div>
            <div class="featured-brand-card">
               <a class="featured-brand-img" href="">
                  <img src="images/banners/brand 3.svg" alt="">
               </a>
               <h3 style="cursor: default;" class="text-black fs-brand fw-bold">Vaseline</h3>
               <div>
                  <a style="text-decoration: none;" class="see-all text-primary" href="">
                     <p>See all</p>
                     <img src="images/icons/see-all.svg" alt="">
                  </a>
               </div>
            </div>
            <div class="featured-brand-card">
               <a class="featured-brand-img" href="">
                  <a class="featured-brand-img" href="">
                     <img src="images/banners/brand 4.svg" alt="">
                  </a>
                  <h3 style="cursor: default;" class="text-black fs-brand fw-bold">Jolly</h3>
                  <div>
                     <a style="text-decoration: none;" class="see-all text-primary" href="">
                        <p>See all</p>
                        <img src="images/icons/see-all.svg" alt="">
                     </a>
                  </div>
            </div>
         </div>
      </div>
      </div>
      </div>
      </div>
   </section>

   <!-- Newly Arrived Products Section -->

   <section class="new-products-section" id="new-products-section">
      <div class="wrapper">
         <div class="new-products">
            <div class="new-products-heading">
               <h2>Newly Arrived <span>Products</span></h2>
            </div>
            <div class="view-more">
               <a href="#">
                  <h4>View more</h4>
                  <img src="images/icons/chevron right 1.svg" alt="more">
               </a>
            </div>
         </div>
         <div class="new-product-cards text-black" id="custom-scroll">
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="new" src="images/icons/new-prod.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 10px; left: 35px;" class="main"
                        src="images/products/feista ham.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Purefoods Fiesta Ham</h3>
                  <p>1.5 kilos/ pack</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 5.svg" alt="">
                     <p>(3)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱259.90<span class="old-price"></span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="new" src="images/icons/new-prod.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 15px; left: 20px;" src="images/products/tomatoes.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Tomatoes</h3>
                  <p>6 pieces/ pack</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 2.svg" alt="">
                     <p>(8)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱40.00 <span class="old-price"></span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="new" src="images/icons/new-prod.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 8px; left: 95px;" class="main"
                        src="images/products/nivea men.svg " alt="">
                  </div>
               </a>
               <div class=" product-desc bg-white">
                  <h3 class="fw-bold fs">Nivae Men Sport Shampoo</h3>
                  <p></p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 3.svg" alt="">
                     <p>(13)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱120.50 <span class="old-price"></span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="new" src="images/icons/new-prod.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 15px; left: 80px;" class="main"
                        src="images/products/maple syrup.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Maple Valley Syrup</h3>
                  <p>350ml/ bottle</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 4.svg" alt="">
                     <p>(5)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱149.99<span class="old-price"></span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="new" src="images/icons/new-prod.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 20px; left: 45px;" class="main"
                        src="images/products/red bull drink.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Red Bull Energy Drink</h3>
                  <p>250ml/ can</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 3.svg" alt="">
                     <p>(21)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱50.00 <span class="old-price"></span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="new" src="images/icons/new-prod.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 30px; left: 70px;" class="main"
                        src="images/products/nissin cup.svg " alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Nissin Spicy Cup Noodles</h3>
                  <p></p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 3.svg" alt="">
                     <p>(27)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱32.50 <span class="old-price"></span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="new" src="images/icons/new-prod.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 30px; left: 65px;" class="main"
                        src="images/products/del monte gbeans.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Del Monte Cut Green Beans</h3>
                  <p>411 grams/ can</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 4.svg" alt="">
                     <p>(4)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱45.50 <span class="old-price"></span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="new" src="images/icons/new-prod.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 10px; left: 60px;" class="main"
                        src="images/products/afiat oil.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Afiat Sunflower Oil</h3>
                  <p>500 ml/ bottle</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 5.svg" alt="">
                     <p>(15)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱32.50 <span class="old-price"></span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
            <div class="product-card">
               <a href="">
                  <div class="product-img">
                     <img class="new" src="images/icons/new-prod.svg" alt="">
                     <img class="like" src="images/icons/product-heart.svg" alt="">
                     <img style="position: absolute; top: 18px; left: 70px;" class="main"
                        src="images/products/heiz mustard.svg" alt="">
                  </div>
               </a>
               <div class="product-desc bg-white">
                  <h3 class="fw-bold">Heinz Yellow Mustard</h3>
                  <p>250 grams/ bottle</p>
                  <div class="star-rating">
                     <img src="images/icons/star-rate 3.svg" alt="">
                     <p>(6)</p>
                  </div>
                  <h3 style="margin-top: 5px;" class="fw-bold">₱80.00 <span class="old-price"></span></h3>
                  <img src="images/icons/add-item.svg" alt="" class="add-item">
               </div>
            </div>
         </div>
   </section>
</main>

<?php
   include_once 'footer.php';
?>