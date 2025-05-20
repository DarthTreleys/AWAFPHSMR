<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Página Web</title>
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
    <h1>Monitorizar</h1>
    <p>Permite ver el estado recurrente del dispositivo</p>

    <form method="post">
        <button type="submit" name="run_script">Ejecutar Script</button>
    </form>

    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['run_script'])) {
    $script = 'monitorizar.py';
    $command = "python3 $script";
    $output = shell_exec($command . " 2>&1");
    echo "<pre>$output</pre>";
}
    ?>
</div>

</body>
</html>
