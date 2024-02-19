<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vital health</title>
    <script src="https://kit.fontawesome.com/79e6024c63.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@300;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/style-export.css">
    <link rel="stylesheet" href="./css/tablet-admin.css" media="screen and (min-width: 600px)" />
    <link rel="stylesheet" href="./css/desktop-admin.css" media="screen and (min-width: 800px)" />
</head>

<body>
    <header>
        <section class="section_header">
            <a href="./index-ingreso_admin.html">
                <figure class="figure_header">
                    <img src="./img/logo_header.svg  " alt="logo de vital health" />
                    <figcaption></figcaption>
                </figure>
            </a>
            <div class="menu menu-header">
                <figure id="btn_menu">
                    <img src="./img/menu.svg" alt="menu" />
                    <figcaption></figcaption>
                </figure>
                <div id="back_menu"></div>
                <nav id="nav" class="menu-section">
                    <img src="img/logo_header.svg" alt="">
                    <ul>
                        <li><a href="./index-ingreso_admin.php">Inicio</a></li>
                        <li><a href="./registros.php">Registros</a></li>
                        <li><a href="./index-admin.php" id="selected">Cerrar Sesión</a></li>
                    </ul>
                </nav>
            </div>
            </a>
    </header>
    <main>
        <div class="div--container-exportar">
            <div class="div--exportar">
                <h1>Exportar</h1>
                <div class="div--container-formulario">
                    <form action="./procesos/exportar.php" method="post" class="div--formulario-export">
                        <p>Dame la primera fecha que deseas exportar</p>
                        <input type="date" name="fechaInicio" id="fechaInicio" placeholder="">
                        <p>Digita hasta que fecha deseas exportar</p>
                        <input type="date" name="fechaFin" id="fechaFin" placeholder="">
                        <p>¿Deseas incluir los registros que ya se exportaron anteriormente?</p>
                        <select id="respuesta" name="respuesta">
                            <option value="true">Sí</option>
                            <option value="false">No</option>
                        </select>
                        <input type="submit" value="exportar" class="input--button">
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="pie-pagina">
        <div class="footer_copy">
            <small>&copy; 2023 <b>Vital Health</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>

</html>