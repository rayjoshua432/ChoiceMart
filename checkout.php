<?php
   include_once 'header.php';
?>

<main class="ff-primary text-black">
   <form action="">
      <div class="product-lists">
         <img src="images/banners/basket.svg" alt="">
         <h2 class="fw-bold fs-l">Checkout Details</h2>
      </div>
      <section class="back-to-cart">
         <a class="back fw-bold" href="shopping-basket.php"><img src="images/icons/back sign in.svg" alt="">
            <p>Back to Cart</p>
         </a>
      </section>
      <div class="checkout-form wrapper">
         <div class="checkout-1">
            <div class="checkout-title">
               <img src="images/payment/checkout1.svg" alt="">
               <h2 class="fs-m-2 fw-bold">Contact Information</h2>
            </div>
            <div class="contact-info">
               <label style="margin-bottom: 16px; " for="">E-mail Address</label>
               <input type="text" name="" id="">
               <label style="margin-bottom: 16px; " for="">Contact Number</label>
               <input type="text" name="" id="">
            </div>

         </div>
         <div class="checkout-2">
            <div class="checkout-title">
               <img src="images/payment/checkout2.svg" alt="">
               <h2 class="fs-m-2 fw-bold">Shipping Address</h2>
            </div>
            <div class="contact-info">
               <div class="two-col">
                  <label for="">First Name</label>
                  <label for="">Last Name</label>
                  <input type="text" name="" id="">
                  <input type="text" name="" id="">
               </div>
               <label style="margin-bottom: 16px; " for="">Address</label>
               <input type="text" name="" id="">
               <div class="two-col">
                  <label for="">Province</label>
                  <label for="">City</label>
                  <input type="text" name="" id="">
                  <input type="text" name="" id="">
               </div>
            </div>
         </div>
         <div class="checkout-3">
            <div class="checkout-title">
               <img src="images/payment/checkout3.svg" alt="">
               <h2 class="fs-m-2 fw-bold">Payment Method</h2>
            </div>
            <p for="">All transaction are secure and encrypted.</p>
            <div class="payment-methods-checkout">
               <button><img src="images/payment/gcash.svg" alt=""></button>
               <button><img src="images/payment/coins.svg" alt=""></button>
               <button><img src="images/payment/visa.svg" alt=""></button>
               <button><img src="images/payment/paypal.svg" alt=""></button>
            </div>
         </div>
         <div class="checkout-4">
            <div class="checkout-title">
               <span class="fs-l fw-bold text-accent">3</span>
               <h2 class="fs-m-2 fw-bold">Cart Items</h2>
            </div>
            <div class="item-1">
               <div class="item-img" style="border: none; background-color: var(--color-white); height: 200px">
                  <img src="images/products/snacks/piattos.svg" alt="">
               </div>
               <div class="item-desc">
                  <p class="price">₱15.30</p>
                  <h3>Jack & Jill Piattos</h3>
                  <p>Cheese Flavor</p>
               </div>
            </div>
            <div class="item-1">
               <div class="item-img" style="border: none; background-color: var(--color-white); height: 200px">
                  <img style="width: 150px; padding-top: 35px;" src="images/products/eggs.svg" alt="">
               </div>
               <div class="item-desc">
                  <p class="price">₱105.35 </p>
                  <h3>Tray of Eggs</h3>
                  <p>36 pieces/ tray</p>
               </div>
            </div>
            <div class="item-1">
               <div class="item-img" style="border: none; background-color: var(--color-white); height: 200px">
                  <img src="images/products/coca cola coke.svg" alt="">
               </div>
               <div class="item-desc">
                  <p class="price">₱66.50</p>
                  <h3>Coca-cola Softdrink</h3>
                  <p>1.25 litres bottle</p>
               </div>
            </div>
            <div class="checkout-menu">
               <div class="checkout-subtotal fs-reg fw-semi-bold">
                  <p>Items Subtotal:</p>
                  <p>₱187.15</p>
               </div>
               <div class="checkout-shipping fs-reg fw-semi-bold">
                  <p>Shipping:</p>
                  <p>₱40.00</p>
               </div>
               <div class="checkout-taxes fs-reg fw-semi-bold">
                  <p>Taxes:</p>
                  <p>₱14.75</p>
               </div>
               <hr>
               <div class="checkout-total fs-m fw-bold">
                  <p>Total:</p>
                  <p>₱241.90</p>
               </div>
               <button class="checkout-btn fw-bold">Complete Order</button>
            </div>
         </div>
      </div>
   </form>

</main>

<?php
   include_once 'footer.php';
?>