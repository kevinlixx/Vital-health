<?php
    require_once "./clases/Crud.php";
    $crud = new crud();
    $datos = $crud->mostrarDatos();
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
        <link rel="stylesheet" href="./css/style-registros.css">
        <link rel="stylesheet" href="./css/tablet-admin.css" media="screen and (min-width: 600px)"/>
        <link rel="stylesheet" href="./css/desktop-admin.css" media="screen and (min-width: 800px)"/>
    </head>
<body>
    <header>
        <section class="section_header">
            <a href="./index-ingreso_admin.php">
                <figure class="figure_header"> 
                    <img 
                    src="./img/logo_header.svg  " 
                    alt="logo de vital health"
                    />  
                    <figcaption></figcaption> 
                </figure>
            </a>
            <div class="menu menu-header">
                <a href="./index-ingreso_admin.php">
                    <figure id="btn_menu">
                        <img src="./img/menu.svg" alt="menu"/>  
                        <figcaption></figcaption> 
                    </figure>    
                </a>            
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
        <div class="container--logisn"> 
            <div class="container--ingreso">
        <!-- ventana que emerge para iniciar sesion -->
            <div class="div--ventana" id="ventIngre">
                <div class="cerrar-ventana"><a href="javascript:cerrarIngreso()"><i class="fa-solid fa-xmark"></i></a></div>
                <div>
                    <h2 class="title--ventana">Iniciar sesión</h2>
                    <input type="email" name="" placeholder="correo electronico" id="" class="input--inicio">
                    <input type="password" name="" placeholder="contraseña" id="" class="input--inicio">
                    <input type="button" type="submit" value="ingresar" class="input--button">
                    <a href="javascript:abrirRegistro()" class="opcion--registro">registrarse</a>
                </div>
            </div>
            <!-- ventana que emerge para registrarse -->
            <div class="div--ventanaRegistro" id="ventRegis">
                <div class="cerrar-ventana"><a href="javascript:cerrarRegistro()"><i class="fa-solid fa-xmark"></i></a></div>
                <div>
                    <h2 class="title--ventana">Registrarse</h2>
                    <div class="div--registro">
                        <input type="text" name="" placeholder="primer nombre" id="" class="input--registro">
                        <input type="text" name="" placeholder="segundo nombre" id="" class="input--registro">
                    </div>
                    <div class="div--registro">
                        <input type="text" name="" placeholder="primer apellido" id="" class="input--registro">
                        <input type="text" name="" placeholder="segundo apellido" id="" class="input--registro">
                    </div>
                    <input type="email" name="" placeholder="correo electronico" id="" class="input--inicio">
                    <input type="password" name="" placeholder="contraseña" id="" class="input--inicio">
                    <input type="password" name="" placeholder="confirmar contraseña" id="" class="input--inicio">
                    <input type="button" type="submit" value="registrar" class="input--button">
                </div>
            </div>
            
            <!-- contenido para los Registros -->
            <div class="div--registros">
                    <h1>Registros</h1>
            <?php
                foreach ($datos as $item) {
            ?>
                    <div class="div--formulario">
                        <h2>Fecha: <?php echo $item->fecha;?></h2>
                        <div class="container--sections">
                            <div class="container--sections-infoOne">
                                <section class="section--info">
                                    <p class="subtitle">Nombre:</p>
                                    <p><?php echo $item->nombre;?></p>
                                </section>
                                <section  class="section--info">
                                    <p class="subtitle">Apellidos:</p>
                                    <p><?php echo $item->apellido;?></p>   
                                </section>
                                <section  class="section--info">
                                    <p class="subtitle">Tipo documento:</p>
                                    <p><?php echo $item->documento["tipo"];?></p>   
                                </section>
                                <section  class="section--info">
                                    <p class="subtitle">Numero de documento:</p>
                                    <p><?php echo $item->documento["numero"];?></p>   
                                </section>
                                <section  class="section--info">
                                    <p class="subtitle">Correo:</p>
                                    <p><?php echo $item->correo;?></p>   
                                </section>
                                <section  class="section--info">
                                <p class="subtitle">Dirección:</p>
                                <p><?php echo $item->direccion;?></p>   
                                </section>
                            </div>
                            <div>
                                <section  class="section--info">
                                <p class="subtitle">Telefono:</p>
                                <p><?php echo $item->telefono;?></p>   
                                </section>
                                <section  class="section--info">
                                    <p class="subtitle">Ciudad:</p>
                                    <p><?php echo $item->ciudad;?></p>   
                                </section>
                                <section  class="section--info">
                                    <p class="subtitle">Eps:</p>
                                    <p><?php echo $item->eps;?></p>   
                                </section>
                                <section  class="section--info">
                                    <p class="subtitle">Servicio:</p>
                                    <p><?php echo $item->servicio;?></p>   
                                </section>
                                <section  class="section--info">
                                    <p class="subtitle">Estado:</p>
                                    <p><?php
                                    if ($item->estado==false) {
                                        echo "Registro sin exportar";
                                    }else {
                                        echo "Registro exportado";
                                    }
                                    ?></p>   
                                </section>
                            </div>
                        </div>
                        <a href="registro-modificar.php?id=<?php echo $item->_id; ?>">Modificar</a>
                    </div> 
                    
                
                <?php  } ?>
                </div>
            </div>
            <div class="container--export">
                <a href="./export-excel.php" class="">
                    <div class="export--excel">
                            <p>Exportar a excel</p>
                            <figure class="figure_excel"> 
                                <img 
                                src="./img/logo-excel.png" 
                                alt="logo de vital health"
                                />  
                                <figcaption></figcaption> 
                            </figure>
                    </div>
                </a>
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