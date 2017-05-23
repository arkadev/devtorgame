<!DOCTYPE HTML>
<!--
        Desarrollado por ARKADEV.
-->
<html>
    <head>
        <title>DevTorGame</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="<?= base_url() . 'assets/css/main.css' ?>" />
        <script src="<?= base_url() . 'assets/js/jquery.min.js' ?>"></script>
        <script src="<?= base_url() . 'assets/js/jquery.scrollex.min.js' ?>"></script>
        <script src="<?= base_url() . 'assets/js/jquery.scrolly.min.js' ?>"></script>
        <script src="<?= base_url() . 'assets/js/skel.min.js' ?>"></script>
        <script src="<?= base_url() . 'assets/js/util.js' ?>"></script>
        <script src="<?= base_url() . 'assets/js/main.js' ?>"></script>
    </head>
    <body class="landing">
        <div id="page-wrapper">
            <header id="header" class="alt">
                <h1><a href="index.html">DevTorGame</a></h1>
                <nav id="nav">
                    <ul>
                        <li class="special">
                            <a href="#menu" class="menuToggle"><span>Menu</span></a>
                            <div id="menu">
                                <ul>
                                    <li><a href="#banner">INICIO</a></li>
                                    <li><a href="#one">INFORMACIÓN</a></li>
                                    <li><a href="#Servicio">SERVICIOS</a></li>
                                    <li><a href="#Cliente">CLIENTES</a></li>
                                    <li><a href="#Equipo">EQUIPO</a></li>
                                    <li><a href="#three">CONTACTO</a></li>
                                    <?php if ($this->session->userdata('login')) { ?>
                                        <li><a href="<?= base_url() . 'manager' ?>">Mis TORNEOS</a></li>
                                        <li><a href="<?= base_url() . 'signIn/logout' ?>">CERRAR SESIÓN</a></li>
                                    <?php } else { ?>
                                        <li><a href="<?= base_url() . 'signUp' ?>">REGISTRARSE</a></li>
                                        <li><a href="<?= base_url() . 'signIn' ?>">INICIAR SESIÓN</a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <ul class="ul-index">
                                <li class="li-index"><a href="#banner" class="a1 ">INICIO</a></li>
                                <li class="li-index"><a href="#one" class="a1 ">INFORMACIÓN</a></li>
                                <li class="li-index"><a href="#Servicio" class="a1">SERVICIOS</a></li>
                                <li class="li-index"><a href="#Cliente" class="a1">CLIENTES</a></li>
                                <li class="li-index"><a href="#Equipo" class="a1">EQUIPO</a></li>
                                <li class="li-index"><a href="#three" class="a1">CONTACTOS</a></li>
                                <?php if ($this->session->userdata('login')) { ?>
                                    <li class="li-index"><a href="<?= base_url() . 'manager' ?>" class="a1">Mis TORNEOS</a></li>
                                    <li class="li-index"><a href="<?= base_url() . 'signIn/logout' ?>" class="a1">CERRAR SESIÓN</a></li>
                                <?php } else { ?>
                                    <li class="li-index"><a href="<?= base_url() . 'signIn' ?>" class="a1">INICIAR SESIÓN</a></li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </header>
            <section id="banner">
                <div class="inner">
                    <h2>Crea tus torneos Online</h2>
                    <p><img src="<?= base_url() . 'assets/img/logoD.png' ?>" class="img-log">DevTorGame</p>
                    <ul class="actions">
                        <?php if ($this->session->userdata('login')) { ?>
                            <li><a href="<?= base_url() . 'manager' ?>" class="button special">Comenzar</a></li>
                        <?php } else { ?>
                            <li><a href="<?= base_url() . 'signUp' ?>" class="button special">Registrate</a></li>
                        <?php } ?>
                    </ul>
                </div>
                <a href="#one" class="more scrolly">Seguir leyendo</a>
            </section>
            <section id="one" class="wrapper style1 special">
                <div class="inner">
                    <header class="major">
                        <h2>INFORMACIÓN</h2>
                        <p>OMAR FALTA</p>
                    </header>
                    <ul class="icons major">
                        <li><span class="icon fa-diamond major style1"><span class="label">Lorem</span></span></li>
                        <li><span class="icon fa-heart-o major style2"><span class="label">Ipsum</span></span></li>
                        <li><span class="icon fa-code major style3"><span class="label">Dolor</span></span></li>
                    </ul>
                </div>
            </section>
            <section id="two" class="wrapper alt style2">
                <section id="Servicio" class="spotlight">
                    <div class="image"><img src="images/pic01.jpg" alt="" /></div><div class="content">
                        <h2>SERVICIOS</h2>
                        <p>Si eres de las personas aficionadas o amantes de los video-juegos y estas enfocado a la creación de eventos, enfrentamientos o bien conocidos torneos, DevTorGame te permite llevar un control más riguroso y sencillo en la administración de todos los torneos que quieras realizar.
                            <br><br>Te permite generar las fases y los enfrentamientos entre equipos de una manera aleatoria sin que tu tengas que mover ni un dedo.</p>
                    </div>
                </section>
                <section id="Cliente" class="spotlight">
                    <div class="image"><img src="images/pic02.jpg" alt="" /></div><div class="content">
                        <h2>CLIENTES</h2>
                        <p>Nuestros clientes son personas como tú que quieres publicar un evento de torneos que quieras realizar y el mundo de DevTorGame te permite hacer publicaciones.
                            <br><br>No solo te permitiremos hacer publicidad de tus torneros, si también eres un desarrollador y quieres lanzar un video-juego nuestro equipo te ayudara y te permitirá hacer publicidad en nuestro sitio web.</p>
                    </div>
                </section>
                <section id="Equipo" class="spotlight">
                    <div class="image"><img src="images/pic03.jpg" alt="" /></div><div class="content">
                        <h2>EQUIPO</h2>
                        <p>Nuestro equipo está conformado por tres estudiantes de ingeniería de sistemas y computación de la universidad pedagógica y tecnológica de Colombia (UPTC) que siempre van a estar a tus servicios para apoyarte en tu proceso de creación de torneos.</p>
                    </div>
                </section>
            </section>
            <section id="three" class="wrapper style3 special">
                <div class="inner">
                    <header class="major">
                        <h2>CONTACTO</h2>
                        <p>Si tienes alguna inquitud o proble comunicate con nosotros para ayudarte en todas tus dudas.</p>
                        <form method="post" action="#">
                            <div class="row uniform">
                                <div class="6u 12u$(xsmall)">
                                    <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
                                </div>
                                <div class="6u$ 12u$(xsmall)">
                                    <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
                                </div>
                                <div class="12u$">
                                    <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                                </div>
                                <div class="12u$">
                                    <ul class="actions">
                                        <li><input type="submit" value="ENVIAR" class="special" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </header>
                </div>
            </section>
            <section id="cta" class="wrapper style4">
                <div class="inner">
                    <header>
                        <h2>UNETE A DEVTORGAME</h2>
                        <p>Si quieres hacer parte del mundo de los torneos puedes registrarte y vivir tu propia experiencia como administrador de torneos.</p>
                    </header>
                    <ul class="actions vertical">
                        <?php if ($this->session->userdata('login')) { ?>
                            <li><a href="<?= base_url() . 'manager' ?>" class="button fit special">Mis TORNEOS</a></li>
                            <li><a href="<?= base_url() . 'signIn/logout' ?>" class="button fit">CERRAR SESIÓN</a></li>
                        <?php } else { ?>
                            <li><a href="<?= base_url() . 'signUp' ?>" class="button fit special">REGISTRARSE</a></li>
                            <li><a href="<?= base_url() . 'signIn' ?>" class="button fit">INICIAR SESIÓN</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </section>
            <footer id="footer">
                <ul class="icons">
                    <li><a href="https://twitter.com/ArkaDevGroup" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="https://www.facebook.com/arkadev.sas.1" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="https://www.instagram.com/arkadevgroup/" class="icon fa-instagram"><span class="label">INSTAGRAM</span></a></li>
                    <li><a href="https://plus.google.com/105230561852968287030" class="icon fa-google-plus"><span class="label">GMAIL+</span></a></li>
                    <li><a href="https://github.com/arkadev/devtorgame" class="icon fa-github"><span class="label">HITGUB</span></a></li>
                    <li><a href="https://arkadev.wixsite.com/devtorgame" class="icon fa-globe"><span class="label">ARKADEV</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy;Copyright arkadev.me 2017 </li><li>Design: <a href="http://arkadev.me/devtorgame">ARKADEV</a></li>
                </ul>
            </footer>
        </div>
    </body>
</html>