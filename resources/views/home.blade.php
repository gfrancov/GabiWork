<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Initial meta tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="¡Hola! Mi nombre es Gabriel Franco, pero todo el mundo me llama Gabi. Especializado en la administración de sistemas: redes, ciberseguridad y datos.">
        <meta name="keywords" content="Gabriel, Gabi, Franco, Catalunya, Badalona, Generalitat, Linux, CaixaBank, LaCaixa, Universitat, Oberta">
        <meta name="author" content="Gabriel Franco">

        <!-- Open Graph data -->
        <meta property="og:title" content="Gabriel Franco" />
        <meta property="og:url" content=" https://gabi.work/" />
        <meta property="og:image" content=" https://gabi.work/assets/img/gabi.webp" />
        <meta property="og:description" content="¡Hola! Mi nombre es Gabriel Franco, pero todo el mundo me llama Gabi. Especializado en la administración de sistemas: redes, ciberseguridad y datos." />

        <!-- Twitter data -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@nytimesbits" />
        <meta name="twitter:creator" content="@nickbilton" />
        <meta property="og:url" content="https://gabi.work/" />
        <meta property="og:title" content="Gabriel Franco" />
        <meta property="og:description" content="¡Hola! Mi nombre es Gabriel Franco, pero todo el mundo me llama Gabi. Especializado en la administración de sistemas: redes, ciberseguridad y datos." />
        <meta property="og:image" content="http://graphics8.nytimes.com/images/2011/12/08/technology/bits-newtwitter/bits-newtwitter-tmagArticle.jpg" />

        <!-- Website head -->
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        <title>{{ $title }} | Gabi Franco</title>

        <!-- Styles -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css' type='text/css' media='all' />
        <link rel='stylesheet' href='assets/css/styles.css' type='text/css' media='all' />
        <link rel="icon" type="image/x-icon" href="{{asset('assets/img/gabi.webp')}}">

        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/378145776d.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <section id="inicio" class="full-size">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="profile-pic col-lg-6 order-lg-1">
                        <div class="pb-0 p-5"><img class="img-fluid rounded-circle" src="{{asset('assets/img/gabi.webp')}}" alt="Gabriel Franco"></div>
                    </div>
                    <div class="col-lg-6 order-lg-2">
                        <div class="profile-content p-5 pb-0 titol-text">
                            <h2 class="display-4">Gabi Franco</h2>
                            <p>¡Hola! Mi nombre es Gabriel Franco, pero todo el mundo me llama Gabi. Especializado en la administración de sistemas: redes, ciberseguridad y datos.</p>
                            <p class="font-weight-bold mb-0">Enfocado en esto 👇</p>
                            <section class="logo-list mb-4" id="logos-front">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-4">
                                            <a class="scrollto" href="#generalitat"><img src="{{asset('assets/img/gencat.png')}}" class="img-fluid" alt="Generalitat de Catalunya" /></a>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-4">
                                            <a href="#linux"><img src="{{asset('assets/img/linuxinstitute.png')}}" class="img-fluid" alt="Linux Professional Institute" /></a>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-4">
                                            <a href="#cableando"><img src="{{asset('assets/img/cableando.png')}}" class="img-fluid" alt="Cableando" /></a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 mt-3 d-lg-flex justify-content-center">
                                <li class="list-inline-item">
                                    <a href="https://www.linkedin.com/in/gfrancov/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                                <li class="list-inline-item">
                                    <a href="https://github.com/gfrancov" target="_blank"><i class="fa-brands fa-github"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://twitter.com/gabiCaotico" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="list-inline-item">
                                    <a href="mailto:jo@gabrielfranco.me"><i class="fa-solid fa-envelope"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="tel:611475442" target="_blank"><i class="fa-solid fa-mobile-screen-button"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="generalitat" class="full-size">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="section-image col-lg-6 order-lg-2 text-left">
                        <div class="pb-0 p-5 text-left"><img class="img-fluid" src="{{asset('assets/img/generalitat.jpg')}}" alt="Generalitat de Catalunya"></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5 pb-0 titol-text">
                            <h2>Generalitat de Catalunya</h2>
                            <p>Técnico especializado en Telecomunicaciones en el Gabinet Tècnic del Departament d'Interior de la Generalitat de Catalunya.</p>
                            <ul class="small">
                                <li>Desarrollo de proyectos tecnológicos de Subdirecció General.</li>
                                <li>Mejora de procesos de explotación de estadísticas.</li>
                                <li>Elaboración de análisis técnicos para hacer más eficientes los procedimientos de recogida de información.</li>
                            </ul>
                            <a class="btn btn-dark m-1" target="_blank" href="https://interior.gencat.cat/ca/inici/index.html">Departament <i class="fa-solid fa-arrow-right"></i></a>
                            <a class="btn btn-dark m-1" target="_blank" href="https://github.com/gfrancov/TramitacioDigital">Proyectos <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <h3 class="scroll-button text-center mt-5"><a href="#linux" style="color: #000"><i class="fa-solid fa-arrow-down-long"></i></a></h3>
            </div>
        </section>
        <section id="linux" class="full-size">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="section-image col-lg-6 order-lg-1 text-right">
                        <div class="pb-0 p-5 text-right"><img class="img-fluid" src="{{asset('assets/img/lpi-logo.png')}}" alt="Generalitat de Catalunya"></div>
                    </div>
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5 pb-0 titol-text">
                            <h2>Linux Professional Institute</h2>
                            <p class="mb-0">Curso para la obtención de la certificación LPIC 1 del Linux Professional Institute.</p>
                            <p class="text-muted small m-0 p-0">Agosto - Octubre 2022</p>
                            <ul class="small mt-3">
                                <li>Arquitectura del sistema Linux.</li>
                                <li>Instalación y mantenimiento de estaciones de trabajo Linux.</li>
                                <li>Especializacion en línea de comandos Linux, GNU y Unix.</li>
                                <li>Manejo de ficheros, permisos de acceso y seguridad del sistema.</li>
                                <li>Tareas de mantenimiento: soporte, gestión de usuarios, copias de seguridad...</li>
                            </ul>
                            <a class="btn btn-dark m-1" target="_blank" href="https://www.lpi.org/es/our-certifications/lpic-1-overview">LPIC-1 <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <h3 class="scroll-button text-center mt-5"><a href="#cableando" style="color: #000"><i class="fa-solid fa-arrow-down-long"></i></a></h3>
            </div>
        </section>
        <section id="cableando" class="full-size">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="section-image col-lg-6 order-lg-2 text-left">
                        <div class="pb-0 p-5 text-left"><img class="img-fluid" src="{{asset('assets/img/cableandoC.png')}}" alt="Generalitat de Catalunya"></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5 pb-0 titol-text">
                            <h2>Comunidad Cableando</h2>
                            <p>Construcción de una comunidad con objetivo de agrupar a jóvenes desarrolladores, administradores...</p>
                            <ul class="small">
                                <li>Artículos sobre tecnología.</li>
                                <li>Información sobre cursos y formación gratuita.</li>
                                <li>Herramientas tecnológicas para desarrollo de proyectos.</li>
                                <li>Comunidad, intercambio de ideas y discusión.</li>
                            </ul>
                            <a class="btn btn-dark m-1" target="_blank" href="https://cableando.net/">Cableando <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <h3 class="scroll-button text-center mt-5"><a href="#algo-mas" style="color: #000"><i class="fa-solid fa-arrow-down-long"></i></a></h3>
            </div>
        </section>
        <section id="algo-mas" class="full-size">
            <div class="container text-center" style="display:flex; justify-content: center; align-items: center; flex-direction: column;">
                <h2 class="font-weight-bold">Empresas</h2>
                <section class="logo-list mb-5" id="empresas">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-lg-4 col-md-4 col-12">
                                <a target="_blank" href="https://web.gencat.cat/ca/inici/"><img src="{{asset('assets/img/gencat.png')}}" class="img-fluid" alt="Generalitat de Catalunya" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <a target="_blank" href="https://caixabankfacilities.com/"><img src="{{asset('assets/img/caixabank.png')}}" class="img-fluid" alt="CaixaBank Facilities Management" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <a target="_blank" href="https://www.vodafone.es/"><img src="{{asset('assets/img/vodafone.png')}}" class="img-fluid" alt="Vodafone" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <a target="_blank" href="https://bitgenoma.com/ca_ES/"><img src="{{asset('assets/img/bitgenoma.png')}}" class="img-fluid" alt="BitGenoma" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <a target="_blank" href="https://www.aralos.com/"><img src="{{asset('assets/img/aralos.png')}}" class="img-fluid" alt="BitGenoma" /></a>
                            </div>
                        </div>
                    </div>
                </section>
                <h3 class="font-weight-bold mb-0">Formación</h3>
                <section class="logo-list" id="formacion">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <a target="_blank" href="https://www.uoc.edu/portal/ca/index.html"><img src="{{asset('assets/img/uoc.png')}}" class="img-fluid" alt="Universitat Oberta de Catalunya" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <a target="_blank" href="https://www.lpi.org/"><img src="{{asset('assets/img/linuxinstitute.png')}}" class="img-fluid" alt="Linux Professional Institute" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <a target="_blank" href="https://www.inslapineda.com/?lang=es"><img src="{{asset('assets/img/inslapineda.png')}}" class="img-fluid" alt="Institut La Pineda" /></a>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </section>
        <script type='text/javascript' src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js'></script>
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js'></script>
    </body>
</html>
