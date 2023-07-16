<?php

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbhotelbooking";

// Connect to MySQL server
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
$conn->query($sql);

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create tables if they don't exist
$sql = "CREATE TABLE IF NOT EXISTS registration (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    phone_number VARCHAR(11),
    picture VARCHAR(50),
    address VARCHAR(50),
    pin_code INT(11),
    date_of_birth DATE,
    password VARCHAR(25),
    confirm_password VARCHAR(25)
)";

$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS booking (
    transaction_id VARCHAR(50) PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    check_in DATE,
    check_out DATE,
    adult VARCHAR(25),
	children VARCHAR(25),
	month VARCHAR(25) NOT NULL,
	day INT(11) NOT NULL,
	year INT(11) NOT NULL,
    type VARCHAR(30) NOT NULL,
	price FLOAT(11) NOT NULL,
    count INT(11) UNSIGNED
)";

$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS rooms (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    room VARCHAR(50) NOT NULL,
	price FLOAT(11) NOT NULL
)";

$conn->query($sql);

$sql = "INSERT INTO rooms VALUES
	(NULL,'LUXURIOUS ROOM 1', 2000),
	(NULL,'SPACIOUS ROOM 2', 1500),
	(NULL,'COZY RETREAT 3', 1500),
	(NULL,'ELEGANT LODGE 4', 1900),
	(NULL,'CHARMING HIDEAWAY 5', 1900),
	(NULL,'MODERN OASIS 6', 1500),
	(NULL,'STYLISH HAVEN 7', 1500),
	(NULL,'SLEEK SANCTUARY 8', 1000),
	(NULL,'COMFORTABLE VILLA 9', 1000),
	(NULL,'TRANQUIL MANOR 10', 2000),
	(NULL,'LUXURIOUS SUITE 11', 2000),
	(NULL,'SPACIOUS ROOM 12', 1500),
	(NULL,'COZY RETREAT 13', 2000),
	(NULL,'ELEGANT LODGE 14', 1900),
	(NULL,'CHARMING HIDEAWAY 15', 1900),
	(NULL,'MODERN OASIS 16', 1500),
	(NULL,'STYLISH HAVEN 17', 1500),
	(NULL,'SLEEK SANCTUARY 18', 1000),
	(NULL,'COMFORTABLE VILLA 19', 1500),
	(NULL,'TRANQUIL MANOR 20', 2000),
	(NULL,'LUXURIOUS 21', 1950),
	(NULL,'SUITE 22', 1450),
	(NULL,'SPACIOUS 23', 1450),
	(NULL,'ROOM 24', 950),
	(NULL,'COZY 25', 1450),
	(NULL,'RETREAT 26', 950),
	(NULL,'ELEGANT 27', 1850),
	(NULL,'LODGE 28', 1450),
	(NULL,'CHARMING 29', 1850),
	(NULL,'HIDEAWAY 30', 1450),
	(NULL,'MODERN 31', 1450),
	(NULL,'OASIS 32', 950),
	(NULL,'STYLISH 33', 1450),
	(NULL,'HAVEN 34', 950),
	(NULL,'SLEEK 35', 950),
	(NULL,'SANCTUARY 36', 450),
	(NULL,'COMFORTABLE 37', 950),
	(NULL,'VILLA 38', 450),
	(NULL,'TRANQUIL 39', 1950),
	(NULL,'MANOR 40', 1450),
	(NULL,'LUXURIOUS ROOM 41', 2500),
	(NULL,'SPACIOUS SUITE 42', 1900),
	(NULL,'COZY LODGE 43', 1900),
	(NULL,'CHARMING OASIS 45', 2000),
	(NULL,'MODERN HIDEAWAY 46', 1900),
	(NULL,'STYLISH SANCTUARY 47', 1900),
	(NULL,'SLEEK HAVEN 48', 1500),
	(NULL,'COMFORTABLE MANOR 49', 1500),
	(NULL,'TRANQUIL VILLA 50', 2500);
	";

$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS admin (
    admin_name VARCHAR(25) NOT NULL,
	admin_pass VARCHAR(30) NOT NULL
)";

$conn->query($sql);

$sql = "INSERT INTO admin VALUES('admin', 'admin')";

$conn->query($sql);

$initialCount = 1;
$sql = "ALTER TABLE booking AUTO_INCREMENT=$initialCount";
$conn->query($sql);

// Close the database connection
$conn->close();

?>


<nav class="navbar navbar-expand-lg bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">
      <img src="logo.png" alt="Soleil Logo" class="me-2" style="height: 60px;">
      Pokémon Go
    </a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="rooms.php">Poké Coins</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="about.php">About</a>
        </li>
        
      </ul>
      <div class="d-flex" role="search">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModel">Login	</button>
        <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModel">Register	</button>
      </div>
    </div>
  </div>
</nav>

<div class="modal fade" id="loginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form action="login.php" method="POST">
    		<div class="modal-header">
        	<h5 class="modal-title d-flex align-items-center">
        	<i class="bi bi-person-circle fs-3 me-2">User Login</i>
        	</h5>
        	<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
      		<div class="modal-body">
        	<div class="mb-3">
    			<label class="form-label">Email address</label>
    			<input type="email" name="email" class="form-control shadow-none">
  			  </div>
  			<div class="mb-4">
    			<label class="form-label">Password</label>
    			<input type="password" name="password" class="form-control shadow-none">
  			</div>
			<div class="mb-4">
			  <p> 
                <input type="checkbox" name="remember"> Remember Me
            </p>
			</div>
  			<div class="d-flex align-items-center justify-content-between mb-2">
  				<button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
  			</div>
      		</div>
    	</form>
      
    </div>
  </div>
</div>

<div class="modal fade" id="registerModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	
    	<form action="register.php" method="post" enctype="multipart/form-data">
    		<div class="modal-header">
        	<h5 class="modal-title d-flex align-items-center">
        	<i class="bi bi-person-lines-fill fs-3 me-2">User Registration</i>
        	</h5>
        	<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
      		<div class="modal-body">
      			<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note: Your details must match with your ID (Aadhaar card, passport, driving license, etc.) that will be required during check-in.
    			</span>
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">Name</label>
    					<input type="text" name="name" class="form-control shadow-none">
    				</div>
    				<div class="col-md-6 p-0">
    					<label class="form-label">Email</label>
    					<input type="email" name="email" class="form-control shadow-none">
    				</div>
    				<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">Phone Number</label>
    					<input type="number" name="phone_number" class="form-control shadow-none">
    				</div>
    				<div class="col-md-6 p-0">
    					<label class="form-label">Picture</label>
    					<input type="file" name="picture" class="form-control shadow-none">
    				</div>
    				<div class="col-md-12 p-0">
    					<label class="form-label">Address</label>
    					<textarea name="address" class="form-control shadow-none" rows="1"></textarea>
    				</div>
    				<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">Pin Code</label>
    					<input type="number" name="pin_code" class="form-control shadow-none">
    				</div>
    				<div class="col-md-6 p-0">
    					<label class="form-label">Date of Birth</label>
    					<input type="date" name="date_of_birth" class="form-control shadow-none">
    				</div>
    				<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">Password</label>
    					<input type="password" name="password" class="form-control shadow-none">
    				</div>
    				<div class="col-md-6 p-0">
    					<label class="form-label">Confirm Password</label>
    					<input type="password" name="confirm_password" class="form-control shadow-none">
    				</div>
    				<div class="text-center my-1">
    					<button type="submit" class="btn btn-dark shadow-none">Register</button>
    				</div>
    			</div>
    		</div>	
        	
    	</form>
      
    </div>
  </div>
</div>
	
</div>