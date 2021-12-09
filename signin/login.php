<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop3d";
session_start();

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


        $username = stripslashes($_POST['usename']);    // removes backslashes
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_POST['pwd']);
        $password = mysqli_real_escape_string($conn, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND pwd=' $password'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        echo $password."<br>";
        $rows = mysqli_num_rows($result);
        echo $rows."<br>";
        if ($rows !=0) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: ../shopping/home.html");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
   
  ?>
