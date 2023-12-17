<?php 
    session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XYZHOSPITAL</title>
    
    <style>
        header {
    background-color: #00bcd4;
    color: #fff;
    padding: 20px;
    text-align: center;
    margin-bottom: 20px;
}

/* CSS untuk kontainer utama */
.grid.main-form {
    margin: 0 auto;
    max-width: 400px;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px; /* Tambahkan radius sudut */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* CSS untuk elemen form */
form {
    margin: 0;
}

.form-group {
    margin-bottom: 20px; /* Tambahkan sedikit jarak antara elemen form */
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold; /* Tambahkan berat teks pada label */
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px; /* Tambahkan sedikit radius sudut */
}

/* CSS untuk tombol login */
.btn-ghost {
    background-color: transparent; /* Tombol transparan */
    color: #00bcd4; /* Warna teks biru muda */
    border: 2px solid #00bcd4; /* Garis tepi biru muda */
    border-radius: 3px; /* Tambahkan sedikit radius sudut */
    transition: background-color 0.3s, color 0.3s; /* Efek hover */
}

.btn-ghost:hover {
    background-color: #00bcd4; /* Warna latar belakang saat dihover */
    color: #fff; /* Warna teks saat dihover */
}

/* CSS untuk footer */
.footer {
    text-align: center;
    margin-top: 20px;
    color: #666; /* Warna teks abu-abu tua */
}
.login-button {
    text-align: center; /* Teks tombol diatur menjadi tengah */
}

        </style>
</head>


<body class="hack dark">
    <header>
        <h1>XYZ Doctor List</h1>
        <h2>Provide any information about our Doctors</h2>
    </header>

    <div class="grid main-form">
        <form action="controllers/AuthController.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>" />
            <fieldset class="form-group form-success">
                <label for="username">USERNAME</label>
                <input id="username" name="username" type="text" placeholder="" class="form-control">
            </fieldset>
            <fieldset class="form-group form-success">
                <label for="password">PASSWORD</label>
                <input id="password" name="password" type="password" placeholder="" class="form-control">
            </fieldset>
            <br>
            <div class="login-button">
                <button class="btn btn-primary btn-block btn-ghost" name="login" value="Login">Login</button>
                <div class="help-block">
                    Don't have an account? <a href="register.php">Register here</a>
                </div>
            </div>
        </form>
    </div>
    <div class="footer">
        Help you find our certified Doctor
    </div>
</body>

</html>