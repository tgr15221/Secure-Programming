<?php
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Registration</title>

    <style>
        /* Add your styles here */
        body {
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #00bcd4;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }

        .grid.main-form {
            margin: 0 auto;
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            margin: 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .btn-ghost {
            background-color: transparent;
            color: #00bcd4;
            border: 2px solid #00bcd4;
            border-radius: 3px;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-ghost:hover {
            background-color: #00bcd4;
            color: #fff;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
        }
    </style>
</head>

<body class="hack dark">
    <header>
        <h1>User Registration</h1>
        <h2>Create an account</h2>
    </header>

    <div class="grid main-form">
        <form action="controllers/registercontroller.php" method="POST">
            <fieldset class="form-group form-success">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="Enter your email" class="form-control" required>
            </fieldset>
            <fieldset class="form-group form-success">
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="Choose a username" class="form-control" required>
            </fieldset>
            <fieldset class="form-group form-success">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Enter your password" class="form-control" required>
            </fieldset>
            <br>
            <div class="login-button">
                <button class="btn btn-primary btn-block btn-ghost" name="register" value="Register">Register</button>
                <div class="help-block">
                    Have an account? <a href="index.php">Login here</a>
                </div>
            </div>
        </form>
    </div>
    <div class="footer">
        Your footer content here
    </div>
</body>

</html>