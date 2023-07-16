<?php
session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "dbhotelbooking");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $adult = $_POST['adult'];
    $children = $_POST['children'];
    $type = $_POST['type'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    // Calculate the difference in days between check-in and today's date
    $today = date('Y-m-d');
    $date_diff = date_diff(date_create($today), date_create($check_in));
    $days_diff = $date_diff->format("%R%a");

    if ($days_diff < 2) {
        // Reservation is not made at least 2 days in advance
        $_SESSION['reservation_error'] = "try a different day";
        header("Location: item.php");
        exit();
    } else {
        $sql = "SELECT price FROM rooms WHERE room='$type'";
        $room = $mysqli->query($sql);
        $row = $room->fetch_assoc();
        $price = $row['price'];
        $name1 = strtoupper(substr($name, 0, 2));
        $month = date('F', strtotime($check_in));
        $month1 = strtoupper(date('M', strtotime($check_in)));
        $month2 = (date('m', strtotime($check_in)));
        $day = date('d', strtotime($check_in));
        $year = date('Y', strtotime($check_in));
        $year1 = substr($year, -2);
        $type1 = substr($type, 0, 3);

        $count = $_SESSION['count'];
        $id = $name1 . $month1 . $day . $month2 . $year1 .'-'. $type1 . $count;
        $sql = "UPDATE booking SET transaction_id='$id', name='$name', check_in='$check_in', check_out='$check_out', adult='$adult', children='$children', month='$month', day='$day', year='$year', type='$type', price='$price' WHERE count='$count'";
        $mysqli->query($sql);

        header('Location: item.php');
        die();        
    }
}
?>