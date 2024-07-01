<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - UNIQUE SOLUTIONS</title>
    <link rel="stylesheet" href="newsignup.css">
    <script src="https://kit.fontawesome.com/e3b57f1948.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <form id="signupForm" action="controller/register.php" method="post">
                <h1 id="signupTitle">Sign Up</h1>
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="name" placeholder="Name" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-phone"></i>
                        <input type="tel" name="phone" placeholder="Phone" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-address-book"></i>
                        <input type="text" name="address" placeholder="Address" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-location-dot"></i>
                        <input type="tel" name="pincode" placeholder="Pincode" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-check-to-slot"></i>
                        <select name="state" required>
                            <option value="choose state">Choose State</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                        </select>
                    </div>
                </div>
                <div class="btn-field">
                    <button id="signupBtn" name="signup">Sign Up</button>
                    <a href="login.php">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
