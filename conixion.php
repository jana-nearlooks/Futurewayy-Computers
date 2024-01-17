<?php
// try {
//     // Database connection parameters
//     $host = "127.0.0.1:3306"; // Database server host
//     $dbname = "u195178144_fway_computers"; // Database name
//     $user = "u195178144_futurewayy_com"; // Database username
//     $password = "Futurewayy@2024"; // Database password

//     // Create a PDO object to connect to the database
//     $con = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

//     // Set PDO attributes to handle errors
//     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     // If an exception (error) occurs, catch it and display an error message
//     echo "Connection failed: " . $e->getMessage();
// }


try {
  // Database connection parameters
  $host = "localhost"; // Database server host
  $dbname = "futurewayy_computers"; // Database name
  $user = "root"; // Database username
  $password = ""; // Database password

  // Create a PDO object to connect to the database
  $con = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

  // Set PDO attributes to handle errors
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  // If an exception (error) occurs, catch it and display an error message
  echo "Connection failed: " . $e->getMessage();
}
?>





