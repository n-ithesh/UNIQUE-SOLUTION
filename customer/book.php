<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Book Service</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
    }

    .booking-section {
        background-color: #f9f9f9;
        padding: 50px 20px;
        text-align: center;
    }

    .booking-heading {
        font-size: 32px;
        color: #333;
        margin-bottom: 20px;
    }

    .booking-form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #333;
        text-align: left;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="tel"],
    .form-group textarea {
        width: calc(100% - 22px);
        padding: 10px;
        border: none;
        border-bottom: 1px solid #ccc;
        background-color: transparent;
        color: #333;
        transition: border-color 0.3s;
    }

    .form-group input[type="text"]:focus,
    .form-group input[type="email"]:focus,
    .form-group input[type="tel"]:focus,
    .form-group textarea:focus {
        outline: none;
        border-bottom-color: #2874f0; /* Change focus color */
    }

    .form-group textarea {
        height: 150px;
        resize: none;
    }

    .form-group button {
        background-color: #2874f0;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-group button:hover {
        background-color: #1c56d8;
    }
</style>
</head>
<body>



<section class="booking-section">
    <h2 class="booking-heading">Book Service</h2>
    <div class="booking-form">
    <h2 class="booking-heading">Book Service</h2>
        <form action="./controller/book_service.php" method="post">

            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="pincode">Pincode</label>
                <input type="text" id="pincode" name="pincode" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="secondary-phone">Secondary Phone Number</label>
                <input type="tel" id="secondary-phone" name="secondary-phone">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Additional Details</label>
                <textarea id="message" name="message"></textarea>
            </div>
            <div class="form-group">
                <button type="submit"name="submit">Book Service</button>
            </div>
        </form>
    </div>
</section>

</body>
</html>
