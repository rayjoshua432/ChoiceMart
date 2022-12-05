<?php

// Check is a variable is set/declared/empty inside the code. 
if (isset($_POST['submit'])) {
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $confirmPassword = $_POST['confirm_password'];

   // require_once - used to embed PHP code from another file. If it is not found there will be a fatal error and the program stops. 
   require_once 'db-conn.php';
   require_once 'db-functions.php';

   // Error Handlers Calling
   if(emptyFields($username, $email, $password, $confirmPassword) !==false) {
      header("location: ../sign-up.php?error=emptyfields");
      exit();
   }
   if(invalidUsername($username) !==false) {
      header("location: ../sign-up.php?error=invalidusername");
      exit();
   }
   if(invalidEmail($email) !==false) {
      header("location: ../sign-up.php?error=invalidemail");
      exit();
   }
   if(passwordMatch($password, $confirmPassword) !==false) {
      header("location: ../sign-up.php?error=passworddoesntmatch");
      exit();
   }
   if(usernameExists($conn, $username, $email) !==false) {
      header("location: ../sign-up.php?error=usersnameexisted");
      exit();
   }
   if(passwordChar($password) !==false) {
      header("location: ../sign-up.php?error=weakpassword");
      exit();
   }


   createUser($conn, $username, $email, $password);

} else {
   // header - sends a raw HTTP header to the user. 
   header("location: ../sign-up.php");
   exit();
}