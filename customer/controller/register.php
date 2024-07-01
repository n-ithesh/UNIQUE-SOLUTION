<?php
include 'db.php';

// Check if a session is not already active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $state = $_POST['state'];

    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE LOWER(email) = LOWER(?)");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script> alert('Email already exists');window.location='../login.php';</script>";
    } else {
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO users (name, email, password, phone, address, pincode, state) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $name, $email, $password, $phone, $address, $pincode, $state);
        if ($stmt->execute()) {
            echo "<script>alert('Registered successfully');window.location='../index.php'</script>";
        } else {
            echo "<script>alert('Registration failed');window.location='../register.php'</script>";
        }
    }

    $stmt->close();
}

$conn->close();
?>
