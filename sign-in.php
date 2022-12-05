<?php
include 'header2.php';
?>

<div class="log-in-section text-black ff-primary">
   <img src="images/about-bg/log in bg.svg" alt="">
   <div class="sign-in-box">
      <div class="box-1">
         <h2 style="font-size: 32px; line-height: 20px;" class="fw-semi-bold">Welcome to</h2>
         <h3 style="font-size: 40px;" class="fw-extra-bold">Choice Mart PH!</h3>
         <p>The best online grocery platform for your daily needs.</p>
         <img class="bg-img" src="images/about-bg/bg2.png" alt="">
         <img class="main-img" src="images/about-bg/man.png" alt="">
      </div>
      <div class="box-2">
         <div class="top-btn">
            <div class="top-btn1">
               <a class="back fw-bold" href="home.php" style="margin-left: 10px;"><img
                     src="images/icons/back sign in.svg" alt="">
                  <p>Back</p>
               </a>
            </div>
            <img class="top-btn2" style="height: 25px; width: 25px; cursor: pointer;"
               src="images/icons/help sign in.svg" alt="">
         </div>
         <div class="sign-in-form" style="margin-bottom: 20px;">
            <h1>Log In</h1>
            <div>
               <?php
                  if(isset($_GET["error"])) {
                     if ($_GET["error"] == "emptyfieldslogin") {
                        echo "<p style='color: #e93d3d; font-size: 12px; font-weight: bold;'>*Please fill out all of the fields to log in.</p>";
                     }
                     if ($_GET["error"] == "invalidusername") {
                         echo "<p style='color: #e93d3d; font-size: 12px; font-weight: bold;'>*Username / Email doesn't exists.</p>";
                     }
                     if ($_GET["error"] == "incorrectpwd") {
                        echo "<p style='color: #e93d3d; font-size: 12px; font-weight: bold;'>*Incorrect Password.</p>";
                     }
                  }
               ?>
            </div>
            <p>Log in with your information that you entered during your <br>registration.</p>
            <form action="db/sign-in.inc.php" method="post">
               <div class="input-field">
                  <img src="images/icons/user sign in.svg" alt="">
                  <input type="text" name="username" placeholder="myemailaddress@hotmail.com">
               </div>
               <div class="input-field">
                  <img src="images/icons/pass sign in.svg" alt="">
                  <input type="password" name="password" placeholder="******************">
               </div>
               <div class="infos flex">
                  <div class="remember flex">
                     <input class="checkbox" type="checkbox" name="">
                     <p>Remember me</p>
                  </div>
                  <a href="">Forgot Password?</a>
               </div>
               <button class="bg-accent text-white flex" type="submit" name="submit">Log In<img
                     src="images/icons/sign in.svg" alt=""></button>
            </form>
            <div class="log-in-opt">
               <div></div>
               <p class="fs-xs fw-semi-bold" style="margin: 10px;">Or log in with</p>
               <div></div>
            </div>

            <div class="social-med flex" style="gap:24px;">
               <a href=""><img src="images/icons/google si.svg" alt=""></a>
               <a href=""><img src="images/icons/fb si.svg" alt=""></a>
               <a href=""><img src="images/icons/apple si.svg" alt=""></a>
               <a href=""><img src="images/icons/twitter si.svg" alt=""></a>
            </div>
         </div>
         <div class="sign-up-p">
            <p style="font-size: 14px; cursor: default;">Don't have an account yet?<a class="text-accent"
                  href="sign-up.php">Sign
                  up here</a>
            </p>
         </div>
      </div>
   </div>

   <?php
include 'footer.php';
?>