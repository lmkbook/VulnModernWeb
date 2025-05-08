<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/view/index.css">
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
            <form id="frm">
                <label for="usr">User</label><br>
                <input type="text" id="usr"><br><br>
                <label for="pass">Password</label><br>
                <input type="password" id="pass"><br><br>
                <input type="submit" class="btn btn-primary" value="INICIAR SESSION"><br><br>
            </form>
        </div>
        <div>
            <footer  class="page-footer font-small bg-dark">
                <?php include_once('../view/footer.php'); ?>
            </footer>
        </div>
    </div>
    <script src="../js/view/index.js"></script>
</body>
</html>