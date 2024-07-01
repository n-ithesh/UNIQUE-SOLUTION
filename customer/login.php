

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - UNIQUE SOLUTIONS</title>
    <link rel="stylesheet" href="newsignup.css">
    <script src="https://kit.fontawesome.com/e3b57f1948.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <form id="loginForm" action="controller/login.php" method="post">
                <h1 id="loginTitle">Login</h1>
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="btn-field">
                    <button id="loginBtn" name="login">Login</button>
                    <a href="signup.php">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
