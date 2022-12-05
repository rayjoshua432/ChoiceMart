<?php
   include_once 'header.php';
?>

<main class="ff-primary text-black">
   <div class="product-lists">
      <img src="images/banners/basket.svg" alt="">
      <h2 class="fw-bold fs-l">My Shopping Basket</h2>
   </div>
   <div class="wrapper">
      <section>
         <ul class="product-info-nav">
            <li>Product List</li>
            <li>Unit Price</li>
            <li>Quantity</li>
            <li>Total</li>
         </ul>
         <hr>
         <div class="item-list grid">
            <div class="product-item">
               <img class="item-img" src="images/products/snacks/piattos.svg" alt="">
            </div>
            <h3 class="fw-semi-bold">Jack & Jill Piattos <br><span class="fs-s fw-regular">Cheese Flavor</span></h3>
            <div>
               <p>₱15.30</p>
            </div>
            <div class="item-quantity">
               <button><img src="images/icons/qty1.svg" alt=""></button>
               <p>1</p>
               <button><img src="images/icons/qty2.svg" alt=""></button>
            </div>
            <div class="flex" style="gap: 120px;">
               <p>₱15.30</p>
               <img src="images/icons/remove item.svg" alt="">
            </div>
         </div>
         <hr>
         <div class="item-list grid">
            <div class="product-item">
               <img class="item-img" src="images/products/eggs.svg" alt="">
            </div>
            <h3 class="fw-semi-bold">Tray of Eggs<br><span class="fs-s fw-regular">36 pieces/ tray</span></h3>
            <div>
               <p>₱105.35</p>
            </div>
            <div class="item-quantity">
               <button><img src="images/icons/qty1.svg" alt=""></button>
               <p>1</p>
               <button><img src="images/icons/qty2.svg" alt=""></button>
            </div>
            <div class="flex" style="gap: 120px;">
               <p>₱15.30</p>
               <img src="images/icons/remove item.svg" alt="">
            </div>
         </div>
         <hr>
         <div class="item-list grid">
            <div class="product-item">
               <img class="item-img" src="images/products/coca cola coke.svg" alt="">
            </div>
            <h3 class="fw-semi-bold">Coca-cola Softdrink<br><span class="fs-s fw-regular">1.25 litres bottle</span></h3>
            <div>
               <p>₱66. 50</p>
            </div>
            <div class="item-quantity">
               <button><img src="images/icons/qty1.svg" alt=""></button>
               <p>1</p>
               <button><img src="images/icons/qty2.svg" alt=""></button>
            </div>
            <div class="flex" style="gap: 120px;">
               <p>₱15.30</p>
               <img src="images/icons/remove item.svg" alt="">
            </div>
         </div>
         <hr>

      </section>
   </div>
   <section class="basket-menu">
      <div>
         <h3 class="fs-m fw-semi-bold">Any special instructions for us before checking out?</h3>
         <textarea name="" id="" placeholder="Type your requests here..."></textarea>
      </div>
      <div>
         <div class="subtotal fs-m fw-bold">
            <p>Items Subtotal:</p>
            <p>₱187.15</p>
         </div>
         <p class="fs-s" style="margin: 24px 0;">Shipping & Taxes calculated at Checkout</p>
         <a href="checkout.php"><button class="subtotal-cta">Proceed to Checkout</button></a>
         <hr style="width: 400px;">
         <div class="payment-methods">
            <button><img src="images/payment/gcash.svg" alt=""></button>
            <button><img src="images/payment/coins.svg" alt=""></button>
            <button><img src="images/payment/visa.svg" alt=""></button>
            <button><img src="images/payment/paypal.svg" alt=""></button>
         </div>
      </div>
   </section>
</main>

<?php
   include_once 'footer.php';
?>