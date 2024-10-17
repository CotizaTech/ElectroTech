<?php
$tokenCSRF = Utiles::obtenerTokenCSRF();
?>

<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<div class="row" style="margin-top: 1%;">
    <div class="col-sm-12 col-lg-4 offset-lg-4">
        <h2 style="color: #007BFF;">Inicio de sesión</h2>
    </div>
</div>
<div class="row" id="app">
    <div class="col-sm-12 col-lg-4 offset-lg-4">
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
                        Sesión cerrada, vuelve pronto
                    <?php } ?>
                </div>
            <?php } ?>
            <button type="submit" class="btn btn-primary">Entrar <i class="fa fa-arrow-right"></i></button>
            <br>
            <a href="<?php echo BASE_URL ?>?p=registro">Registrarme</a>
        </form>
    </div>
</div>