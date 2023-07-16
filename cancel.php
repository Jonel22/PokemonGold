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
        header("Location: cancel.php");
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
    <form action="drop.php" method="post" onsubmit="return confirm('Are you sure you want to cancel this booking?');">
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
        <label for="price" class="col-4 col-form-label">ROOM TYPE</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">PHP</div>
            </div> 
            <input readonly style="background-color: #fff" name="name" value="<?=$item['type']?>" type="text" class="form-control">
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
        <label for="price" class="col-4 col-form-label">CHECK-IN</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">PHP</div>
            </div> 
            <input readonly style="background-color: #fff" name="check_in" value="<?=$item['check_in']?>" placeholder="0.0" type="date" class="form-control">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="price" class="col-4 col-form-label">CHECK-OUT</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">PHP</div>
            </div> 
            <input readonly style="background-color: #fff" name="check_out" value="<?=$item['check_out']?>" placeholder="0.0" type="date" class="form-control">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="price" class="col-4 col-form-label">ADULT</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">PHP</div>
            </div> 
            <input readonly style="background-color: #fff" name="adult" value="<?=$item['adult']?>" placeholder="0.0" type="number" class="form-control">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="price" class="col-4 col-form-label">Children</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">PHP</div>
            </div> 
            <input readonly style="background-color: #fff" name="children" value="<?=$item['children']?>" placeholder="0.0" type="number" class="form-control">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <a href="item.php" class="btn btn-primary">BACK</a>
            <button name="submit" type="submit" class="btn btn-danger">CANCEL</button>
        </div>
    </div>
    </form>
</div>




<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>