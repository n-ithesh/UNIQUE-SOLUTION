<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uniquesolutions_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    $stmt->execute();

    echo "<script>alert('message sent successfiully');window.location='../index.php'</script>";
    $stmt->close();
}

$conn->close();
?>
