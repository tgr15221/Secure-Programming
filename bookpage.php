<?php
session_start();
// require("controllers/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookpage</title>
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

form {
    max-width: 400px; 
    margin: 0 auto; 
    text-align: left; 
}

label {
    display: block; /* Setiap label pada baris baru */
    margin-bottom: 8px; /* Jarak antara label dan input */
}

input[type="text"],
input[type="date"],
textarea,
select {
    width: 100%; 
    padding: 8px; 
    margin-bottom: 16px; 
    box-sizing: border-box; 
}

input[type="submit"] {
    background-color: #4CAF50; 
    color: white; 
    padding: 10px 15px; 
    border: none; 
    border-radius: 4px; 
    cursor: pointer;
}

textarea {
    resize: vertical;
}
    </style>
</head>
<body>
    <header>
        <h1>Doctor List</h1>
        <h2>Information about our Doctors</h2>
    </header>

    <nav>
        <button onclick="window.location.href='doctorlist.php'">DoctorLists</button>
        <button onclick="logout()">Logout</button>
    </nav>
    <form action="controllers/bookcontrol.php" method="post">
        <label>Post No : </label>
        <input type="text" name="number" id="number"></input>
        <br>
        <label for="DoB">Date of Book</label>
        <input type="date" name="dob" id="dob"/>
        <br>
        <label for="age">Age Select : </label>
                <select id="age" name="age" class="form-control">
                    <option value="1">Toddler (0-5)</option>
                    <option value="2">Children (6-12)</option>
                    <option value="3">teenager (13-21)</option>
                    <option value="4">Adult (22-etc)</option>
                </select>
        <br>
        <label>Input your health status : </label>
        <textarea name="messege" id="messege"></textarea>
        <br>
        <input type="submit" name="btn">

    </form>
    <div class="footer">
        @drlist XYZHOSPITAL
    </div>


</body>
</html>