<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uniquesolutions_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit']))  {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $phone = $_POST['phone'];
    $secondaryPhone = $_POST['secondary-phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO bookings (name, address, pincode, phone, secondary_phone, email, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $address, $pincode, $phone, $secondaryPhone, $email, $message);
    $stmt->execute();

    echo "<script>alert('Booking successfully');window.location='../index.php'</script>";
    $stmt->close();
}

$conn->close();
?>
