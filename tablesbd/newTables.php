<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/tablesbd/newTables.css">
    <title>Tablas</title>
</head>
<body>
    <div>
        <div>
            <h1>
                VulnModernWeb
            </h1>
        </div>
        <div>
            <p>
                Al hacer clic en el botón <b>Actualizar/Crear Tablas</b>, se crearán o restaurarán las tablas de la base de datos al estado por defecto. Esto incluye:<br>
                <ul>
                    <li>guest → Encargada de gestionar los comentarios para ataques XSS.</li><br>
                    <li>users → Será la tabla encargada de gestionar los usuarios que vienen por defecto para acceder al aplicativo.</li><br>
                    <li>record → Será la encargada de gestionar los ataques registrados por los usuarios</li><br>
                </ul>
            </p>
            <p>
                Al hacer clic en este botón, todas las bases de datos se restaurarán a su estado original.<br>
                Esto significa que se eliminarán todos los datos actuales y se volverán a cargar los datos por defecto del sistema.
            </p>
        </div>
        <div>
            <button value="Enviar" class="btn btn-primary" id="upnewtables">Actualizar/Crear Tablas</button> <a class="btn btn-primary" href="../view/index.php">Volver</a>
        </div>
        <div>
            <footer class="page-footer font-small bg-dark">
                <?php include_once('../view/footer.php'); ?>
            </footer>
        </div>
    </div>
    <script src="../js/newTables.js"></script>
</body>
</html>