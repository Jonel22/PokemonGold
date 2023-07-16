<!DOCTYPE html>
<html>
<head>
<title>Pokemon Go WebStore</title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <style>
        
        .payment-container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            text-align: center;
        }
        
        .payment-info {
            margin-bottom: 20px;
        }
        
        .payment-info label {
            display: block;
            font-weight: bold;
        }
        
        .payment-info span {
            display: inline-block;
            margin-left: 10px;
        }
        
        .payment-button {
            text-align: center;
            margin-top: 20px;
        }
        
        .payment-button button {
            padding: 10px 20px;
            background-color: #4CAF50;
            border: none;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        
        .payment-button button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<?php 
	session_start();

    if(isset($_GET["logout"])){
		session_destroy();
		header("Location: payment.php");
		exit;
	}

	if(!isset($_SESSION['email'])){
		include('inc/header.php');
	}else{
		include('inc/header1.php');
	}
?>

<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<br/>
    <div class="payment-container">
        <h2>Payment</h2>
        <div class="payment-info">
            <label>Total Amount:</label>
            <span><?php echo $_GET['price']; ?></span>
        </div>
        <div class="payment-info">
            <label>Payment Method:</label>
            <span>Card</span>
        </div>
        <div class="payment-button">
            <button style="background-color:gold;color:black;" onclick="makePayment()">Pay Now</button>
        </div>
    </div>
</div>
    
    <script>
        function makePayment() {
            // Handle the payment process here...
            alert('Payment Successful!');
            // Redirect to the success page or perform other necessary actions
            window.location.href = 'index.php';
        }
    </script>
<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>