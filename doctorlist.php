<?php
    session_start();
    if ($_SESSION['login'] !== true) {
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor List</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2196F3;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
            margin: 0;
        }

        h2 {
            font-size: 24px;
            margin-top: 10px;
        }

        .main-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .doctor-card {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .doctor-card img {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
        }

        h3 {
            margin-top: 10px;
            font-size: 20px;
        }

        p {
            margin: 10px 0;
            font-size: 16px;
        }

        .footer {
            background-color: #2196F3;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        nav {
    background-color: #00bcd4; /* Warna biru muda */
    padding: 10px;
    text-align: center;
}

nav button {
    background-color: #00bcd4; /* Warna biru muda */
    color: #fff; /* Warna teks putih */
    border: none;
    padding: 8px 16px;
    margin: 0 10px;
    cursor: pointer;
    font-size: 16px;
    border-radius: 4px;
    transition: background-color 0.3s;
}

nav button:hover {
    background-color: #007a8a; /* Warna biru yang lebih gelap saat hover */
}
    </style>
</head>
<body>
    <header>
        <h1>Doctor List</h1>
        <h2>Information about our Doctors</h2>
    </header>

    <nav>
        <button onclick="logout()">Logout</button>
    </nav>

    <div class="main-content">
        <div class="doctor-card">
            <img src="dr1.jpg" alt="Doctor 1">
            <h3>Dr. John Doe</h3>
            <p>Specialty: Cardiology</p>
            <p>Practice Hours: Monday-Friday, 9 AM - 5 PM</p>
        </div>

        <div class="doctor-card">
            <img src="dr2.jpg" alt="Doctor 2">
            <h3>Dr. Jane Smith</h3>
            <p>Specialty: Pediatrics</p>
            <p>Practice Hours: Monday-Wednesday, 8 AM - 4 PM</p>
        </div>

        <div class="doctor-card">
            <img src="dr3.jpg" alt="Doctor 3">
            <h3>Dr. Michael Johnson</h3>
            <p>Specialty: Orthopedics</p>
            <p>Practice Hours: Tuesday-Thursday, 10 AM - 6 PM</p>
        </div>
    </div>

    <div class="footer">
        Valar Morghulis, ....
    </div>
    <script>
        function logout() {
            var confirmLogout = confirm("Are you sure you want to logout?");
            if (confirmLogout) {
                window.location.href = "login.php";
            }
        }
    </script>
</body>
</html>