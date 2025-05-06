<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <header>
            <?php include_once('../view/header.php'); ?>
        </header>
    </div>
    <div>
        <div>
            <h1>
                <img src="../imgs/Logo.png">
            </h1>
        </div>
        <div>
            <form>
                <label for="usr">User</label><br>
                <input type="text" id="usr"><br>
                <label for="pass">Password</label><br>
                <input type="password" id="pass"><br>
                <input type="submit" value="INICIAR SESSION">
            </form>
        </div>
        <div>
            <footer>
                <?php include_once('../view/footer.php'); ?>
            </footer>
        </div>
    </div>
</body>
</html>