<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $usuari = $_POST['usuari'] ?? '';
  $passwd = $_POST['passwd'] ?? '';

  // Buscar el usuario por nombre
  $stmt = $pdo->prepare("SELECT * FROM usuaris WHERE User = ?");
  $stmt->execute([$usuari]);
  $user = $stmt->fetch();

  // Verificar si existe y la contraseña es correcta usando password_verify
  if ($user && password_verify($passwd, $user['Password'])) {
    $_SESSION['usuari'] = $user['User'];
    header('Location: index.php');
    exit;
  } else {
    $error = "Usuari o contrasenya incorrecte.";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Iniciar sessió</title>
</head>
<body>
  <h2>Login</h2>
  <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
  <form method="POST">
    <input type="text" name="usuari" placeholder="Usuari" required><br><br>
    <input type="password" name="passwd" placeholder="Contrasenya" required><br><br>
    <button type="submit">Entrar</button>
  </form>
  <p>No tens compte? <a href="register.php">Registra't aquí</a></p>
</body>
</html>

