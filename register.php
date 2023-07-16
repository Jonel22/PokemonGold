<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];
        $pin_code = $_POST['pin_code'];
        $date_of_birth = $_POST['date_of_birth'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if ($password === $confirm_password) {
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
        
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                $mysqli = new mysqli("localhost", "root", "", "dbhotelbooking");
        
                $filename = 'avatar.png';
                if ($_FILES['picture']['error'] > 0) {
                    echo 'file error'; die();
                } else {
                    $destination = 'img/'; // folder of your project
                    $tmp_name = $_FILES['picture']['tmp_name'];
                    $filename = $_FILES['picture']['name'];
                    $destination_path = $destination . $filename;
            
                    // Move the uploaded file to the destination directory
                    if (move_uploaded_file($tmp_name, $destination_path)) {
                        // Enclose the values in single quotes in the SQL query
                        $mysqli->query("INSERT INTO registration VALUES (NULL, '$name', '$email', '$phone_number', '$filename', '$address', '$pin_code', '$date_of_birth', '$password', '$confirm_password')");
                        header('location: index.php');
                        die();
                    } else {
                        $_SESSION['reservation_error'] = 'Failed to move the uploaded file';
                        header("Location: index.php");
                        die();
                    }
                }
            }
        } else {
            $_SESSION['reservation_error'] = "Password and Confirm Password are not the same.";
            header('location: index.php');
            die();
        }
    }
?>