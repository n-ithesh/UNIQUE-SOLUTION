<?php
session_start();

// Check if user is logged in
if(isset($_SESSION['user_id'])) {
    // User is logged in
    echo '<a href="book.php"><button class="book-button">Book Now</button></a>';
} else {
    // User is not logged in
    // You can show a login link or message instead
}
?>
