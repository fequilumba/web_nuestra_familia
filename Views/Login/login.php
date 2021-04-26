<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Fausto Quilumba">
    <meta name="theme-color" content="#009688">
    <link rel="shortcut icon" href="<?= media(); ?>/images/LOGO.png">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
    <title><?= $data['page_tag']; ?></title>
  </head>
  <body>
    <div class="cover">
      <section class="login-content">
        <div class="login-box">
          <form class="login-form" action="index.html">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>LOGIN</h3>
  
            <div class="form-group">
              <label class="control-label"><i class="fas fa-user"></i> Usuario</label>
              <input class="form-control" type="text" placeholder="Ingrese su cédula" autofocus>
            </div>
            <div class="form-group">
              <label class="control-label"><i class="fas fa-key"></i> Contraseña</label>
              <input id="clavea" name="clavea" class="form-control" type="password" placeholder="Contraseña" required>

            </div>

            <div class="form-group row">
              <label for="" class="col-sm-5 col-form-label"><i class="fas fa-user-tag"></i> Rol</label>
              <div class="col-sm-12">
                <select name="rol_idrol" id="rol_idrol"class="form-control"></select>
              </div>
            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-info float-right">Ingresar</button>
              <button class="btn btn-outline-info float-left"  OnClick="location.href='registro.php'">Crear Cuenta</button><br>
            </div>
          </form>
          
        </div>
      </section>
    </div>
    <!-- Essential javascripts for application to work-->
    <script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media(); ?>/js/popper.min.js"></script>
    <script src="<?= media(); ?>/js/bootstrap.min.js"></script>
    <script src="<?= media(); ?>/js/main.js"></script>
    <script src="<?= media(); ?>/js/fontawesome.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
  </body>
</html>