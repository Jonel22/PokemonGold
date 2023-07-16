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

</head>
<body>

<?php 
	session_start();

    if(isset($_GET["logout"])){
		session_destroy();
		header("Location: item.php");
		exit;
	}

	if(!isset($_SESSION['email'])){
		include('inc/header.php');
	}else{
		include('inc/header1.php');
	}

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "", "dbhotelbooking");
    $email = $_SESSION['email'];
    $result = $mysqli->query("SELECT * FROM registration where email='$email'");
    $book = $result->fetch_assoc();
    $name = $book['name'];
    $result = $mysqli->query("SELECT * FROM booking where name='$name'");
    $items = $result;
    
?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">POKE SHOP</h2>

  <div class="h-line bg-dark"></div>
 
</div>

<div class="container">
    <div class="row">
        <table class="table">
            <tr><th>ID</th><th>NAME</th><th>POKE ITEM</th><th>PRICE</th><th>DAY OF PURCHASE</th></tr>
            <?php foreach($items as $item): ?>
                <tr>
                    <td><?=$item['transaction_id']?></td>
                    <td><?=$item['name']?></td>
                    <td><?=$item['type']?></td>
                    <td><?=$item['price']?></td>
                    <td><?=$item['check_in']?></td>
                    
                    <td>
                        <a href="change.php?id=<?=$item['transaction_id']?>" class="btn btn-warning">CHANGE</a>
                        <a href="cancel.php?id=<?=$item['transaction_id']?>" class="btn btn-danger">CANCEL</a>
                    </td>    
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>




<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>