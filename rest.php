<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Punts Restauracio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
        }
        .container {
            max-width: 600px;
            margin: auto;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Creacio de Punts de Restauracio</h1>
    <p>A traves d'aquesta plana podras crear un punt de restauracio del sistema operatiu en una unitat externa (ADVERTENCIA: Aquest script necessita que hi hagi una unitat externa connectada i muntada sempre que es faci servir. En cas de no tenir una disponible, recomanem utilitzar la dels nostres cronjobs)</p>

    <form method="post">
        <button type="submit" name="run_script">Ejecutar Script Python</button>
    </form>

    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['run_script'])) {
    $script = 'rest.py';
    $command = "python3 $script";
    $output = shell_exec($command . " 2>&1");
    echo "<pre>$output</pre>";
}
    ?>
</div>

</body>
</html>
