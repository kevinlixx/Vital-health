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
        
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/style-admin.css">
        <link rel="stylesheet" href="./css/tablet-admin.css" media="screen and (min-width: 600px)"/>
        <link rel="stylesheet" href="./css/desktop-admin.css" media="screen and (min-width: 800px)"/>
    </head>
<body>
    <header>
        <section class="section_header">
            <figure class="figure_header"> 
                <img 
                src="./img/logo_header.svg  " 
                alt="logo de vital health"
                />  
                <figcaption></figcaption> 
            </figure>
            <div class="menu menu-header">
                    <figure id="btn_menu">
                        <img src="./img/menu.svg" alt="menu"/>  
                        <figcaption></figcaption> 
                    </figure>                
                <div id="back_menu"></div>
                <nav id="nav" class="menu-section">
                    <img src="img/logo_header.svg" alt="">
                    <ul> 
                        <li><a href="./index-admin.php">Inicio</a></li>
                        <li><a href="#quienes_somos">Quienes somos</a></li>
                        <li><a href="#servicios">Servicios</a></li>
                        <li><a href="#registrate">Registro</a></li>
                        <li><a href="javascript:abrirIngreso()" id="selected">Iniciar sesion</a></li>
                    </ul>
                </nav>
            </div>
        </a>
    </header>
    <main>
        <div class="container--ingreso">
            <!-- ventana que emerge para iniciar sesion -->
            <div class="div--ventana" id="ventIngre">
                <div class="cerrar-ventana"><a href="javascript:cerrarIngreso()"><i class="fa-solid fa-xmark"></i></a></div>
                <div>
                    <form action="./procesos/consulta-admins.php" method="post">
                        <h2 class="title--ventana">Iniciar sesión</h2>
                        <input type="email" name="correo_electronico" placeholder="correo electronico" id="" class="input--inicio">
                        <input type="password" name="contrasena" placeholder="contraseña" id="" class="input--inicio">
                        <input type="submit" value="ingresar" class="input--button">
                        <a href="javascript:abrirRegistro()" class="opcion--registro">registrarse</a>
                    </form>
                </div>
            </div>
            <!-- ventana que emerge para registrarse -->
            <div class="div--ventanaRegistro" id="ventRegis">
                <div class="cerrar-ventana"><a href="javascript:cerrarRegistro()"><i class="fa-solid fa-xmark"></i></a></div>
                <form action="./procesos/insertar-admins.php" method="post">
                    <h2 class="title--ventana">Registrarse</h2>
                    <div class="div--registro">
                        <input type="text" name="primer_nombre" placeholder="primer nombre"  class="input--registro" required>
                        <input type="text" name="segundo_nombre"placeholder="segundo nombre" class="input--registro" required>
                    </div>
                    <div class="div--registro">
                        <input type="text" name="primer_apellido" placeholder="primer apellido"  class="input--registro" required>
                        <input type="text" name="segundo_apellido" placeholder="segundo apellido"  class="input--registro" required>
                    </div>
                    <input type="email" name="correo_electronico" placeholder="correo electronico" id="email" class="input--inicio" required>
                    <input type="password" name="contrasena" placeholder="contraseña" id="password" class="input--inicio" required>
                    <input type="password" name="" placeholder="confirmar contraseña" id="" class="input--inicio" required>
                    <input type="submit" id="registrar" value="registrar" class="input--button">
                </form>
            </div>
        </div>
        <div id="background_main">
        <!-- quienes somos   -->
        <div class="div--container" id="quienes_somos">
            <h1 class="text-colored">¡Tu salud, nuestra prioridad, únete a nuestra clínica hoy!</h1>

        </div>
        <!-- Historia -->
        <div class="div--info-me" id="historia">
            <div class="row--left">
                <div class="col-md-6">
                    <div class="text">
                        <h1>Historia</h1>
                        <p> Vital Health, fundada en 1990, se ha convertido en un líder en atención médica a través de
                            su compromiso con la calidad y la innovación. Desde la inauguración de su primer hospital
                            especializado en 1995 hasta la implementación de registros médicos electrónicos en 2005 y la
                            apertura de una nueva ala de investigación y desarrollo en 2010, Vital Health ha demostrado
                            un enfoque constante en la mejora de la atención al paciente. Hoy en día, sigue siendo un
                            pilar en la comunidad, ofreciendo atención médica de alta calidad e innovadora.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image_svg">
                        <img src="img/1. first image.png" alt="principal"> <!--muestra el fondo simbolico/-->
                    </div>
                </div>
            </div>
        </div>

        <!-- Misión -->
        <div class="div--info-me" id="mision">
            <div class="row--right">
                <div class="col-md-6">
                    <div class="text">
                        <h1>Misión</h1>
                        <p>En Vital Health, nuestra misión es proporcionar soluciones médicas innovadoras que mejoren y
                            simplifiquen la vida de las personas. Nos esforzamos por ofrecer atención médica de alta
                            calidad, utilizando la tecnología más avanzada para garantizar la mejor atención posible
                            para nuestros pacientes.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image_svg">
                        <img src="img/2. second image.png" alt="secundaria"> <!--muestra el fondo simbolico/-->
                    </div>
                </div>
            </div>
        </div>

        <!-- Visión -->

        <div class="div--info-me" id="vision">
            <div class="row--left">
                <div class="col-md-6">
                    <div class="text">
                        <h1>Visión</h1>
                        <p> Nuestra visión en Vital Health es ser líderes en el campo de la atención médica, impulsando
                            la innovación y la excelencia en cada aspecto de nuestro trabajo. Aspiramos a revolucionar
                            la atención médica a través de soluciones tecnológicas avanzadas, estableciendo nuevos
                            estándares de atención al paciente y mejorando la calidad de vida de las personas en todo el
                            mundo.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image_svg">
                        <img src="img/3. third image.png" alt="terciaria"> <!--muestra el fondo simbolico/-->
                    </div>
                </div>
            </div>
        </div>
        <!-- servicios que ofrecemos -->
        <!-- Titulo -->
        <div class="div--container" id="servicios">
            <h1 class="text-colored">Servicios que ofrecemos</h1>
        </div>

        <!-- Seccion plan integral -->
        <div class="div--info-me" id="planintegral">
            <div class="row--right">
                <div class="col-md-6">
                    <div class="text">
                        <h1>Plan Integral</h1>
                        <p>Acercamos la atención médica a la comodidad de tu hogar o cualquier lugar donde te
                            encuentres, sin necesidad de inscripción o cargos adicionales por el servicio.</p>

                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 1.25a.75.75 0 0 1 .75.75v.251a3.75 3.75 0 0 1 3.7 3.418c.014.166.014.354.014.629V7.52c0 3.87-2.944 7.05-6.714 7.427V17A4.25 4.25 0 0 0 14 21.25h.882a3.369 3.369 0 0 0 3.108-2.068a1.29 1.29 0 0 0 .085-.327A3.001 3.001 0 0 1 19 13a3 3 0 0 1 .575 5.945a2.884 2.884 0 0 1-.201.817a4.869 4.869 0 0 1-4.492 2.988H14A5.75 5.75 0 0 1 8.25 17v-2.05a7.751 7.751 0 0 1-7-7.715v-.937c0-.275 0-.463.015-.628A3.75 3.75 0 0 1 4.67 2.265a6.88 6.88 0 0 1 .58-.015V2a.75.75 0 1 1 1.5 0v2a.75.75 0 0 1-1.5 0v-.25c-.263 0-.366.001-.448.009a2.25 2.25 0 0 0-2.043 2.043c-.008.09-.009.206-.009.535v.898A6.25 6.25 0 0 0 9 13.485a5.964 5.964 0 0 0 5.964-5.964V6.337c0-.329 0-.445-.008-.535a2.25 2.25 0 0 0-2.206-2.05V4a.75.75 0 0 1-1.5 0V2a.75.75 0 0 1 .75-.75Z" />
                            </svg>
                            Atención Médica en Domicilio.
                        </p>

                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M14.35 8.55q-.3-.75-.887-1.175T12.05 6.95q-.45 0-.875.125t-.775.475L8.95 6.1q.35-.35.95-.638T11 5.1V3h2v2.05q1.125.225 1.975.913T16.25 7.75l-1.9.8ZM19.8 22.6L15.2 18q-.375.375-1.025.613T13 18.9V21h-2v-2.15q-1.4-.35-2.337-1.275T7.3 15.25l2-.8q.3 1.05 1.012 1.8T12.2 17q.45 0 .825-.113t.725-.337L1.4 4.2l1.4-1.4l18.4 18.4l-1.4 1.4Z" />
                            </svg>
                            Sin Costos Adicionales.
                        </p>

                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M7.774 5.215L6.326 3.767A9.995 9.995 0 0 1 20.23 17.67l-1.445-1.445a7.99 7.99 0 0 0-11.01-11.01Zm12.588 15.149l-1.279 1.279l-1.413-1.414A9.995 9.995 0 0 1 3.768 6.327l-1.41-1.41l1.278-1.28l1.29 1.292l1.417 1.413L11 11.002V7h1.5v5.25l4.5 2.67l-.75 1.23l-.254-.152Zm-4.136-1.58l-5.793-5.792l-5.218-5.218a7.99 7.99 0 0 0 11.01 11.01Z" />
                            </svg>
                            Sin Esperas en Urgencias.
                        </p>

                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 48 48">
                                <g fill="currentColor">
                                    <path
                                        d="M6 41a1 1 0 0 0 1 1h35v-2H8V18h.871c2.016 0 4.021.612 5.864 1.815c1.846 1.204 3.482 2.971 4.765 5.186c1.419 2.45 3.262 4.462 5.402 5.86C27.047 32.258 29.428 33 31.86 33h6.506l-3.073 3.075a1 1 0 0 0 1.414 1.414l4.78-4.782a1 1 0 0 0 0-1.414l-4.78-4.782a1 1 0 0 0-1.414 1.414L38.367 31H31.86c-2.016 0-4.022-.612-5.865-1.815c-1.845-1.204-3.482-2.971-4.764-5.186c-1.419-2.45-3.262-4.462-5.403-5.86C13.684 16.742 11.303 16 8.871 16H8V6H6v35Z" />
                                    <path fill-rule="evenodd"
                                        d="M31.65 6a1 1 0 0 0-.15 1.989v1.493a6.068 6.068 0 0 0-2.548 1.056l-.988-.988l.143-.143a1 1 0 0 0-1.414-1.414l-1.7 1.7a1 1 0 0 0 1.414 1.414l.143-.143l.988.988a6.067 6.067 0 0 0-1.056 2.548h-1.493a1 1 0 0 0-1.989.15v1.7a1 1 0 0 0 1.989.15h1.493a6.067 6.067 0 0 0 1.056 2.548l-.988.988l-.143-.143a1 1 0 0 0-1.414 1.414l1.7 1.7a1 1 0 0 0 1.414-1.414l-.143-.143l.988-.988a6.05 6.05 0 0 0 2.548 1.056v1.493A1 1 0 0 0 31.65 25h1.7a1 1 0 0 0 .15-1.989v-1.493a6.078 6.078 0 0 0 3.022-1.432l1.364 1.364l-.143.143a1 1 0 0 0 1.414 1.414l1.7-1.7a1 1 0 0 0-1.414-1.414l-.143.143l-1.505-1.505a6.06 6.06 0 0 0 .723-2.031h1.493A1 1 0 0 0 42 16.35v-1.7a1 1 0 0 0-1.989-.15h-1.493a6.067 6.067 0 0 0-1.056-2.548l.988-.988l.143.143a1 1 0 0 0 1.414-1.414l-1.7-1.7a1 1 0 1 0-1.414 1.414l.143.143l-.988.988A6.068 6.068 0 0 0 33.5 9.482V7.989A1 1 0 0 0 33.35 6h-1.7Zm.85 13.6a4.1 4.1 0 1 1 0-8.2a4.1 4.1 0 0 1 0 8.2Z"
                                        clip-rule="evenodd" />
                                </g>
                            </svg>
                            Reducción del Riesgo de Contagio.
                        </p>

                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 64 64">
                                <path fill="currentColor"
                                    d="M56.824 35.562V23.041c0-1.777 1.454-3.222 3.241-3.222a3.222 3.222 0 0 1 3.221 3.222v17.145a9.925 9.925 0 0 1-2.383 6.449L50.212 57.989c-1.061.999-1.321 1.883-1.321 3.223v2.067H37.254l-.013-4.918c0-1.873-.153-4.376 2.191-6.832l13.566-13.622a2.574 2.574 0 0 1 3.751 3.522l-6.543 7.009c-.424.497-1.142 1.434-1.498 2.582c-.192.596-.247 1.177-.258 1.844h2.106c.008-.475.044-.857.157-1.211c.206-.662.616-1.258.925-1.64l6.642-7.29c.835-.842 1.293-1.932 1.293-3.078c0-1.721-1.035-3.304-2.747-4.084zm-49.025 0V23.041c0-1.777-1.454-3.222-3.241-3.222a3.222 3.222 0 0 0-3.221 3.222v17.145c0 2.371.853 4.661 2.384 6.449l10.692 11.354c1.06.999 1.321 1.883 1.321 3.223v2.067h11.637l.013-4.918c0-1.873.153-4.376-2.191-6.832L11.627 37.907a2.574 2.574 0 0 0-3.751 3.522l6.544 7.009c.424.497 1.142 1.434 1.498 2.582c.193.596.247 1.177.258 1.844H14.07c-.008-.475-.043-.857-.158-1.211c-.205-.662-.616-1.258-.925-1.64l-6.642-7.289c-.835-.842-1.293-1.933-1.293-3.078c0-1.722 1.035-3.305 2.747-4.085zM33.536 6.123a2.762 2.762 0 0 0 0-5.526a2.763 2.763 0 0 0 0 5.526zm-14.987.015a2.79 2.79 0 0 1-2.802-2.781a2.79 2.79 0 0 1 2.802-2.78c1.548 0 2.806 1.244 2.806 2.78c0 1.539-1.258 2.781-2.806 2.781zm28.712 10.664a1.938 1.938 0 1 0-.002-3.876a1.938 1.938 0 0 0 .002 3.876z" />
                                <path fill="currentColor"
                                    d="M50.067 17.758H44.84c-.024 0-1.749-.157-1.749-.157l-2.189-7.63c-.881-3.072-3.457-2.978-3.457-2.978h-7.086s-2.574-.094-3.455 2.978l-1.081 3.757l-1.078-3.757c-.886-3.072-3.455-2.978-3.455-2.978h-5.483s-2.576-.094-3.457 2.978l-2.207 7.689c-.21.72.184 1.266.814 1.448c.628.179 1.271-.138 1.432-.711l2.15-7.495l1.047-.002l-3.138 12.977h2.773v9.218c0 .759.612 1.377 1.373 1.377c.759 0 1.38-.618 1.38-1.377v-9.218h1.163v9.218c0 .759.613 1.377 1.372 1.377a1.38 1.38 0 0 0 1.382-1.377v-9.218h2.725L21.511 10.9l1.043.002l2.126 7.416c.035.127.092.243.166.343c.208.315.571.489.975.476c.404.013.765-.16.973-.47a1.01 1.01 0 0 0 .181-.383l2.115-7.383l.964-.002v21.928c0 .896.733 1.62 1.627 1.62c.895 0 1.62-.724 1.62-1.62V20.351h1.198v12.476c0 .896.726 1.62 1.618 1.62c.897 0 1.632-.724 1.632-1.62V10.899l1.048.002l2.058 7.495c.112.369.42.613.789.707c.016.004.024.011.037.015c.328.074 1.84.503 2.95.82v13.6a1.141 1.141 0 0 0 2.28 0v-6.794h.892v6.794c0 .628.509 1.137 1.137 1.137s1.144-.509 1.144-1.137V20.834h.875v4.304c0 .473.383.853.848.853a.842.842 0 0 0 .838-.853v-4.896c.002-1.371-1.205-2.484-2.576-2.484z" />
                            </svg>
                            Servicios Complementarios.
                        </p>

                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 20 20">
                                <g fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M13.322 7.384A4.501 4.501 0 0 1 16 11.5V14a2 2 0 0 1-2 2h-.585c.055.156.085.325.085.5v2A1.5 1.5 0 0 1 12 20h-1a1.5 1.5 0 0 1-1.5-1.5v-2c0-.175.03-.344.085-.5H9a2 2 0 0 1-2-2v-2.5a4.5 4.5 0 0 1 2.678-4.116a3 3 0 1 1 3.643 0Z"
                                        clip-rule="evenodd" opacity=".2" />
                                    <path
                                        d="M12.75 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm-3.5 0a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                    <path fill-rule="evenodd"
                                        d="M10 7a3 3 0 1 0 0-6a3 3 0 0 0 0 6Zm0-5a2 2 0 1 1 0 4a2 2 0 0 1 0-4Zm.5 12h-1A1.5 1.5 0 0 0 8 15.5v2A1.5 1.5 0 0 0 9.5 19h1a1.5 1.5 0 0 0 1.5-1.5v-2a1.5 1.5 0 0 0-1.5-1.5ZM9 15.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-2Z"
                                        clip-rule="evenodd" />
                                    <path
                                        d="M15.5 3.75a.75.75 0 0 1 0-1.5h2a.75.75 0 0 1 0 1.5h-2Zm-13 0a.75.75 0 0 1 0-1.5h2a.75.75 0 0 1 0 1.5h-2Z" />
                                    <path
                                        d="m4.106 3.364l.302-.97l3.698.742l-.302.97l-3.698-.742Zm7.788-.228l.302.97l3.698-.742l-.302-.97l-3.698.742Z" />
                                    <path fill-rule="evenodd"
                                        d="M14.5 10.5a4.5 4.5 0 1 0-9 0V13a2 2 0 0 0 2 2h5a2 2 0 0 0 2-2v-2.5Zm-8 0a3.5 3.5 0 1 1 7 0V13a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-2.5Z"
                                        clip-rule="evenodd" />
                                    <path
                                        d="M1.15 1.878a.514.514 0 0 1 .728-.727l16.971 16.971a.514.514 0 0 1-.727.727L1.151 1.878Z" />
                                </g>
                            </svg>
                            Evita Desplazamientos.
                        </p>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 48 48">
                                <g fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M41.708 23.794L24.058 6.086L6.294 23.792a1 1 0 1 0 1.412 1.416L10 22.922V41a1 1 0 0 0 1 1h26a1 1 0 0 0 1-1V22.907l2.292 2.3a1 1 0 1 0 1.416-1.413ZM24.053 8.914L36 20.9V40H12V20.928L24.053 8.914Z"
                                        clip-rule="evenodd" />
                                    <path
                                        d="M16 25.517C16 22.655 17.794 20 20.25 20c1.704 0 2.97 1.191 3.75 2.88c.78-1.689 2.045-2.88 3.75-2.88c2.456 0 4.25 2.655 4.25 5.517C32 31.645 24 36 24 36s-5.389-2.756-7.32-7.278a8.863 8.863 0 0 1-.36-1a7.851 7.851 0 0 1-.32-2.205Z" />
                                </g>
                            </svg>
                            Cuidados de Calidad para Tu Familia.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image_svg">
                        <img src="img/Plan integral.png" alt="Imagen de Plan Integral">
                    </div>
                </div>
            </div>
        </div>

        <!-- Seccion plan prioritario -->
        <div class="div--info-me" id="planprioritario">
            <div class="row--left">
                <div class="col-md-6">
                    <div class="text">
                        <h1>Plan Prioritario</h1>
                        <p>El plan prioritario es un acuerdo empresarial que brinda protección a los empleados y sus
                            familiares en caso de enfrentar problemas de salud, sin importar su ubicación.</p>

                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M18 5.808q-.698 0-1.195-.497q-.497-.498-.497-1.196t.497-1.195q.497-.497 1.195-.497t1.195.497q.497.497.497 1.195q0 .698-.497 1.196q-.497.497-1.195.497ZM16.73 21.5v-7.77q0-.873-.396-1.573q-.397-.7-1.178-1.11l1.048-2.749q.2-.548.699-.885q.499-.336 1.097-.336t1.097.327q.5.327.7.894l2.703 7.087h-2.654V21.5h-3.115Zm-4.232-10.077q-.546 0-.926-.382t-.38-.928q0-.546.382-.925t.928-.38q.546 0 .926.382t.38.928q0 .545-.382.925t-.928.38ZM5.5 5.808q-.698 0-1.195-.497q-.497-.498-.497-1.196t.497-1.195q.497-.497 1.195-.497t1.195.497q.497.497.497 1.195q0 .698-.497 1.196q-.497.497-1.195.497ZM3.73 21.5v-6.577H2.078V9.038q0-.666.474-1.14q.475-.475 1.141-.475h3.616q.666 0 1.14.475t.475 1.14v5.885H7.27V21.5H3.731Zm7.54 0V18h-1v-4.27q0-.512.358-.871q.36-.359.872-.359h2q.513 0 .872.359t.359.872V18h-1v3.5h-2.462Z" />
                            </svg>
                            Proteccioon de salud familiar.
                        </p>

                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 16 16">
                                <g fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M11 15a4 4 0 1 0 0-8a4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0a5 5 0 0 1 10 0z" />
                                    <path
                                        d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207c0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158c0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522c0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569c0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                    <path
                                        d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                    <path d="M9.998 5.083L10 5a2 2 0 1 0-3.132 1.65a5.982 5.982 0 0 1 3.13-1.567z" />
                                </g>
                            </svg>
                            Acceso a tarifas Preferenciales.
                        </p>

                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 20 20">
                                <path fill="currentColor"
                                    d="M8.5 4.498a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0Zm1.5-2.5a2.5 2.5 0 0 0-2.43 3.086L5.471 4.15a1.761 1.761 0 0 0-2.317.88c-.4.882-.008 1.917.877 2.31L7 8.662v2.287l-1.877 4.645a1.75 1.75 0 0 0 3.245 1.311l.086-.213a5.465 5.465 0 0 1-.424-1.618l-.589 1.457a.75.75 0 1 1-1.39-.562l1.876-4.646A1 1 0 0 0 8 10.95V8.662a1 1 0 0 0-.593-.914L4.438 6.427a.739.739 0 0 1-.373-.983a.761.761 0 0 1 1-.38l3.918 1.744a2.5 2.5 0 0 0 2.034 0l3.918-1.744a.761.761 0 0 1 1 .38a.739.739 0 0 1-.373.983l-2.969 1.321a1 1 0 0 0-.593.914v.545a5.48 5.48 0 0 1 1-.185v-.36l2.968-1.322a1.74 1.74 0 0 0 .877-2.31a1.761 1.761 0 0 0-2.317-.88l-2.097.934a2.5 2.5 0 0 0-2.43-3.086ZM18 14.5a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 9 0Zm-2.146-1.854a.5.5 0 0 0-.708 0L12.5 15.293l-.646-.647a.5.5 0 0 0-.708.708l1 1a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0 0-.708Z" />
                            </svg>
                            Comodidad y Accesibilidad.
                        </p>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 2048 2048">
                                <path fill="currentColor"
                                    d="M1792 1280h256v768H1024v-768h256v-256h512v256zm-384 0h256v-128h-256v128zm512 384h-128v128h-128v-128h-256v128h-128v-128h-128v256h768v-256zm-768-256v128h768v-128h-768zM896 896q0 93-41 174t-117 136q45 23 85 53t73 67v338q0-79-30-149t-82-122t-123-83t-149-30q-80 0-149 30t-122 82t-83 123t-30 149H0q0-73 20-141t57-129t91-108t118-81q-75-54-116-135t-42-174q0-79 30-149t82-122t122-83t150-30q72 0 137 25t119 74q32-29 71-51q-34-35-52-81t-19-95q0-53 20-99t55-82t81-55t100-20q53 0 99 20t82 55t55 81t20 100q0 49-18 95t-53 81q83 46 135 124q52-78 135-124q-34-35-52-81t-19-95q0-53 20-99t55-82t81-55t100-20q53 0 99 20t82 55t55 81t20 100q0 49-18 95t-53 81q46 25 83 61t62 79t40 94t14 102h-128q0-53-20-99t-55-82t-81-55t-100-20q-53 0-99 20t-82 55t-55 81t-20 100h-128q0-53-20-99t-55-82t-81-55t-100-20q-49 0-95 18t-81 53q24 42 36 89t12 96zm768-640q-27 0-50 10t-40 27t-28 41t-10 50q0 27 10 50t27 40t41 28t50 10q27 0 50-10t40-27t28-41t10-50q0-27-10-50t-27-40t-41-28t-50-10zm-640 0q-27 0-50 10t-40 27t-28 41t-10 50q0 27 10 50t27 40t41 28t50 10q27 0 50-10t40-27t28-41t10-50q0-27-10-50t-27-40t-41-28t-50-10zm-512 896q53 0 99-20t82-55t55-81t20-100q0-53-20-99t-55-82t-81-55t-100-20q-53 0-99 20t-82 55t-55 81t-20 100q0 53 20 99t55 82t81 55t100 20z" />
                            </svg>
                            Beneficio Laboral Adicional.
                        </p>
                    </div>
                </div>
                        <div class="col-md-6">
                            <div class="image_svg">
                                <img src="img/Plan Prioritario.png" alt="Imagen de Plan Prioritario">
                    </div>
                </div>
            </div>
        </div>

        <!-- Seccion plan preservado -->
        <div class="div--info-me" id="planpreservado">
            <div class="row--right">
                <div class="col-md-6">
                    <div class="text">
                        <h1>Espacio Preservado</h1>
                        <p>Reduce la cantidad de empleados ausentes debido a emergencias médicas y proporciona atención
                            médica de urgencia y emergencia en el lugar. El Plan de Espacio Perservado ofrece una
                            cobertura integral para empleados, proveedores, clientes, estudiantes y visitantes dentro de
                            un espacio designado, garantizando una atención médica oportuna en caso de una emergencia.
                        </p>

                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 1.25a.75.75 0 0 1 .75.75v.251a3.75 3.75 0 0 1 3.7 3.418c.014.166.014.354.014.629V7.52c0 3.87-2.944 7.05-6.714 7.427V17A4.25 4.25 0 0 0 14 21.25h.882a3.369 3.369 0 0 0 3.108-2.068a1.29 1.29 0 0 0 .085-.327A3.001 3.001 0 0 1 19 13a3 3 0 0 1 .575 5.945a2.884 2.884 0 0 1-.201.817a4.869 4.869 0 0 1-4.492 2.988H14A5.75 5.75 0 0 1 8.25 17v-2.05a7.751 7.751 0 0 1-7-7.715v-.937c0-.275 0-.463.015-.628A3.75 3.75 0 0 1 4.67 2.265a6.88 6.88 0 0 1 .58-.015V2a.75.75 0 1 1 1.5 0v2a.75.75 0 0 1-1.5 0v-.25c-.263 0-.366.001-.448.009a2.25 2.25 0 0 0-2.043 2.043c-.008.09-.009.206-.009.535v.898A6.25 6.25 0 0 0 9 13.485a5.964 5.964 0 0 0 5.964-5.964V6.337c0-.329 0-.445-.008-.535a2.25 2.25 0 0 0-2.206-2.05V4a.75.75 0 0 1-1.5 0V2a.75.75 0 0 1 .75-.75Z" />
                            </svg>
                            Atención Médica a Domicilio.
                        </p>

                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19.5 15.5L16 12l3.5-3.5l1.4 1.4l-1.075 1.1H23v2h-3.175l1.075 1.1l-1.4 1.4ZM2 22V2h13v20H2Zm2-11.475q.45-.275.95-.4T6 10h5q.55 0 1.05.125t.95.4V4H4v6.525ZM8.5 9q-.825 0-1.413-.588T6.5 7q0-.825.588-1.413T8.5 5q.825 0 1.413.588T10.5 7q0 .825-.588 1.413T8.5 9Zm-1 10h2v-2h2v-2h-2v-2h-2v2h-2v2h2v2Z" />
                            </svg>
                            Atención Pre-hospitalaria de Urgencias.
                        </p>

                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 64 64">
                                <path fill="currentColor"
                                    d="M9.5 32H62l-4.064-4.064C56.218 16.886 47.607 8.123 36.637 6.167C36.374 3.828 34.412 2 32.002 2s-4.373 1.827-4.635 4.166C16.396 8.121 7.782 16.885 6.064 27.935L2 32h7.5zm41.838-5.625h-3.396c-1.204-7.588-4.731-13.818-9.38-16.875c6.336 3.116 11.122 9.33 12.776 16.875zM30.125 16.063v-5.625h3.75v5.625H39.5v3.75h-5.625v5.625h-3.75v-5.625H24.5v-3.75h5.625zM25.438 9.5c-4.646 3.057-8.176 9.287-9.38 16.875h-3.396C14.317 18.83 19.104 12.616 25.438 9.5zM54.5 34v1.75c0 12.408-10.093 22.5-22.5 22.5c-12.405 0-22.5-10.092-22.5-22.5V34H5.75v1.75C5.75 50.225 17.525 62 32 62s26.25-11.775 26.25-26.25V34H54.5z" />
                            </svg>
                            Atención Pre-hospitalaria de Emergencias.
                        </p>

                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 48 48">
                                <g fill="currentColor">
                                    <path d="M32 12.5a1 1 0 1 0 2 0V11a1 1 0 1 0-2 0v1.5Z" />
                                    <path fill-rule="evenodd"
                                        d="M4 16a2 2 0 0 1 2-2h22a2 2 0 0 1 1.732 1H30v4h1v-1h1v-1a1 1 0 1 1 2 0v1h1v1h.718a3 3 0 0 1 2.035.796l5.282 4.875A3 3 0 0 1 44 26.876V35h-5.126a4.002 4.002 0 0 1-7.748 0H15.874a4.002 4.002 0 0 1-7.748 0H4V16Zm38 12H30v5h1.126a4.002 4.002 0 0 1 7.748 0H42v-5Zm-12-2h11.526l-5.13-4.735a1 1 0 0 0-.678-.265H30v5ZM12 36a2 2 0 1 0 0-4a2 2 0 0 0 0 4Zm25-2a2 2 0 1 1-4 0a2 2 0 0 1 4 0ZM13 22h3v-3h2v3h3v2h-3v3h-2v-3h-3v-2Z"
                                        clip-rule="evenodd" />
                                    <path
                                        d="M36.5 17a1 1 0 0 1 1-1H39a1 1 0 1 1 0 2h-1.5a1 1 0 0 1-1-1Zm-.672-4.241a1 1 0 1 0 1.343 1.482l.915-.828a1 1 0 0 0-1.343-1.482l-.915.828Z" />
                                </g>
                            </svg>
                            Traslados Asistidos a Centros Hospitalarios.
                        </p>

                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M20 4a2 2 0 0 1 2 2v10c0 1.11-.89 2-2 2h4v2H0v-2h4a2 2 0 0 1-2-2V6c0-1.11.89-2 2-2h16m0 2H4v10h16V6m-8 6c2.21 0 4 .9 4 2v1H8v-1c0-1.1 1.79-2 4-2m0-5a2 2 0 1 1 0 4c-1.11 0-2-.89-2-2s.9-2 2-2Z" />
                            </svg>
                            Orientación Médica Virtual y Telefónica.
                        </p>
                    </div>
                </div>
                        <div class="col-md-6">
                            <div class="image_svg">
                                <img src="img/Espacio Preservado.png" alt="Imagen de Plan Preservado">
                    </div>
                </div>
            </div>
        </div>

        <!-- registro -->
        <div class="div--container" id="registrate">
            <h1 class="text-colored">¡Afiliate Aqui!</h1>
        </div>
        <div class="text-slogan">
            <p> Nuestros servicios estan a tu disposicón las 24 horas del dia</p>
        </div>
        <form action="./procesos/insertar.php" method="post" class="formulario" id="formulario">
            <!-- Grupo: Nombre -->
            <div class="formulario__grupo" id="grupo__nombre">
                <label for="nombre" class="formulario__label">Nombres</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombres">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Por favor digite sus Nombres</p>
            </div>

            <!-- Grupo: Apellido -->
            <div class="formulario__grupo" id="grupo__apellido">
                <label for="apellido" class="formulario__label">Apellidos</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="Apellidos">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Por favor digite sus Apellidos</p>
            </div>

            <!-- Tipo de documento -->
            <div class="formulario__grupo" id="grupo__tipoDocumento">
                <label for="tipoDocumento" class="formulario__label">Tipo de documento</label>
                <div class="formulario__grupo-input">
                    <select type="text" class="formulario__input" name="tipoDocumento" id="tipoDocumento">
                        <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                        <option value="Pasaporte">Pasaporte</option>
                    </select>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
            </div>

            <!-- Grupo: Documento -->
            <div class="formulario__grupo" id="grupo__documento">
                <label for="documento" class="formulario__label">Documento</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="documento" id="documento" placeholder="Número de documento">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El documento solo puede contener números y el máximo son 10 dígitos.
                </p>
            </div>

            <!-- Grupo: Correo Electrónico -->
            <div class="formulario__grupo" id="grupo__correo">
                <label for="correo" class="formulario__label">Correo Electrónico</label>
                <div class="formulario__grupo-input">
                    <input type="email" class="formulario__input" name="correo" id="correo" placeholder="Correo Completo">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El correo solo puede contener letras, números, puntos, guiones y
                    guion bajo.</p>
            </div>

            <!-- Grupo: Teléfono -->
            <div class="formulario__grupo" id="grupo__telefono">
                <label for="telefono" class="formulario__label">Teléfono</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="312245456">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El telefono solo puede contener números y el máximo son 14 dígitos.
                </p>
            </div>

            <!-- Grupo: Dirección -->
            <div class="formulario__grupo" id="grupo__direccion">
                <label for="direccion" class="formulario__label">Dirección</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="direccion" id="direccion" placeholder="Dirección donde resides">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
            </div>

            <!-- Grupo: Ciudad -->
            <div class="formulario__grupo" id="grupo__ciudad">
                <label for="ciudad" class="formulario__label">Ciudad</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="ciudad" id="ciudad" placeholder="Ciudad donde vives">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
            </div>

            <!-- Grupo: EPS -->
            <div class="formulario__grupo" id="grupo__eps">
                <label for="eps" class="formulario__label">EPS</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="eps" id="eps" placeholder="EPS a la que pertenece">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Digite la EPS a la que está afiliada actualmente</p>
            </div>

            <!-- Servicios de preferencia -->
            <div class="formulario__grupo" id="grupo__servicio">
                <label for="servicio" class="formulario__label">Elige el servicio de tu preferencia</label>
                <div class="formulario__grupo-input">
                    <select type="text" class="formulario__input" name="servicio" id="servicio">
                        <option value="null">Seleccione una opción</option>
                        <option value="Plan Integral">Plan Integral</option>
                        <option value="Plan Prioritario">Plan Prioritario</option>
                        <option value="Espacio Preservado">Espacio Preservado</option>
                    </select>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
            </div>

            <!-- Grupo: Terminos y Condiciones -->
            <div class="formulario__grupo" id="grupo__terminos">
                <label class="formulario__label">
                    <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
                    Acepto los Terminos y Condiciones
                </label>
            </div>

            <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario
                    correctamente. </p>
            </div>

            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">Enviar</button>
                <!-- <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p> -->
            </div>
        </form>

    </main>
    <footer class="pie-pagina">
        <div class="footer_copy">
            <small>&copy; 2023 <b>Vital Health</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    <script src="js/script.js"></script>
    <script src="js/formulario.js"></script>


     <script>
        /* funcion para el ingreso */
        function abrirIngreso(){
            document.getElementById("ventIngre").style.display="flex"
            nav.style.right = "-250px";
            background_menu.style.display = "none";
            document.getElementById("ventRegis").style.display="none"
            document.getElementById("background_main").classList.add("borroso");
        }
        function cerrarIngreso(){
            document.getElementById("ventIngre").style.display="none"
            document.getElementById("background_main").classList.remove("borroso");
        }
        /* funcion para el registro */
        function abrirRegistro(){
            document.getElementById("ventRegis").style.display="flex"
            document.getElementById("ventIngre").style.display="none"
            document.getElementById("background_main").classList.add("borroso");
        }
        function cerrarRegistro(){
            document.getElementById("ventRegis").style.display="none"
            document.getElementById("background_main").classList.remove("borroso");
        }
// Evento de clic del botón "Guardar"
document.getElementById("registrar").addEventListener("click", registroAdmin);

     </script>
</body>
</html>