<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuari'];
    $contrasena = $_POST['passwd'];

    // Escapar els valors per la seguretat en shell
    $usuari_escapat = escapeshellarg($usuari);
    $passwd_escapat = escapeshellarg($passwd);

    // Executar el script Python
    $script = "sudo python3 user.py $usuari_escapat $passwd_escapat";
;
    echo "<pre>shell_exec($script)</pre>";
}
?>

<!-- Formulari HTML -->
<!DOCTYPE html>
<html>
<head>
    <title>Crear Usuari</title>
</head>
<body>
    <h2>Crear Usuario/h2>
    <p>A traves d'aquest ofrmulari podrás crear un nou usuari pel teu servidor (No es guardará en la BBDD de la web, pel que no tindrá accés a aquesta)</p>
    <form method="post" action="">
        <label>Username:</label><br>
        <input type="text" name="usuari" required><br><br>

        <label>Contrasenya:</label><br>
        <input type="password" name="passwd" required><br><br>

        <input type="submit" value="Crear Usuario">
    </form>
</body>
</html>
