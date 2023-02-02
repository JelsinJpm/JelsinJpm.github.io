<?php
session_start();
$conexion = mysqli_connect("localhost", "root", "", "chocquibgamers");

$user = $_SESSION['id'];

$sql = "SELECT * FROM persona WHERE id = '$user' ";

$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();

?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Pro-Gaming-Chocó</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/landing-page.css" rel="stylesheet"/>

        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
        <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
    </head>
    <body class="landing-page landing-page2">
        <nav class="navbar navbar-transparent navbar-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                    </button>
                    <a href="#">
                        <div class="logo-container">
                            <div class="logo">
                                <img src="img/new_logo.png" alt="Creative Tim Logo">
                            </div>
                            <div class="brand">
                                <?php 
                                echo utf8_decode($row['nombre']);
                                ?>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="example" >
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                            <i class="fa fa-facebook-square"></i>
                            Facebook
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="fa fa-twitter"></i>
                            Twitter
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="fa fa-google"></i>
                            Google
                            </a>
                        </li>
                        <li>
                            <a href="php/cerrar_sesion.php">
                            Cerrar Sesión
                            </a>
                            
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        <div class="wrapper">
            <div class="parallax filter-gradient blue" data-color="blue">
                <div class= "container">
                    <div class="row">
                        <div class="col-md-7  hidden-xs">
                            <div class="parallax-image">
                                <img src="img/showcases/showcase-2/mac1.png"/>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="description text-center">
                                <h2>Pro-Gaming-Chocó</h2>
                                <br>
                                <h5>Pro-Gaming-Chocó es un proyecto dirigido principalmente a la comunidad chocoana y este busca enseñar a la comunidad en general el mundo de la programacion de videojuegos web.</h5>
                                <div class="buttons">
                                    <a href="Inscripcion.php" class="btn btn-fill btn-neutral">
                                    <i class="fa fa-users"></i> Inscribirse
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section section-presentation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 hidden-xs">
                            <div class="description">
                                <h4 class="header-text">Lenguajes de programación</h4>
                                <p>En este proyecto hablaremos sobre los lenguajes de programación estos son un lenguaje formal que le proporciona a una persona, en este caso a los programadores, la capacidad de escribir una serie de instrucciones o secuencias de órdenes en forma de algoritmos con el fin de controlar el comportamiento físico o lógico de un sistema informático, de manera que se puedan obtener diversas clases de datos o ejecutar determinadas tareas. A todo este conjunto de órdenes escritas mediante un lenguaje de programación se le denomina programa informático.</p>
                                <p>Lenguajes mas populares:
                                <p>
                                <ol>
                                    <li><a href="https://es.wikipedia.org/wiki/Python" target="_blank">Python</a></li>
                                    <li><a href="https://es.wikipedia.org/wiki/Java_(lenguaje_de_programaci%C3%B3n)" target="_blank">Java</a></li>
                                    <li><a href="https://es.wikipedia.org/wiki/C_Sharp" target="_blank">C#</a></li>
                                    <li><a href="https://es.wikipedia.org/wiki/C%2B%2B" target="_blank">C++</a></li>
                                    <li><a href="https://es.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a></li>
                                    <li><a href="https://es.wikipedia.org/wiki/PHP" target="_blank">PHP</a></li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <img src="img/showcases/showcase-2/mac2.png" style="margin-top:-50px"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-demo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="demo-image">
                                <img src="img/showcases/showcase-2/examples/home_4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <h4 class="header-text">Programación de videojuegos</h4>
                            <p>
                                La programación de videojuegos es un proceso que pertenece a la creación de un videojuego. Este proceso es efectuado por un programador de videojuegos, gracias a la programación informática. Casi siempre, la programación de un videojuego se resume en repetir a trechos las siguientes acciones:
                            </p>
                            <p>
                                <ul>
                                    <li>Procesar las interacciones de un agente con su entorno según las entradas del usuario.</li>
                                    <li>Procesar los fenómenos indirectamente controlados por el usuario.</li>
                                    <li>Crear una imagen a partir de esas informaciones y mostrarlo en la pantalla (igual para el sonido).</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <h4 class="header-text">HTML, CSS Y JS</h4>
                            <p>
                                <ul>
                                    <li><b>HTML:</b> es el lenguaje de marcado que usamos para estructurar y dar significado a nuestro contenido web, por ejemplo, definiendo párrafos, encabezados y tablas de datos, o insertando imágenes y videos en la página.</li>
                                    <br>
                                    <li><b>CSS:</b> es un lenguaje de reglas de estilo que usamos para aplicar estilo a nuestro contenido HTML, por ejemplo, establecer colores de fondo y tipos de letra, y distribuir nuestro contenido en múltiples columnas.</li>
                                    <br>
                                    <li><b>JS:</b> es un lenguaje de secuencias de comandos que te permite crear contenido de actualización dinámica, controlar multimedia, animar imágenes y prácticamente todo lo demás. (Está bien, no todo, pero es sorprendente lo que puedes lograr con unas pocas líneas de código JavaScript).</li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <div class="demo-image">
                                <img src="img/showcases/showcase-2/examples/js-gif.gif" alt="">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <p>
                                Cuando cargas una página web en tu navegador, estás ejecutando tu código (HTML, CSS y JavaScript) dentro de un entorno de ejecución (la pestaña del navegador). Esto es como una fábrica que toma materias primas (el código) y genera un producto (la página web).
                            </p>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <div class="demo-image">
                                <img src="img/showcases/showcase-2/examples/js-gif-1.gif" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-no-padding">
                <div class="parallax filter-gradient blue" data-color="blue">
                    <div class="parallax-background">
                        <img class ="parallax-background-image" src="img/showcases/showcase-2/bg2.jpg">
                    </div>
                    <div class="info">
                        <h1>No te pierdas esta gran aventura!</h1>
                        <p>Ven y crea tu propio videojuego <i class="fa fa-gamepad"></i>.</p>
                        <a href="Inscripcion.php" class="btn btn-neutral btn-lg btn-fill"><i class="fa fa-users"></i> Inscribirse</a>
                    </div>
                </div>
            </div>
            <div class="section section-gray section-clients">
                <div class="container text-center">
                    <h4 class="header-text">Apoya</h4>
                    
                    <div class="logos">
                        <ul class="list-unstyled">
                            <li ><img src="img/logos/adobe.png"/></li>
                            <li ><img src="img/logos/zendesk.png"/></li>
                            <li ><img src="img/logos/ebay.png"/></i>
                            <li ><img src="img/logos/evernote.png"/></li>
                            <li ><img src="img/logos/airbnb.png"/></li>
                            <li ><img src="img/logos/zappos.png"/></li>
                        </ul>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                Inicio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="social-area pull-right">
                        <a class="btn btn-social btn-facebook btn-simple">
                        <i class="fa fa-facebook-square"></i>
                        </a>
                        <a class="btn btn-social btn-twitter btn-simple">
                        <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social btn-pinterest btn-simple">
                        <i class="fa fa-google"></i>
                        </a>
                    </div>
                    <div class="copyright">
                        &copy; 2023 <a href="#">Pro-Gaming-Chocó</a>
                    </div>
                </div>
            </footer>
        </div>
        <div class="fixed-plugin">
            <div class="dropdown open">
                <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
                </a>
                <ul class="dropdown-menu">
                    <li class="header-title">Ajuste</li>
                    <li class="adjustments-line">
                        <a href="javascript:void(0)" class="switch-trigger">
                            <p class="pull-right">Filtro</p>
                            <div class="pull-left">
                                <span class="badge selector badge-blue active" data-color="blue" data-button="info"></span>
                                <span class="badge selector badge-green" data-color="green" data-button="success"></span>
                                <span class="badge selector badge-orange" data-color="orange" data-button="warning"></span>
                                <span class="badge selector badge-red" data-color="red" data-button="danger"></span>
                                <span class="badge selector badge-black" data-color="gray" data-button="default"></span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </body>
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/awesome-landing-page.js" type="text/javascript"></script>
</html>
