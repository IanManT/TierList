<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="cssRegist.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="POST" action="userRegist.php">
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
            <p>Don't have an account? <a href="pageRegist.html">Register</a></p>
        </form>
    </div>
    <script src="Regist.js"></script>
</body>
</html>
