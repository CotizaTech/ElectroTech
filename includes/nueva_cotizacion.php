<?php
$tokenCSRF = Utiles::obtenerTokenCSRF();
$clientes = Clientes::todos();
?>
<div class="row d-flex justify-content-center align-items-center">
    <div class="col-sm text-center">
        <h1 style="color: #1919E6;">Nueva cotización</h1>
    </div>
</div>
<div class="row">
    <div class="col-sm text-center">
        <form method="post" action="<?php echo BASE_URL ?>/?p=guardar_cotizacion">
            <input type="hidden" name="tokenCSRF" value="<?php echo $tokenCSRF ?>">
            <div class="form-group">
                <label for="idCliente">Seleccione un cliente</label>
                <select required class="form-control" name="idCliente" id="idCliente">
                    <?php foreach ($clientes as $cliente) { ?>
                        <option value="<?php echo $cliente->id ?>"><?php echo htmlentities($cliente->razonSocial) ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción de la cotización</label>
                <input autofocus name="descripcion" autocomplete="off" required type="text" class="form-control"
                       id="descripcion" placeholder="Ejemplo: Sistema de ventas, Dispositivos tecnológicos">
            </div>
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input value="<?php echo date("Y-m-d") ?>" name="fecha" autocomplete="off" required type="date"
                       class="form-control" id="fecha">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-success" href="<?php echo BASE_URL ?>/?p=cotizaciones">&larr; Volver</a>
        </form>
    </div>
</div>