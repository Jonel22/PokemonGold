<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "", "dbhotelbooking");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $price = $_POST['price'];
        $check_in = $_POST['check_in'];

        // Calculate the penalty based on the cancellation period
        $today = date('Y-m-d');
        $dateDiff = date_diff(date_create($today), date_create($check_in));
        $daysDiff = $dateDiff->format("%R%a");

        $penalty = 0;
        if ($daysDiff >= 5) {
            $penalty = 0.1 * $price; // 10% penalty for 5 days or more
        } elseif ($daysDiff == 4) {
            $penalty = 0.15 * $price; // 15% penalty for 4 days
        } elseif ($daysDiff >= 2) {
            $penalty = 0.2 * $price; // 20% penalty for at least 2 days (24-hour format)
        }

        // Calculate the total price to pay
        $totalPrice = $price - $penalty;
        
        $mysqli->query("DELETE FROM booking WHERE transaction_id='$id'");

        echo "<script>
        var confirmed = confirm('Total Price to Pay: $". number_format($totalPrice, 2) ." after cancellation. Proceed with payment?');
        if (confirmed) {
            // Redirect to the payment page
            window.location.href = 'payment.php?price=". number_format($totalPrice, 2) ."';
        } else {
            // Redirect back to the item.php page without performing the payment
            window.location.href = 'item.php';
        }
        </script>";

        die();
    } else {
        echo 'Invalid request';
    }
?>