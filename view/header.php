<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<body>
    <div>
        <header>
            <nav>
                <?php if(isset($_SESSION['logued']) !== true): ?>
                    <li>Esta es cuando no esta logueado</li>
                <?php else: ?>
                    <li>Esto es cuando esta logueado</li>
                <?php endif; ?>
            </nav>
        </header>
    </div>
</body>
</html>