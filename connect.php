<?php
  class Connect{

    public static function getConnection(){
      // Servername
      $servername = "localhost";
      // Username
      $username = "username";
      // Password
      $password = "password";
      // Database
      $database = "database";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $database);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else {
      }
      return $conn;
    }
  }
?>
