<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #FFAE4D, #F3E493);
            text-align: center;
            height: 100vh;
            display: flex;
            align-items: center; /* Align items vertically */
            justify-content: center; /* Align items horizontally */
        }
        .login-container {
            padding: 20px;
            width: 300px;
            margin: auto; /* Center the container */
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); /* Add shadow */
        }
        .login-title {
            margin-top: 10px;
            font-size: 24px;
            font-weight: bold;
        }
        .login-form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .login-input {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .login-button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 12px 24px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .login-button:hover {
            background-color: #45a049;
        }
        .signup-link {
            margin-top: 15px;
            font-size: 14px;
            color: #666;
        }
        .signup-link a {
            color: #4285f4;
            text-decoration: none;
        }
        .signup-link a:hover {
            text-decoration: underline;
        }
        .back-button {
            position: fixed;
            top: 10px;
            left: 10px;
            cursor: pointer;
            z-index: 999; /* Ensure it's on top of other content */
        }
        .back-button img {
            width: 25px; /* Adjust the size of the image */
            height: auto; /* Maintain aspect ratio */
        }
    </style>
</head>
<body>
    <a href="index.php" class="back-button"><img src="asset/x-mark.png" alt="Back to index"></a>
    <div class="login-container">
        <img src="asset/login1.svg" alt="SVG Image" width="200">
        <h1 class="login-title">User Login</h1> <!-- Added h1 under the SVG -->
        <form action="main.php" method="POST" class="login-form">
            <!-- Login form fields here -->
            <input type="text" name="username" placeholder="Username" class="login-input">
            <input type="password" name="password" placeholder="Password" class="login-input">
            <button type="submit" class="login-button">Login</button>
        </form>
        <div class="signup-link">Don't have an account? <a href="signup.php">Sign Up</a></div>
    </div>
</body>
</html>
