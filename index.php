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

<style type="text/css">

body {

    background: linear-gradient(to top left, #0066ff 36%, #00ffcc 74%);}
	
	.availability-form{
		margin-top: -50px;
		z-index: 2;
		position: relative;
	}

	@media screen and (max-width: 575px) {
	.availability-form{
		margin-top: 25px;
		padding: 0 35px;
	}

	}

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

	if(isset($_GET["logout"])){
		session_destroy();
		header("Location: index.php");
		exit;
	}
	
	if(!isset($_SESSION['email'])){
		include('inc/header2.php');
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
<!-- Swiper Carousal-->
 <div class="container-fluid px-lg-4 mt-4">
 	 <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="carousel/1.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="carousel/2.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="carousel/3.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="carousel/4.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="carousel/5.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="carousel/6.png" class="w-100 d-block" />
        </div>
		
        
      </div>
      
    </div>
 </div>

 <!-- check avilability form-->
 <div class="container availability-form">
 	<div class="row">
	 <div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
			  <img src="images/rooms/1.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">600 PokéCoins</h5>
			    <h6 class="mb-4">₱249.00</h6>
			    <div class="features mb-4">
			    	<h6 class="mb-1">Buy Now!</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    	
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    	
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			 
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			 
    				</span>
			    </div>
			    <div class="Facilities mb-4">
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

    			<div class="guests mb-4">
			    	
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    	
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		
    				</span>
    			</div>	
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="rooms.php" name="type" class="btn btn-sm text-white custom-bg shadow-none">Purchase Now</a>
    					<a href="rooms.php" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
    				</div>
			  </div>
			</div>
 		</div>

 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
			  <img src="images/rooms/2.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">2700 PokéCoins</h5>
			    <h6 class="mb-4">₱999.99 </h6>
			    <div class="features mb-4">
			    	<h6 class="mb-1">Buy Now!</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    	
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    	
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    	
    				</span>
					<span class="badge rounded-pill bg-light text-dark text-wrap">
			    	
    				</span>
					<span class="badge rounded-pill bg-light text-dark text-wrap">
			    	
    				</span>
			    </div>
			    <div class="Facilities mb-4">
			    	<h6 class="mb-1">Top up</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			 
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    
    				</span>
    				<div class="guests mb-4">
			    
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    	
    				</span>
    				
    				</div>	
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="rooms.php" class="btn btn-sm text-white custom-bg shadow-none">Purchase Now</a>
    					<a href="rooms.php" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
    				</div>
			    </div>
			  </div>
			</div>
 		</div>

 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
			  <img src="images/rooms/3.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">5,600 PokéCoins</h5>
			    <h6 class="mb-4">₱1,990.00 </h6>
			    <div class="features mb-4">
			    	<h6 class="mb-1">Buy Now!</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    	
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    
    				</span>
			    </div>
			    <div class="Facilities mb-4">
			    	<h6 class="mb-1">Top up</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    	
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    	
    				</span>

    				<div class="guests mb-4">
			    	
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    	
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    	
    				</span>
    				</div>
    					
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="rooms.php" class="btn btn-sm text-white custom-bg shadow-none">Purchase Now</a>
    					<a href="rooms.php" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
    				</div>
			    </div>
			  </div>
			</div>
 		</div>



<!-- Testimonials -->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

 <div class="container mt-5">
 	<!-- Swiper -->
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="data:image/jpeg;base64,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" width="30px">
          	<h6 class="m-0 ms-2">James Reid</h6>
          </div>
          <p>
		  Pokemon Go has revolutionized the way I explore and interact with my surroundings. As a long-time Pokemon fan, this game allows me to catch my favorite Pokemon in real-world locations and engage in exciting battles with other trainers. It's incredible to see virtual creatures come to life through augmented reality, making my gaming experience truly immersive and unforgettable. I highly recommend Pokemon Go to all Pokemon enthusiasts and adventure seekers
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="https://m.media-amazon.com/images/M/MV5BYTE3MDY0YWEtNWY0My00NmZkLWJmOGItZGE2M2ZkMWMwODY0L2ltYWdlXkEyXkFqcGdeQXVyNTI5NjIyMw@@._V1_.jpg" width="30px">
          	<h6 class="m-0 ms-2">Joshua Garcia</h6>
          </div>
          <p>
		  I've never been much of a gamer, but Pokemon Go changed everything for me. It's the perfect blend of technology and nostalgia. I love how it encourages me to go outside, discover new places, and connect with other players. Pokemon Go has brought a sense of community into my life, as I join raids and team up with friends to take down powerful Pokemon. It's an addictive and fun experience that keeps me coming back for more!
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
			<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="https://images.summitmedia-digital.com/cosmo/images/2021/06/21/kathryn-bernardo-shoulder-length-hairstyle-2-1624265117.jpg" width="30px">
          	<h6 class="m-0 ms-2">Kathryn Bernardo</h6>
          </div>
          <p>
		  Pokemon Go is not just a game; it's a lifestyle. Since I started playing, I've become more active and motivated to explore my surroundings. The game seamlessly integrates with real-world locations, turning ordinary places into exciting Pokemon habitats and PokeStops. The sense of achievement when I catch a rare Pokemon or hatch an egg is truly rewarding. 
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
			<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
 </div>

 <!-- REach us-->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> REACH US</h2>

 <div class="container">
 	<div class="row">
 		<div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
		 <iframe class="w-100 rounded" height="450px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d79238.62245008774!2d119.46050802229855!3d10.331239749502043!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33b433dc49198593%3A0xa284934bd8eda060!2sBanwa%20Private%20Island!5e1!3m2!1sen!2sph!4v1688374811138!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 		</div>
 		<div class="col-lg-4 col-md-4 ">
 			<div class="bg-white p-4 rounded">
 				<h5>Call us</h5>
 				<a href="tel: +94768799665" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 768799665</a>
 				<br>
 				<a href="tel: +94768799665" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 768799665</a>
 			</div>	
 			<div class="bg-white p-4 rounded">
 				<h5>Follow us</h5>
 				<a href="#" class="d-inline-block mb-3">
 					<span class="badge bg-light text-dark fs-6 p-2">
 						<i class="bi bi-twitter me-1"></i>Twitter
 					</span>
 				</a>
 				<br>
 				<a href="#" class="d-inline-block mb-3">
 					<span class="badge bg-light text-dark fs-6 p-2">
 						<i class="bi bi-facebook me-1"></i>Facebook
 					</span>
 				</a>
 				<br>
 				<a href="#" class="d-inline-block">
 					<span class="badge bg-light text-dark fs-6 p-2">
 						<i class="bi bi-instagram me-1"></i>Instagram
 					</span>
 				</a>
 			</div>
 		</div>
 	</div>
 </div>
<hr>
 <?php require('inc/footer.php') ?>
<!-- JavaScript Bundle with Popper -->


 <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

 <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
        	delay: 3500,
        	disableOnInteraction: false,
        }
      });

      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
        	320: {
        		slidesPerView: 1,
        	},
        	640: {
        		slidesPerView: 1,
        	},
        	768: {
        		slidesPerView: 2,
        	},
        	1024: {
        		slidesPerView: 3,
        	},
        }
      });
    </script>
</body>
</html>