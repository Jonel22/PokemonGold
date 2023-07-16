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
        header("Location: change.php");
        exit;
    }

	if(!isset($_SESSION['email'])){
		include('inc/header.php');
	}else{
		include('inc/header1.php');
	}

    $id = $_GET['id'];
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "", "dbhotelbooking");
    $result = $mysqli->query("SELECT * FROM booking WHERE transaction_id='$id'");
    $item = $result->fetch_assoc();
    $_SESSION['count'] = $item['count'];
    
?>

<div class="container">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<br/>
    <form action="update.php" method="post" onsubmit="return confirm('Are you sure you want to change the booking?');">
    <div class="form-group row">
        <label for="name" class="col-4 col-form-label">ID</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-address-card"></i>
            </div>
            </div> 
            <input readonly style="background-color: #fff" name="id" value="<?=$item['transaction_id']?>" type="text" class="form-control">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-4 col-form-label">NAME</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-address-card"></i>
            </div>
            </div> 
            <input readonly style="background-color: #fff" name="name" value="<?=$item['name']?>" type="text" class="form-control">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="price" class="col-4 col-form-label">POKE ITEM</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">PHP</div>
            </div> 
            <select class="form-select shadow-none form-control" name="type" style="background-color: #fff" placeholder="<?=$item['type']?>">	
            <option value="600 PokéCoins">600 PokéCoins</option>
  						<option value="2700 PokéCoins">2700 PokéCoins</option>
  						<option value="5600 PokéCoins">5600 PokéCoins</option>
  						<option value="ELEGANT LODGE 4">12,000 PokéCoins</option>
              <option value="CHARMING HIDEAWAY 5">Weaper Berry</option>
              <option value="MODERN OASIS 6">Bluk Berry</option>
              <option value="STYLISH HAVEN 7">Copper Bluk Berry</option>
              <option value="SLEEK SANCTUARY 8">Razz Berry</option>
              <option value="COMFORTABLE VILLA 9">Honey</option>
              <option value="TRANQUIL MANOR 10">Revive</option>
              <option value="LUXURIOUS SUITE 11">Max Revive</option>
              <option value="SPACIOUS ROOM 12">Lucky Egg</option>
              <option value="COZY RETREAT 13">8 Lucky Eggs</option>
              <option value="ELEGANT LODGE 14">25 Lucky Eggs</option>
              <option value="CHARMING HIDEAWAY 15">Incense</option>
              <option value="MODERN OASIS 16">8 Incense</option>
              <option value="STYLISH HAVEN 17">25 Incense</option>
              <option value="SLEEK SANCTUARY 18">Medal</option>
              <option value="COMFORTABLE VILLA 19">20 Poké Balls</option>
              <option value="TRANQUIL MANOR 20">100 Poké Balls</option>
              <option value="LUXURIOUS 21">200 Poké Balls</option>
                </select>
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="price" class="col-4 col-form-label">PRICE</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">PHP</div>
            </div> 
            <input readonly style="background-color: #fff" name="price" value="<?=$item['price']?>" placeholder="0.0" type="number" class="form-control">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="price" class="col-4 col-form-label">DAY OF PURCHASE</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">DAY</div>
            </div> 
            <input style="background-color: #fff" name="check_in" value="<?=$item['check_in']?>" placeholder="0.0" type="date" class="form-control">
        </div>
        </div>
    </div>
    
  
    <div class="form-group row">
        <label for="price" class="col-4 col-form-label">QUANTITY</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">QTY</div>
            </div> 
            <input style="background-color: #fff" name="children" value="<?=$item['children']?>" placeholder="0.0" type="number" class="form-control">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <a href="item.php" class="btn btn-primary">CANCEL</a>
            <button name="submit" type="submit" class="btn btn-success">CHANGE</button>
        </div>
    </div>
    </form>
</div>




<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>