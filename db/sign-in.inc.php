<?php

if(isset($_POST['submit'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];

   require_once 'db-conn.php';
   require_once 'db-functions.php';

   if(emptyFieldLogIn($username, $password) !==false) {
      header("location: ../sign-in.php?error=emptyfieldslogin");
      exit();
   } 
   if(invalidUsername($username) !==false) {
      header("location: ../sign-in.php?error=invalidusername");
      exit();
   }
   
   logInUser($conn, $username, $password);
} else {
   header("location: ../sign-in.php");
   exit();
}