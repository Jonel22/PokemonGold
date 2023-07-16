<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking Website</title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<style>
  body {

background: linear-gradient(to top left, #0066ff 36%, #00ffcc 74%);}
  .popup {
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    padding: 10px 20px;
    background-color: #ff5252;
    color: #fff;
    border-radius: 5px;
    font-size: 16px;
    z-index: 9999;
    animation: popup-fade 2s ease-out;
}

@keyframes popup-fade {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}
</style>

</head>
<body>

<?php 
	session_start();
	if(!isset($_SESSION['email'])){
		include('inc/header.php');
	}else{
		include('inc/header1.php');
	}

  if (isset($_SESSION['reservation_error'])) {
    $error_message = $_SESSION['reservation_error'];
    unset($_SESSION['reservation_error']);
    echo "
    <script>
    window.addEventListener('DOMContentLoaded', () => {
        const popup = document.createElement('div');
        popup.classList.add('popup');
        popup.textContent = '$error_message';
        document.body.appendChild(popup);

        setTimeout(() => {
            popup.remove();
        }, 3000);
    });
    </script>
    ";
  }
 ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">Pokemon Golds</h2>

  <div class="h-line bg-dark"></div>
 
</div>

<div class="container">
  <div class="row">
   <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0">

     <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
  <div class="container-fluid flex-lg-column align-items-stretch">
    <h4 class="mt-2">Top up</h4>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
      <form action="book.php" method="POST">
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">TOP UP NOW!</h5>
        <label class="form-label">Day of Purchase</label>
        <input type="date" name="check_in" class="form-control shadow-none mb-3">
  
      </div>
      <div class="border bg-light p-3 rounded mb-3">
        <label class="form-label" style="font-weight: 500;">Gold Type</label>
 						<select class="form-select shadow-none" name="type">
  						
             <option value="LUXURIOUS ROOM 1">600 PokéCoins</option>
  						<option value="SPACIOUS ROOM 2">2700 PokéCoins</option>
  						<option value="COZY RETREAT 3">5600 PokéCoins</option>
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

      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">Quantity</h5>
        <div class="d-flex">
          <div class="me-2">
          <label class="form-label">Qty.</label>
          <input type="number" name="adult" class="form-control shadow-none">
        </div>
      
      <div class="d-grid gap-2">
      <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
      </div>
    </div>
  </form>
  </div>
</nav>
</div>

<div class="col-lg-9 col-md-12 px-4">
  <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/1.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">600 PokéCoins</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
           
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
        
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1"></h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
          </div>  
    </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">₱249.00 </h6>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/2.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">2700 PokéCoins</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>

            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
            
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="guests">
            
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
            
            </span>
          </div>  
    </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">₱999.00 </h6>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/3.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">5,600 PokéCoins</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
            
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
          </div>
          <div class="guests">
            
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
          </div>  
    </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">₱1,990.00 </h6>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/4.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">12,000 PokéCoins</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
            
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
            
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
            
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
          </div>
          <div class="guests">
          
            <span class="badge rounded-pill bg-light text-dark text-wrap">
            
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
            
            </span>
          </div>  
    </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">₱3,990.00 </h6>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/5.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Weaper Berry</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
            
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
          </div>
          <div class="guests">
          
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>  
    </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">₱50.00 </h6>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/6.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Bluk Berry</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
   
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
      
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
        
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
          </div>
          <div class="guests">
       
            <span class="badge rounded-pill bg-light text-dark text-wrap">
       
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>  
    </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">₱50.00 </h6>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/7.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Copper Bluk Berry</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
            
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
       
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
       
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
       
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
       
            </span>
          </div>
          <div class="guests">
         
            <span class="badge rounded-pill bg-light text-dark text-wrap">
       
            </span>
          </div>  
    </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">₱50.00 </h6>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/8.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Razz Berry</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
        
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
            
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
     
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
      
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
        
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
       
            </span>
          </div>
          <div class="guests">
         
            <span class="badge rounded-pill bg-light text-dark text-wrap">
        
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
          </div>  
    </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">₱60.00 </h6>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/9.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Honey</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
            
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
             
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="guests">
         
            <span class="badge rounded-pill bg-light text-dark text-wrap">
      
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">₱100.00 </h6>
    </div>
  </div>
</div>
<div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/10.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Revive</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="guests">
        
            <span class="badge rounded-pill bg-light text-dark text-wrap">  
             
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">₱100.00 </h6>
    </div>
  </div>
</div>
<div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/11.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Max Revive</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="guests">
        
            <span class="badge rounded-pill bg-light text-dark text-wrap">  
             
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">₱200.00 </h6>
    </div>
  </div>
</div><div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/12.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Lucky Egg</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="guests">
        
            <span class="badge rounded-pill bg-light text-dark text-wrap">  
             
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">₱100.00 </h6>
    </div>
  </div>
</div><div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/13.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">8 Lucky Eggs</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="guests">
        
            <span class="badge rounded-pill bg-light text-dark text-wrap">  
             
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">₱500.00 </h6>
    </div>
  </div>
</div><div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/14.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">25 Lucky Eggs</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="guests">
        
            <span class="badge rounded-pill bg-light text-dark text-wrap">  
             
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">₱1,250.00 </h6>
    </div>
  </div>
</div><div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/15.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Incense</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="guests">
        
            <span class="badge rounded-pill bg-light text-dark text-wrap">  
             
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">₱80.00 </h6>
    </div>
  </div>
</div><div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/16.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">8 Incense</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="guests">
        
            <span class="badge rounded-pill bg-light text-dark text-wrap">  
             
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">₱500.00 </h6>
    </div>
  </div>
</div><div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/17.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">25 Incense</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="guests">
        
            <span class="badge rounded-pill bg-light text-dark text-wrap">  
             
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">₱1,250.00 </h6>
    </div>
  </div>
</div><div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/18.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Medal</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="guests">
        
            <span class="badge rounded-pill bg-light text-dark text-wrap">  
             
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">₱150.00 </h6>
    </div>
  </div>
</div><div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/19.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">20 Poké Balls</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="guests">
        
            <span class="badge rounded-pill bg-light text-dark text-wrap">  
             
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">₱100.00 </h6>
    </div>
  </div>
</div><div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/20.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">100 Poké Balls</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="guests">
        
            <span class="badge rounded-pill bg-light text-dark text-wrap">  
             
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">₱460.00 </h6>
    </div>
  </div>
</div><div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/21.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">200 Poké Balls</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Price</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Top up</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
         
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
           
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
          
            </span>
          </div>
          <div class="guests">
        
            <span class="badge rounded-pill bg-light text-dark text-wrap">  
             
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">₱800.00 </h6>
    </div>
  </div>
</div>
</div>


  </div>
</div>



<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>