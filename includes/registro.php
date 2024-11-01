<?php
$tokenCSRF = Utiles::obtenerTokenCSRF();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
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
        #app {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px; /* Espaciado interno */
            border-radius: 0px; /* Bordes redondeados */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0); /* Sombra */
            background-color: transparent; /* Fondo transparente */
        }

        .col-sm-12, .col-lg-4 {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 255); /* Fondo blanco semi-transparente */
            padding: 10px; /* Espaciado interno */
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0); /* Sombra */
        }
        .alert.alert-danger {
        text-align: center; /* Centra el texto de la alerta */
        }
    </style>
</head>

    <div class="row" style="display: flex; flex-direction: column; align-items: center;">
        <div class="col-sm-12 col-lg-4" style="margin-bottom: 5px;">
            <h2>Registro</h2>
        </div> 
        <div> 
            <div class="alert alert-info">
                Regístrate a Sistema de Cotizaciones
            </div>
        </div>
    </div>
    
    <div class="row" id="app">
        <div class="col-sm-12 col-lg-4">
            <form ref="form" method="post" action="<?php echo BASE_URL ?>/?p=guardar_usuario">
                <input type="hidden" name="tokenCSRF" value="<?php echo $tokenCSRF ?>">
                <div class="form-group">
                    <label for="correo">Gmail</label>
                    <input autofocus name="correo" autocomplete="off" required type="email" class="form-control" id="correo" placeholder="Ingrese su correo">
                </div>
                <div class="form-group">
                    <label for="pass">Contraseña</label>
                    <input v-model="usuario.pass" name="pass" autocomplete="off" required type="password" class="form-control" id="pass" placeholder="Escribe su contraseña">
                </div>
                <div class="form-group">
                    <label for="pass2">Confirma tu contraseña</label>
                    <input v-model="usuario.pass2" name="pass2" autocomplete="off" required type="password" class="form-control" id="pass2" placeholder="Vuelve a escribir su contraseña">
                </div>
                <button type="button" @click="registrar" class="btn btn-primary">Registrarme</button>
                <br>
                <a href="<?php echo BASE_URL ?>?p=login">Ya tengo una cuenta</a>
            </form>
        </div>
        <div v-show="mostrarAlertaPassNoCoincide" style="width: 75%; text-align: center;">
            <br>
            <div class="alert alert-danger">
                Las contraseñas no coinciden
            </div>
        </div>
    </div>
    <script>
        new Vue({
            el: "#app",
            data: () => ({
                usuario: {
                    pass: "",
                    pass2: "",
                },
                mostrarAlertaPassNoCoincide: false,
            }),
            methods: {
                registrar() {
                    this.mostrarAlertaPassNoCoincide = false;
                    if (!this.$refs.form.checkValidity()) {
                        return this.$refs.form.reportValidity();
                    }
                    if (this.usuario.pass && (this.usuario.pass !== this.usuario.pass2)) {
                        return this.mostrarAlertaPassNoCoincide = true;
                    }
                    this.$refs.form.submit();
                }
            }
        });
    </script>
</body>
</html>
