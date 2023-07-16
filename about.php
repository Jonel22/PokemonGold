<!DOCTYPE html>
<html>
<head>
	<title>Pokemon Go WebStore - About Us</title>
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
  .box{
    border-top-color: var(--teal) !important;
  }
</style>

</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">ABOUT US</h2>

  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
  Welcome to Pokémon GO, your ultimate destination for real-world Pokémon adventures! Pokémon GO is an augmented reality mobile game that brings the beloved world of Pokémon to life like never before. Since its launch, Pokémon GO has taken the world by storm, captivating trainers of all ages and encouraging them to explore their surroundings in search of Pokémon. At Pokémon GO, we are passionate about creating a community of trainers who share a love for these iconic creatures. Our mission is to provide an immersive and interactive experience that allows trainers to embark on epic quests, discover rare Pokémon, and engage in thrilling battles with other trainers. With regular updates, exciting events, and new Pokémon to encounter, there is always something exciting happening in the world of Pokémon GO. Join us on this incredible journey and let's catch 'em all together!
  </p>

  <p class="text-center mt-3">

  As trainers ourselves, we understand the joy and excitement that comes with capturing rare Pokémon, conquering Gyms, and participating in thrilling Raid Battles. That's why we have curated a range of resources, from tips and strategies to event updates and community meetups, to enhance your Pokémon GO experience.

Our dedicated team of Pokémon enthusiasts is committed to fostering a supportive and engaging community. Whether you're a seasoned trainer or just starting your Pokémon journey, you'll find a welcoming environment where you can learn, share, and connect with fellow trainers who share your passion.
  </p>
</div>

<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
      <h3 class="mb-3">Pokemon Go</h3>
      <p>
      Pokémon GO is a groundbreaking augmented reality mobile game that allows players to capture, train, and battle Pokémon in the real world. With an innovative blend of technology and nostalgia, this global phenomenon has taken the gaming world by storm. Step outside and explore your surroundings as you search for Pokémon, engage in exciting Gym battles, and join forces with other trainers in epic Raid Battles. Pokémon GO brings the beloved Pokémon franchise to life, encouraging players to get active, make new friends, and embark on an unforgettable adventure in their quest to become Pokémon Masters.
      </p>
    </div>
    <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
      <img src="https://lh3.googleusercontent.com/RGShDyVofSODXIJ0eQ9umAID8tCw9KdqBFrtgCEdrxjJijG1qZBryfECP9IRV1MOJhCk4Za4VYB34DE-hnPesZNNVYMwgHKs9KrNue3LNJRJuw=e365-w1920" class="w-100">
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/hotel.svg" width="70px">
        <h4 class="mt-3">700+ POKEMONS TO CATCH</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/customers.svg" width="70px">
        <h4 class="mt-3">500,000+ ACTIVE USERS</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/rating.svg" width="70px">
        <h4 class="mt-3">IMMERSIVE GAME OF THE YEAR</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/staff.svg" width="70px">
        <h4 class="mt-3">BEST FAMILY GAME AWARD</h4>
      </div>
    </div>
  
  </div>
</div>

<h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

<div class="container px-4">
   <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="team/1pen.jpg" class="w-100" height="399px">
          <h5 class="mt-2">Stephen Christian F. Arda</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="team/d.jpg" class="w-100">
          <h5 class="mt-2">Dawson Dela Cruz</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="team/jonel.png" class="w-100">
          <h5 class="mt-2">Jonel Vidallo</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="team/h.jpg" class="w-100">
          <h5 class="mt-2">Hyun Mi Kang</h5>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
</div>
<br>
<br>

<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

 <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 40,
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
            slidesPerView: 3,
          },
          1024: {
            slidesPerView: 3,
          },
        }
      });
    </script>
</body>
</html>