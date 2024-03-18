<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Landing Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #FFAE4D, #F3E493);
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center; /* Center items vertically */
            height: 100vh; /* Full height of the viewport */
            overflow-x: hidden;
        }
        .container {
            padding: 10px;
            max-width: 80%;
        }
        .description {
            margin-top: 10px;
            text-align: left;
            font-size: 14px;
        }
        .button {
            margin-top: 10px;
            background-color: #FFFFFF;
            border: none;
            color: #0D0140;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #8F7DDC;
        }
        .title {
            margin-top: 10px;
            font-size: 24px;
            font-weight: bold;
            font-family: "Arial Black", sans-serif;
            animation: pulse 2s infinite alternate;
        }
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.1);
            }
        }
        @keyframes float {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-5px);
            }
            100% {
                transform: translateY(0);
            }
        }
        .floating-svg {
            animation: float 3s infinite;
            width: 100%;
        }
        .floating-svg:hover {
            transform: scale(1.03);
        }

        @media (max-width: 768px) {
            .container {
                max-width: 90%;
            }
            .button {
                font-size: 16px;
            }
            .title {
                font-size: 20px;
            }
            .description {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Welcome to Polibatam Store</h1>
        <img src="asset/landingpage1.svg" alt="SVG Image" class="floating-svg">
        <h2>Description</h2>
        <div class="description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <a href="login.php" class="button" onclick="this.classList.add('pressed'); setTimeout(() => this.classList.remove('pressed'), 300)">&gt;</a>
    </div>
</body>
</html>
