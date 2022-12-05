<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Choice Mart PH</title>
   <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
   <link rel="stylesheet" href="styles/style.css">
   <link rel="stylesheet" href="styles/reset.css">
</head>

<body>
   <header class="main-header">
      <div class="container">
         <nav class="top-nav">
            <ul class="top-nav-list">
               <li><a href="">Contact us<img class="small-icon" src="images/icons/down.svg" alt=""></a></li>
               <li><a href="">Help Centre</a></li>
               <li><a href=""><img class="small-icon" src="images/icons/language.svg" alt="">English</a></li>
            </ul>
         </nav>
         <nav class="primary-nav">
            <a class="company-logo" href="home.php"><img src="images/CM PH 1.png" alt=""></a>
            <div class="search-bar">
               <input type="text" name="" id="" placeholder="What are you looking for?"><button class="regular-button">
                  <img src="images/icons/search 2.svg" alt="">
               </button>
            </div>
            <div class="delivery-address text-black">
               <img src="images/icons/location.svg" alt="">
               <h3 class="fw-medium">Delivery to <span class="fw-bold">Ecoland Drive, Davao City</span></h3>
               <img style="width: 10px; margin-left: 8px;" src="images/icons/chevron down.1.svg" alt="">
            </div>
            <div class="account">
               <img class="icon" src="images/icons/cart1.svg" alt=""><span class="bg-red" style="left: 38px;
   top: 1px;">3</span>
               <a href="sign-in.php"><button class="regular-button text-white bg-accent">Sign In</button></a>
            </div>
         </nav>
         <div class="secondary-nav text-black fs-regular fw-bold">
            <ul class="secondary-nav-list">
               <li><a href="home.php">Home</a></li>
               <li><a href="about.php">About</a></li>
               <li><a href="#hot-deals-section">Hot Deals</a></li>
               <li><a href="">Promotions</a></li>
               <li><a href="">Gift Cards & Vouchers</a></li>
            </ul>
         </div>
      </div>
   </header>