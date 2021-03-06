<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario contacto</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="stilos.css">

  </head>
  <body>
    <div class="wrap">
      <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" class="form-control"id="nombre" name="nombre" placeholder="nombre: " value="<?php if(!$enviado && isset($nombre))echo $nombre ?>">
          <input type="email" class="form-control"id="correo" name="email" placeholder="correo: " value="<?php if(!$enviado && isset($email))echo $email ?>">
          <textarea name="mensaje" class="form-control" id="mensaje" placeholder="mensaje" ><?php
             if(!$enviado && isset($mensaje))echo $mensaje
           ?></textarea>
            <?php if(!empty($errores)): ?>
                  <div class="alert error">
                    <?php echo $errores; ?>
                  </div>
                <?php elseif($enviado): ?>
                  <div class="aler exito">
                    <p>Enviado correctamente</p>
                  </div>
              <?php endif ?>
          <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">

      </form>
    </div>

  </body>
</html>
