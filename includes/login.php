<?php
$tokenCSRF = Utiles::obtenerTokenCSRF();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        /* Estilo adicional para el contenedor y título */
        h2 {
            color: #1919E6;
            text-align: center;
            font-family: 'Arial Black', sans-serif;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .row {
            margin-top: 1%;
            display: flex;
            justify-content: center;
        }

        .col-sm-12, .col-lg-4 {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 255);
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }
    </style>

</head>
    <div class="row">
        <div class="col-sm-12 col-lg-4">
            <h2>Inicio de sesión</h2>
        </div>
    </div>      

<div class="row">
    <div class="col-sm-12 col-lg-4">
        <form ref="form" method="post" action="<?php echo BASE_URL ?>/?p=iniciar_sesion">
            <input type="hidden" name="tokenCSRF" value="<?php echo $tokenCSRF ?>">
            <div class="form-group">
                <label for="correo">Gmail</label>
                <input autofocus name="correo" autocomplete="off" required type="email" class="form-control"
                       id="correo" placeholder="Ingrese su correo">
            </div>
            <div class="form-group">
                <label for="pass">Contraseña</label>
                <input name="pass" autocomplete="off" required type="password" class="form-control"
                       id="pass" placeholder="Escribe su contraseña">
            </div>
            <?php
            if (isset($_GET["mensaje"])) {
                ?>
                <br>
                <div class="alert alert-warning">
                    <?php if ($_GET["mensaje"] == "1") { ?>
                        El usuario o la contraseña no coinciden
                    <?php } ?>
                    <?php if ($_GET["mensaje"] == "2") { ?>
                        Inicia sesión para acceder al contenido
                    <?php } ?>
                    <?php if ($_GET["mensaje"] == "3") { ?>
                        Sesión cerrada
                    <?php } ?>
                </div>
            <?php } ?>
            <button type="submit" class="btn btn-primary">Entrar <i class="fa fa-arrow-right"></i></button>
            <br>
            <a href="<?php echo BASE_URL ?>?p=registro">Registrarme</a>
        </form>
    </div>
</div>
</body>
</html>