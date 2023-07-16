<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $remember = $_POST["remember"];

    if($remember){
        setcookie("username", $email, time() + (30 * 24 * 60 * 60));
        setcookie("password", $password, time() + (30 * 24 * 60 * 60));
    }

    // Database configuration
    $servername = "localhost";
    $username = "root";
    $dbname = "dbhotelbooking";

    // Create a database connection
    $conn = new mysqli($servername, $username, '', $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query
    $sql = "SELECT * FROM registration WHERE email = '$email'";
    $result = $conn->query($sql);

    // Check if a user with the provided email exists
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Verify the password
        if ($password == $row["password"]) {
            // Password matches, set session variables and redirect to index.php
            $_SESSION["email"] = $email;
            header("Location: index.php");
            exit();
        } else {
            // Invalid password
            $_SESSION['reservation_error'] = "Invalid email or password.";
            header("Location: index.php");
            exit();
        }
    } else {
        // User with the provided email doesn't exist
        $_SESSION['reservation_error'] = "User doesn't exist";
        header("Location: index.php");
        die();
    }
}
?>