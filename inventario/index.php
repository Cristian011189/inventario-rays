<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<center>
<div class="login-page" style="border-radius: 15px; box-shadow: 0px 0px 6px 1px rgba(0,0,0,0.75);">
    <div class="text-center" >
       <h1>Bienvenido</h1>
       <p>Iniciar sesión </p>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Usario</label>
              <input type="name" class="form-control" name="username" placeholder="Usario">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Contraseña</label>
            <input type="password" name= "password" class="form-control" placeholder="Contraseña">
        </div><br>
        <div class="form-group">
               <center> <button type="submit" class="btn btn-info  pull-right">Entrar</button></center>
        </div><br><br>
    </form>
</div></center>
<?php include_once('layouts/footer.php'); ?>
