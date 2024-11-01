<?php
$tokenCSRF = Utiles::obtenerTokenCSRF();
?>
<div class="row">
    <div class="col-sm text-center">
        <h1 style="color: #1919E6;">Nuevo cliente</h1>
    </div>
</div>
<div class="row">
    <div class="col-sm text-center">
        <form method="post" action="<?php echo BASE_URL ?>/?p=guardar_cliente">
            <input type="hidden" name="tokenCSRF" value="<?php echo $tokenCSRF ?>">
            <div class="form-group">
                <label for="razonSocial">Nombre o razón social</label>
                <input autofocus name="razonSocial" autocomplete="off" required type="text" class="form-control"
                       id="razonSocial" placeholder="Ejemplo: Fredy Quej">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-success" href="<?php echo BASE_URL ?>/?p=clientes">&larr; Volver</a>
        </form>
    </div>
</div>