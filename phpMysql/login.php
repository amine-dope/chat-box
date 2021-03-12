<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Log In</title>
</head>
<body>
    <div class="wrap">
        <h2>Sign In</h2>

        <?php
        if(@$_GET['Empty']==true)
        {
        ?>
            <div class="txt"><?php echo $_GET['Empty']?></div>
        <?php
        }
        ?>
        <form action = "traitement.php" method ="POST">
            <input type="text" name="email" placeholder="Email..">
            <input type="password"  name ="password" placeholder="password">
            <input type="submit" name ="login" value="login">
        </form>

    </div>
    
</body>
</html>