<?php
  $page_title = 'Home Page';
  require_once('include/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect(SITE_URL.'index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>

<style>
  .home_saul{
    display:flex;
    justify-content: flex-start;
    flex-direction: column;
  }
</style>
<div class="row">
  <div class="col-md-9">
    <?php echo display_msg($msg); ?>
  </div>
  <div class="col-md-9">
    <div class="panel">
      <div class="jumbotron text-left">

      <div class="home_saul">
        <img src="assets/img/robeniorsystem.png" style="width: 80%;">
          <h2>Bienvenido! Seleccione una opci&oacute;n en el men&uacute; de la izquierda para comenzar.</h2>
      </div>  

      </div>
    </div>
  </div>
</div>
<?php include_once('layouts/footer.php'); ?>
