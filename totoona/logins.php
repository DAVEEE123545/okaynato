<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0.1;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e8e9f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            width: 80%;
            max-width: 1000px;
            background-color: #3f1919;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            border-radius: 12px;
            overflow: hidden;
            transition: 0.3s ease;
            position: relative;
        }

        .container:hover {
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        }

        .left-section {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f1f1f1;
            padding: 40px;
        }

        .illustration {
            max-width: 100%;
            border-radius: 10px;
        }

        .right-section {
            width: 50%;
            padding: 50px;
            background-color: #f8faff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        .header-section {
            position: relative;
            margin-bottom: 30px;
        }

        .header-section img {
            position: absolute;
            top: -10px;
            right: -10px;
            max-width: 175px;
            transition: transform 0.3s ease;
        }

    

        .header-section h2 {
            font-size: 2.2em;
            color: #0b0c18;
            text-transform: capitalize;
            line-height: 1.2;
            margin: 0;
            padding-top: 30px;
        }

        .login-form {
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
            position: relative;
        }

        .input-group input {
            width: 100%;
            padding: 14px 20px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 8px;
            transition: 0.3s ease;
        }

        .input-group input:focus {
            border-color: #007BFF;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
            outline: none;
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            font-size: 14px;
            color: #555;
        }

        .options a {
            color: #007BFF;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .options a:hover {
            color: #0056b3;
        }

        .login-btn {
            width: 100%;
            padding: 15px;
            background-color:#191d67;
            color:#e8e9f7;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }

        .signup {
            text-align: center;
            margin-top: 1px;
            font-size: 14px;
            color: #141db8;
        }

        .signup a {
            color: #757be6;
            text-decoration: none;
            font-weight: 600;
        }

        .signup a:hover {
            color: #0056b3;
        }

    </style>
    <div class="container">
        <div class="left-section">
            <img src="Person-Computer.png" alt="Illustration" class="illustration">
        </div>
        <div class="right-section">
            <div class="header-section">
                <h2>Welcome to,</br> Facility </br> Reservation Management</h2>
                <img src="logo.png" alt="Logo">
            </div>
            <form action="login.php" method="POST" class="login-form">
                <div class="input-group">
                    <input type="text" id="username_or_email" name="username_or_email" placeholder="Username or Email" required>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="options">
                    <label><input type="checkbox"> Remember Me</label>
                    <a href="createpass.html">Forgot Password?</a>
                </div>
                <button type="submit" class="login-btn">Sign In</button>
            </form>
            <div class="signup">
                <p>Don't have an account? <a href="registers.php">Register here</a></p>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>
