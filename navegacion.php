<?php if (SesionService::obtenerIdUsuarioLogueado() !== NULL) { ?>
    <head>
    <style>
    .nav-link {
        font-size: 15px;
    }

    .navbar-brand {
        background-color: #30D5C8; 
        border: 3px solid #ccc;
        border-radius: 20px;
        padding: 5px 15px; 
        color: white;
        text-decoration: none;
    }

    .navbar-brand:hover {
        background-color: #30D5C8;
    }

    .navbar {
        text-align: center;
    }

    .navbar-nav {
        display: flex;
        justify-content: center;
        width: 89%;
    }

    .nav-item {
        border: 3px solid #ccc;
        border-radius: 20px; 
        margin: 0 5px;
        background-color: #30D5C8; 
        padding: 0px 10px; 
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .nav-item.active {
        background-color: #30D5C8;
        border-bottom: none;
    }

    .nav-item:last-child {
        background-color: #DE2E03; 
    }

    .nav-item:last-child a {
        color: white; 
    }
    </style>
</head>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <a class="navbar-brand" href="<?php echo BASE_URL ?>">Cotizaciones</a>
        <button class="navbar-toggler" type="button" id="botonMenu" aria-label="Mostrar / ocultar menú">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav">
                <li class="nav-item <?php echo (isset($_GET["p"]) && $_GET["p"] === "clientes") ? 'active' : '' ?>">
                    <a class="nav-link font-size: 20px;" href="<?php echo BASE_URL ?>/?p=clientes">Clientes</a>
                </li>
                <li class="nav-item <?php echo (isset($_GET["p"]) && $_GET["p"] === "cotizaciones") ? 'active' : '' ?>">
                    <a class="nav-link" href="<?php echo BASE_URL ?>/?p=cotizaciones">Cotizaciones</a>
                </li>
                <li class="nav-item <?php echo (isset($_GET["p"]) && $_GET["p"] === "editar_ajustes") ? 'active' : '' ?>">
                    <a class="nav-link" href="<?php echo BASE_URL ?>/?p=editar_ajustes">Ajustes</a>
                </li>
                <li class="nav-item <?php echo (isset($_GET["p"]) && $_GET["p"] === "creditos") ? 'active' : '' ?>">
                    <a class="nav-link" href="<?php echo BASE_URL ?>/?p=creditos">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>/?p=logout">Salir</a>
                </li>
            </ul>
        </div>
    </nav>
<?php } ?>
<div class="container">
