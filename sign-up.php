<?php
include 'header4.php';
?>

<div class="log-in-section text-black ff-primary">
   <img src="images/about-bg/log in bg.svg" alt="">
   <div class="sign-up-box">
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
         <div class="sign-up-form" style="margin-bottom: 10px;">
            <h1>Sign Up</h1>
            <div>
               <?php
         if(isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
               echo "<p style='color: #e93d3d; font-size: 12px; padding: 10px; font-weight: bold;'>*Please fill out all of the fields to log in.</p>";
            
            }else if ($_GET["error"] == "none") {
               echo "<p style=' font-size: 12px; padding: 10px; font-weight: bold;'>Your account has been created.<a href=sign-in.php style='color: hsl(71 58% 50%); font-size: 13px; text-decoration: none; font-weight: bold;'> Log In here!</a></p>";
            }
            else if ($_GET["error"] == "invalidusername" || $_GET["error"] == "usersnameexisted") {
               echo "<p style='color: #e93d3d; font-size: 12px; padding: 10px; font-weight: bold;'>*Username already exists!</p>";
            } 
            else if ($_GET["error"] == "invalidemail") {
               echo "<p style='color: #e93d3d; font-size: 12px; padding: 10px; font-weight: bold;'>*Email Address already exists.</p>";
            }
            else if ($_GET["error"] == "passworddoesntmatch") {
               echo "<p style='color: #e93d3d; font-size: 12px; padding: 10px; font-weight: bold;'>*Password doesn't match. Please try again!</p>";
            }
            else if ($_GET["error"] == "weakpassword") {
               echo "<p style='color: #e93d3d; font-size: 12px; padding: 10px; font-weight: bold;'>*Password should contains 8 characters with least one uppercase, lowercase, and a number.</p>";
            }
            else if ($_GET["error"] == "prepstmtfailed") {
               echo "<p style='color: #e93d3d; font-size: 12px; padding: 10px; font-weight: bold;'>*Opps! Something went wrong.</p>";
            }
         }
   ?>
            </div>
            <p style="font-size: 14px;">Please type in your information to create an account.</p>
            <form action="db/sign-up.inc.php" method="post" autocomplete="off">
               <div class="input-field">
                  <img src="images/icons/user sign in.svg" alt="">
                  <input type="text" name="username" placeholder="Username">
               </div>
               <div class="input-field">
                  <img src="images/icons/mail sign up.svg" alt="">
                  <input type="text" name="email" placeholder="E-mail Address">
               </div>
               <div class="input-field">
                  <img src="images/icons/pass sign in.svg" alt="">
                  <input type="password" name="password" placeholder="Password">
               </div>
               <div class="input-field">
                  <img src="images/icons/pass sign in.svg" alt="">
                  <input type="password" name="confirm_password" placeholder="Confirm Password">
               </div>
               <div class="infos flex">
                  <div class="remember flex">
                     <input class="checkbox" type="checkbox" name="" id="">
                     <p style="font-size: 12px;">Creating an account means you agree with our Terms <br>of
                        Service,
                        Privacy Policy, and Cookies.</p>
                  </div>
               </div>
               <button type="submit" name="submit" class="bg-accent text-white flex">Create Account<img
                     src="images/icons/create acc.svg" alt=""></button>
            </form>
            <div class="log-in-opt">
               <div></div>
               <p class="fs-xs fw-semi-bold" style="margin: 10px;">Or sign up with</p>
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
            <p style="font-size: 14px; cursor: default;">Already have an account?<a class="text-accent"
                  href="sign-in.php">Log in
                  here</a>
            </p>
         </div>
      </div>
   </div>

   <?php
include 'footer.php';
?>