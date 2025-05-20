<?php
session_start();
if (!isset($_SESSION['usuari'])) {
  header('Location: login.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Consultoria de Hardening</title>
  <link rel="stylesheet" href="diseny.css">
  <script>
  function cargarContenido(seccion) {
    fetch('contenido.php?seccion=' + seccion)
      .then(res => res.text())
      .then(data => {
        document.getElementById('contenido').innerHTML = data;
      });
  }

  window.onload = function() {
    cargarContenido('inicio');
  </script>
</head>
<body>
  <div class="sidebar">
    <ul>
      <li><a href="actus.php">Actualitzacions</a></li>
      <li><a href="backups.php">Backups</a></li>
      <li><a href="temp.php">Temporals</a></li>
      <li><a href="orden.php">Organitzacio de Fitxers</a></li>
      <li><a href="monitoritzar.php">Monitoritzar</a></li>
      <li><a href="rest.php">Punts de Restauracio</a></li>
      <li><a href="users.php">Crear Nous Usuaris</a></li>
    </ul>
  </div>


  <div class="main-content">
    <div class="contenido-central">
      <h2>Contenido</h2>
      <div id="contenido">
        <p>Gràcies per descarregar aquesta eina de gestió de sistemes Ubuntu Server remotament. Actualment disposa de 7 processos, per[o aquesta xifra augmentara en el futur. Recordi donar els permisos necessaris per a que la web funcioni. Tota aquesta informacio la podras trobar en el readme>
      </div>
    </div>

    <div class="right-panel">
      <div class="profile-card">
        <h4>Usuari: <?php echo htmlspecialchars($_SESSION['usuari']); ?></h4>
          <a href="logout.php">Tancar la sessio</a>
        <div class="profile-pic"></div>
      </div>
      <div class="info-card">
        <h4>Historial</h4>
        <p>Dato 1: ejemplo</p>
        <p>Dato 2: ejemplo</p>
        <p>Dato 3: ejemplo</p>
      </div>
    </div>
  </div>
</body>
</html>


