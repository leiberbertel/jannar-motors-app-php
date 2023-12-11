<?php 

session_start();

if(empty($_SESSION['active'])) {
    header ('location:../../');
}
?>
 <header class="container-fluid">
    <div class="p-3 row text-white header">
      <div class="col">
        <img src="../assets/img/engine.png" width="60" class="rounded img-fluid mx-auto d-block"
          alt="Logo Jannar's Motor's">
      </div>
      <div class="col text-center">
        <h5 class="h5">Jannar's Motors</h5>
        <p class="lead fs-6">Ventas de vehículos veloces y eficientes</p>
      </div>
      <div class="col text-contact">
        <p>Leiber Bertel S.A.S</p>
        <p>Leiber@ejemplo.com</p>
        <p>3000234344</p>
      </div>
    </div>
  </header>
  <?php include "nav.php"; ?>