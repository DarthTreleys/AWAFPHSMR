<?php
session_start();
require 'db.php'; // Este archivo debe contener tu conexión PDO como $pdo

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $usuari = $_POST['usuari'] ?? '';
  $passwd = $_POST['passwd'] ?? '';
  $confirm_passwd = $_POST['confirm_passwd'] ?? '';
  $error = '';

  // Validación básica
  if (empty($usuari) || empty($passwd) || empty($confirm_passwd)) {
    $error = "Tots els camps són obligatoris.";
  } elseif ($passwd !== $confirm_passwd) {
    $error = "Les contrasenyes no coincideixen.";
  } else {
    // Verificar si el usuario ya existe
    $stmt = $pdo->prepare("SELECT * FROM usuaris WHERE User = ?");
    $stmt->execute([$usuari]);
    if ($stmt->fetch()) {
      $error = "Aquest usuari ja existeix.";
    } else {
      // Hashear la contraseña
      $passwd_hash = password_hash($passwd, PASSWORD_DEFAULT);

      // Insertar nuevo usuario
      $stmt = $pdo->prepare("INSERT INTO usuaris (User, Password) VALUES (?, ?)");
      if ($stmt->execute([$usuari, $passwd_hash])) {
        $_SESSION['usuari'] = $usuari;
        header('Location: index.php');
        exit;
      } else {
        $error = "Error en registrar l'usuari.";
      }
    }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registrar-se</title>
</head>
<body>
  <h2>Registre</h2>
  <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
  <form method="POST">
    <input type="text" name="usuari" placeholder="Usuari" required><br><br>
    <input type="password" name="passwd" placeholder="Contrasenya" required><br><br>
    <input type="password" name="confirm_passwd" placeholder="Confirma la contrasenya" required><br><br>
    <button type="submit">Registrar</button>
  </form>
</body>
</html>
