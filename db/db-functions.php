<?php

function emptyFields($username, $email, $password, $confirmPassword) {
   $result;
   // empty() - checks if the variable is empty/ no data.
   if(empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
      $result = true;
   } else {
      $result = false;
   }
   return $result;
}

function invalidUsername($username) {
   $result;
   // preg_match() - finds a match was found in a string
   if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
      $result = true;
   } else {
      $result = false;
   }
   return $result;
}

function invalidEmail($email) {
   $result;
   // filter_var() - filters a variable with a specified filter
   if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $result = true;
   } else {
      $result = false;
   }
   return $result;
}

function passwordMatch($password, $confirmPassword) {
   $result;
   if($password !== $confirmPassword) {
      $result = true;
   } else {
      $result = false;
   }
   return $result;
}

function usernameExists($conn, $username, $email) {
   // SQL query for checking the username and email if its existed. / Prepared Statement
   $sql = "SELECT * FROM cm_users WHERE cm_username = ? OR cm_email = ?;";
   // Submit/ Initialized the prepared statement to the database
   $prep_stmt = mysqli_stmt_init($conn);
   // Test the prepared statement
   if(!mysqli_stmt_prepare($prep_stmt, $sql)) {
      header("location: ../sign-up.php?error=prepstmtfailed");
      exit();
   }
   mysqli_stmt_bind_param($prep_stmt, "ss", $username, $email);
   mysqli_stmt_execute($prep_stmt);

   $resultData = mysqli_stmt_get_result($prep_stmt);

   // Test the result Data
   if($row = mysqli_fetch_assoc($resultData)) {
      return $row;
   } else {
      $result = false;
      return $result;
   }

   mysqli_stmt_close($prep_stmt);
}

function passwordChar($password) {
   $result;
   // Password should be at least one uppercase, lowercase, and a number
   $uppercase = preg_match('@[A-Z]@', $password);
   $lowercase = preg_match('@[a-z]@', $password);
   $number    = preg_match('@[0-9]@', $password);
   if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
      $result = true;
   } else {
      $result = false;
   }
   return $result;   
}

   function createUser($conn, $username, $email, $password) {

   $sql = "INSERT INTO cm_users (cm_username, cm_email, cm_password) VALUES (?, ?, ?);";

   $prep_stmt = mysqli_stmt_init($conn);
   // Test the prepared statement
   if(!mysqli_stmt_prepare($prep_stmt, $sql)) {
      header("location: ../sign-up.php?error=prepstmtfailed");
      exit();
   }

   // Hashing password for more security in the db
   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($prep_stmt, "sss", $username, $email, $hashedPassword);
   mysqli_stmt_execute($prep_stmt);
   mysqli_stmt_close($prep_stmt);

   header("location: ../sign-up.php?error=none");
   exit();
}

function emptyFieldLogIn($username, $password) {
   $result;
   // empty() - checks if the variable is empty/ no data.
   if(empty($username) || empty($password)) {
      $result = true;
   } else {
      $result = false;
   }
   return $result;
}

function logInUser($conn, $username, $password) {
   $users_id =  usernameExists($conn, $username, $username);

   if($users_id === false) {
      header("location: ../sign-in.php?error=incorrectlogin");
      exit();
   }

   $pwdHashed = $users_id["cm_password"];
   $checkPassword = password_verify($password, $pwdHashed);

   if($checkPassword === false) {
      header("location: ../sign-in.php?error=incorrectpwd");
      exit();
   } else if ($checkPassword === true) {
      // Start a session variables
      session_start();
      // Setting session variables
      $_SESSION["username"] = $users_id["cm_user_id"];
      $_SESSION["password"] = $users_id["cm_username"];
      header("location: ../home.php");
      exit();
   }
}