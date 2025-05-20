<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ACTUALITZACIONS</title>
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
    <h1>Actualitzacions</h1>
    <p>Amb aquesta funció podrás actualitzar el sistema del teu ordinador fins la seva última versió.</p>

    <form method="post">
        <button type="submit" name="run_script">Per executar, pulsa aqui</button>
    </form>

    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['run_script'])) {
    $script = 'actus.py';
    $command = "python3 $script"; // Eliminado el condicional de sistema operativo
    $output = shell_exec($command . " 2>&1");
    echo "<pre>$output</pre>";
}
    ?>
</div>

</body>
</html>
