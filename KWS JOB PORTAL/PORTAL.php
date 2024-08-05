<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWS Job Portal</title>
        <style>
                body {
            margin: 0;
            padding: 0;
            /* Set multiple background images */
            background-image: url("images/image-3.webp.jpg"), url("images/Tembo Background.jpg");
            background-position: left, right; /* Position each image on the left and right */
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
        }
        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 150px; /* adjust size as needed */
            height: auto;
        }
        .navbar {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 20px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            width: 80%; /* Adjust width as needed */
            max-width: 600px; /* Max width for responsiveness */
        }
        .content h1 {
            font-size: 3rem; /* Example font size */
        }
        .content p {
            font-size: 1.5rem; /* Example font size */
            margin-bottom: 30px; /* Example margin */
        }
        .buttons {
            text-align: center;
            margin-top: 20px; /* Adjust spacing */
        }
        .button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #4CAF50; /* Green */
            color: white;
            text-decoration: none;
            font-size: 18px;
            margin-right: 10px; /* Adjust spacing between buttons */
            border-radius: 5px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #45a049; /* Darker green */
        }
    </style>
</head>
<body>
    <img src="images/KWS logo.png" alt="KWS Logo" class="logo">
    <div class="navbar">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </div>
    <div class="content">
        <h1>Welcome to KWS Job Portal</h1>
        <p>Explore job opportunities with us.</p>
        <div class="buttons">
            <a href="#" class="button">Login</a>
            <a href="#" class="button">Sign Up</a>
            <a href="#" class="button">Access Jobs</a> <!-- Simulated button for accessing jobs -->
        </div>
    </div>
</body>
</html>
