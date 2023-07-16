    <?php
session_start();

  if(!isset($_SESSION['email'])){
    $_SESSION['reservation_error'] = "You must login first.";
    header("Location: rooms.php");
    exit();
}

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "dbhotelbooking");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $adult = $_POST['adult'];
    $children = $_POST['children'];
    $type = $_POST['type'];

    // Calculate the difference in days between check-in and today's date
    $today = date('Y-m-d');
    $date_diff = date_diff(date_create($today), date_create($check_in));
    $days_diff = $date_diff->format("%R%a");

    if ($days_diff < 2) {
        // Reservation is not made at least 2 days in advance
        $_SESSION['reservation_error'] = "Reservations must be made at least 2 days in advance.";
        header("Location: rooms.php");
        exit();
    } else {
        $email = $_SESSION["email"];
        $sql = "SELECT name FROM registration WHERE email = '$email'";
        $result = $mysqli->query($sql);
        $sql = "SELECT price FROM rooms WHERE room='$type'";
        $room = $mysqli->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $row1 = $room->fetch_assoc();
            $name = $row["name"];
            $price = $row1["price"];

            $name1 = strtoupper(substr($name, 0, 2));
            $month = date('F', strtotime($check_in));
            $month1 = strtoupper(date('M', strtotime($check_in)));
            $month2 = (date('m', strtotime($check_in)));
            $day = date('d', strtotime($check_in));
            $year = date('Y', strtotime($check_in));
            $year1 = substr($year, -2);
            $type1 = substr($type, 0, 3);

            $sql = "SELECT COUNT(*) AS count FROM booking";
            $result = $mysqli->query($sql);

            if ($result) {
                $row = $result->fetch_assoc();
                $count = $row['count'] + 1;
                $formattedCount = str_pad($count, 5, '0', STR_PAD_LEFT);
            } else {
                $_SESSION['reservation_error'] = "Error: " . $mysqli->error;
            }

            $id = $name1 . $month1 . $day . $month2 . $year1 .'-'.$type1 . $formattedCount;
            $mysqli->query("INSERT INTO booking VALUES ('$id', '$name', '$check_in', '$check_out', '$adult', '$children', '$month', '$day', '$year', '$type','$price', $count)");

            header("Location: item.php");
            die();
        }
    }
}
?>