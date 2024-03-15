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
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .container {
            padding: 20px;
            max-width: 600px;
            margin: auto;
        }
        .description {
            margin-top: 20px;
            text-align: left;
        }
        /* Circular button */
        .button {
            margin-top: 20px;
            background-color: #FFFFFF;
            border: none;
            color: #0D0140;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 24px;
            border-radius: 50%; /* Makes it circular */
            cursor: pointer;
            transition: background-color 0.3s ease; /* Transition effect for color change */
        }
        .button:hover {
            background-color: #8F7DDC; /* Darker color on hover */
        }
        .title {
            margin-top: 20px;
            font-size: 32px; /* Increased font size */
            font-weight: bold;
            font-family: "Arial Black", sans-serif; /* Changed font family */
            animation: pulse 2s infinite alternate; /* Pulsating effect */
        }
        /* Animation for pulsating effect */
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.1);
            }
        }
        /* Animation */
        @keyframes float {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0);
            }
        }
        .floating-svg {
            animation: float 3s infinite;
        }
        /* Hover effect for SVG image */
        .floating-svg:hover {
            transform: scale(1.05); /* Scale up slightly on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Welcome to Our Landing Page</h1>
        <img src="asset/landingpage1.svg" alt="SVG Image" width="400" class="floating-svg"> <!-- Added class for animation -->
        <h2>Description</h2> <!-- Changed h2 back to normal -->
        <div class="description">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <!-- Button now is an anchor tag linking to login.php -->
        <a href="login.php" class="button" onclick="this.classList.add('pressed'); setTimeout(() => this.classList.remove('pressed'), 300)">&gt;</a>
    </div>
</body>
</html>
