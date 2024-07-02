<?php
// Add error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "Robot";
    // Echo or var_dump to check values
    echo "Servername: " . $servername . "<br>";
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br>";
    echo "Database name: " . $dbname . "<br>";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $buttonname = $_POST['buttonname'];
    // Assuming id is an auto-increment column
    $sql = "INSERT INTO ButtonClicked (buttonname) VALUES ('$buttonname')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
?>
