<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Copia de seguretat</title>
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
    <h1>Copia de seguretat</h1>
    <p>Amb aquesta funció podràs fer una copia de seguretat del directori /home a un directori anomenat /tmp.</p>

    <form method="post">
        <button type="submit" name="run_script">Per executar, pulsa aqui</button>
    </form>

    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['run_script'])) {
    $script = 'backup.py';
    $command = "python3 $script"; // Eliminado el condicional de sistema operativo
    $output = shell_exec($command . " 2>&1");
    echo "<pre>$output</pre>";
}
    ?>
</div>

</body>
</html>
