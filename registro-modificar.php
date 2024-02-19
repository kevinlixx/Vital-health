<?php 
require_once "./clases/Crud.php";   
$id = new MongoDB\BSON\ObjectId($_GET['id']);
$crud = new crud();
$id_registro = array(
    "_id" => $id   
);

$consulta = $crud->consultaInfo($id_registro);

?>

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
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@300;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/style-registro.css">
        <link rel="stylesheet" href="./css/tablet-admin.css" media="screen and (min-width: 600px)"/>
        <link rel="stylesheet" href="./css/desktop-admin.css" media="screen and (min-width: 800px)"/>
    </head>
<body>
    <header>
        <section class="section_header">
            <a href="./index-ingreso_admin.html">
                <figure class="figure_header"> 
                    <img 
                    src="./img/logo_header.svg  " 
                    alt="logo de vital health"
                    />  
                    <figcaption></figcaption> 
                </figure>
            </a>
            <div class="menu menu-header">
                    <figure id="btn_menu">
                        <img src="./img/menu.svg" alt="menu"/>  
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
        <div class="div--container-modificar">
            <div class="div--registro-info">
                <h1>Registro</h1>
                <div class="div--container-formulario">
                <?php
                foreach ($consulta as $item) {
                    $id_mongo= $item->_id
                ?>
                    <div class="div--formulario">
                        <h2>Fecha: <?php echo $item->fecha;?></h2>
                        <div class="container--sections">
                            <form action="" method="POST">
                                <div class="form-modificar">
                                    <div class="container--modificar">
                                        <input type="text" hidden value="<?php echo $id_mongo?>" name="id">

                                        <label for="nombre" class="formulario__label">Nombres</label>
                                        <input type="text" class="formulario__input" name="nombre" id="nombre" value="<?php echo $item->nombre ?>">

                                        <label for="apellido" class="formulario__label">Apellidos</label>
                                        <input type="text" class="formulario__input" name="apellido" id="apellido" value="<?php echo $item->apellido ?>">

                                        <label for="tipoDocumento" class="formulario__label">Tipo de documento</label>
                                        <select type="text" class="formulario__input" name="tipoDocumento" id="tipoDocumento">
                                            <option value="<?php echo $item->documento["tipo"] ?>"><?php echo $item->documento["tipo"] ?></option>
                                            <option value="C.C.">Cedula de ciudadania</option>
                                            <option value="Pasaporte">Pasaporte</option>
                                        </select>

                                        <label for="documento" class="formulario__label">Documento</label>
                                        <input type="text" class="formulario__input" name="documento" id="documento" value="<?php echo $item->documento["numero"]?>">

                                        <label for="correo" class="formulario__label">Correo Electrónico</label>
                                        <input type="email" class="formulario__input" name="correo" id="correo" value="<?php echo $item->correo ?>">

                                        <label for="telefono" class="formulario__label">Teléfono</label>
                                        <input type="text" class="formulario__input" name="telefono" id="telefono" value="<?php echo $item->telefono ?>">
                                    </div>
                                    <div>
                                        

                                        <label for="direccion" class="formulario__label">Dirección</label>
                                        <input type="text" class="formulario__input" name="direccion" id="direccion" value="<?php echo $item->direccion ?>">

                                        <label for="ciudad" class="formulario__label">Ciudad</label>
                                        <input type="text" class="formulario__input" name="ciudad" id="ciudad" value="<?php echo $item->ciudad ?>">

                                        <label for="eps" class="formulario__label">EPS</label>
                                        <input type="text" class="formulario__input" name="eps" id="eps" value="<?php echo $item->eps ?>">

                                        <label for="servicio" class="formulario__label">Servicio</label>
                                        <select type="text" class="formulario__input" name="servicio" id="servicio">
                                            <option value="<?php echo $item->servicio?>"><?php echo $item->servicio ?></option>
                                            <option value="Plan Integral">Plan Integral</option>
                                            <option value="Plan Prioritario">Plan Prioritario</option>
                                            <option value="Espacio Preservado">Espacio Preservado</option>
                                        </select>

                                        <label for="servicio" class="formulario__label">Servicio</label>
                                        <select type="text" class="formulario__input" name="estado" id="servicio">
                                            <option value="<?php echo $item->estado?>">
                                            <?php if ($item->estado==false) {
                                                echo "Registro sin exportar";
                                            }else {
                                                echo "Registro exportado";
                                            } ?></option>
                                            <option value="true">Registro exportado</option>
                                            <option value="false">Registro sin exportar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="container--button-center">
                                    <div class="container--button">
                                        <input type="submit" value="Modificar" name="accion" class="input--button">
                                        <input type="submit" value="Eliminar" name="accion" class="input--button">
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        
                    </div> 
                <?php  } ?>
                    </div>
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
     <script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('form');
        const modificarButton = document.querySelector('input[value="Modificar"]');
        const eliminarButton = document.querySelector('input[value="Eliminar"]');

        modificarButton.addEventListener('click', function () {
            form.action = './procesos/actualizar.php';
        });

        eliminarButton.addEventListener('click', function () {
            form.action = './procesos/eliminar.php';
        });
    });
</script>
</body>
</html>