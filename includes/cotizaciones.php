<?php
$cotizaciones = Cotizaciones::todas();
$tokenCSRF = Utiles::obtenerTokenCSRF();
?>

<div class="row d-flex justify-content-center align-items-center">
    <div class="col-sm text-center">
        <h1 style="color: #1919E6;">Cotizaciones</h1>
    </div>
</div>

<div class="row">
    <div class="col-sm" style="text-align: center;">
        <p>
            <a href="<?php echo BASE_URL ?>/?p=nueva_cotizacion" class="btn btn-success">
                <i class="fa fa-plus"></i> Nueva cotización
            </a>
        </p>
    </div>
    
   
</div>

<div class="row">
    <div class="col-sm">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Detalles y características</th>
                    <th>Imprimir</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($cotizaciones as $cotizacion) { ?>
                    <tr>
                        <td><?php echo $cotizacion->id ?></td>
                        <td><?php echo htmlentities($cotizacion->razonSocial) ?></td>
                        <td><?php echo htmlentities($cotizacion->descripcion) ?></td>
                        <td><?php echo htmlentities($cotizacion->fecha) ?></td>
                        <td>
                            <a class="btn btn-info"
                               href="<?php echo BASE_URL ?>/?p=detalles_caracteristicas_cotizacion&id=<?php echo $cotizacion->id ?>">
                                <i class="fa fa-info"></i>
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-info"
                               href="<?php echo BASE_URL ?>/?p=imprimir_cotizacion&id=<?php echo $cotizacion->id ?>">
                                <i class="fa fa-print"></i>
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-warning"
                               href="<?php echo BASE_URL ?>/?p=editar_cotizacion&id=<?php echo $cotizacion->id ?>">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-danger"
                               href="<?php echo BASE_URL ?>/?p=eliminar_cotizacion&id=<?php echo $cotizacion->id ?>&tokenCSRF=<?php echo $tokenCSRF ?>">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>