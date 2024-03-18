<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Profile</title>
<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #FEEA7C;
        font-family: Arial, sans-serif;
        height: 100%;
    }
    .container {
        background: linear-gradient(to right, #FFC194, #FF9C07);
        border-radius: 20px;
        width: 80%;
        margin: 50px auto;
        padding: 20px;
        display: flex;
        align-items: center;
    }
    .profile-image {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-right: 20px;
    }
    .username {
        font-size: 24px;
        font-weight: bold;
    }
    .description {
        font-size: 18px;
        color: #666;
    }
    .bottom-bar {
        position: fixed;
        bottom: 0;
        width: 100%;
        background: linear-gradient(to right, #FFC194, #FF9C07);
        display: flex;
        justify-content: space-around;
        padding: 10px 0;
    }
    .bottom-bar a {
        color: white;
        text-decoration: none;
        font-size: 18px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .bottom-bar img {
        width: 30px;
        height: auto;
        margin-bottom: 5px;
    }
    /* Sidebar Styles */
    .sidebar {
        position: fixed;
        left: -250px;
        top: 0;
        bottom: 0;
        width: 200px;
        background-color: #333;
        transition: left 0.3s ease-in-out;
    }
    .sidebar ul {
        list-style: none;
        padding: 0;
        margin: 20px;
    }
    .sidebar li {
        padding: 10px 0;
    }
    .sidebar a {
        color: white;
        text-decoration: none;
    }
</style>
</head>
<body>

<div class="container">
    <img class="profile-image" src="asset/side_eye_cat.jpg" alt="Profile Image">
    <div>
        <div class="username">John Doe</div>
        <div class="description">Web Developer</div>
    </div>
</div>

<div class="bottom-bar">
    <a onclick="toggleSidebar()">
        <img src="asset/side_eye_cat.jpg" alt="Menu">
        Menu
    </a>
    <a href="main.php">
        <img src="asset/side_eye_cat.jpg" alt="Main">
        Main
    </a>
    <a href="produk.php">
        <img src="asset/side_eye_cat.jpg" alt="Produk">
        Produk
    </a>
</div>

<div class="sidebar" id="sidebar">
    <ul>
        <li><a href="index.php">Logout</a></li>
    </ul>
</div>

<script>
    // Function to toggle sidebar visibility
    function toggleSidebar() {
        var sidebar = document.getElementById('sidebar');
        if (sidebar.style.left === '0px') {
            sidebar.style.left = '-250px';
        } else {
            sidebar.style.left = '0px';
        }
    }

    // Function to close sidebar when clicking outside of it
    document.addEventListener('click', function(event) {
        var sidebar = document.getElementById('sidebar');
        var target = event.target;

        // Check if the click occurred outside of the sidebar and not the toggle button
        if (sidebar.style.left === '0px' && !target.closest('.sidebar') && !target.closest('.bottom-bar')) {
            sidebar.style.left = '-250px';
        }
    });
</script>

</body>
</html>
