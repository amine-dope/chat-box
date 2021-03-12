<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <title>SignUp</title>
</head>
<body>
    <div class="wrap">
        <h2>Sign up</h2>
        <form action="traitement.php" method="POST">
            <input type="text" name="fname" placeholder="First Name..">
            <input type="text" name="lname" placeholder="Last Name..">
            <input type="text" name="Email" placeholder="Email..">
            <input type="text"  name="userName" placeholder="Username..">
            <input type="password" name="password" placeholder="password">
            <input type="submit" name="submit" value="Submit">
        </form>

    </div>
</body>
</html>