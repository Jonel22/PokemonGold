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
        <a class="btn btn-outline-dark shadow-none me-lg-3 me-2" href="?logout">Logout</a>
      </div>
    </div>
  </div>
</nav>
	
</div>