<?php
  // Step 1: Create Database Connection
  $db_host = 'localhost';
  $db_user = 'root';
  $db_pass = 'root';
  $db_name = 'local_idm232_01';
  $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

  // Check the connection is good with no errors
  if (mysqli_connect_errno()) {
      die('Database connection failed: ' .
        mysqli_connect_error() .
        ' (' . mysqli_connect_errno() . ')'
      );
  }
  ?>
