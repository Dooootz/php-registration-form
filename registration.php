<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-mysql</title>
</head>
<body>
    <form action="register.php" method="POST">
        <div class="container">
            <h1>Registration Form</h1>
            <p>Create an account</p>

            <label for="Firstname">Firstname</label>
            <input type="text" placeholder="Enter Firstname" name="firstname" id="firstname" required>
       
            <label for="Lastname">Lastname</label>
            <input type="text" placeholder="Enter Lastname" name="lastname" id="lastname" required>
       
            <label for="email">Email</label>
            <input type="email" placeholder="Enter email" name="email" id="email" required>
       
            <label for="password">password</label>
            <input type="password" placeholder="Enter password" name="password" id="password" required>

        <button type="submit" class="registration">Register</button>
        </div>

        <div class="container-signin">
            <p>Already have an account? <a href="#">Sign In</a></p>
        </div>

    </form>
</body>
</html>