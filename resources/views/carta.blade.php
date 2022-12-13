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
        <link rel='stylesheet' href='assets/css/style.css' type='text/css' media='all' />
        <link rel="icon" type="image/x-icon" href="{{asset('assets/img/gabi.webp')}}">

        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/378145776d.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <section class="full-size">
            <div class="container m-5 p-5" id="carta">
                <div class="row gx-5">
                    <div class="col-lg-9 carta-text">
                        <h1 class="mb-4">Amb un teclat<br/>i molt cafè.</h1>
                        <p><img src="{{asset('assets/img/icona/waving-hand.png')}}" alt="Mà saludant">&nbsp;&nbsp;Hola! Soc en Gabriel Franco, però tothom em diu Gabi.</p>
                        <p>Actualment estic treballant com a Tècnic de Telecomunicacions al <a target="_blank" href="https://interior.gencat.cat/ca/inici">Departament d'Interior</a> de la Generalitat de Catalunya, i m'estic formant al Grau d'Enginyeria Informàtica de la <a target="_blank" href="https://www.uoc.edu/portal/ca/index.html">Universitat Oberta de Catalunya</a>.</p>
                        <p>Col·laboro voluntàriament com a secretari de l'Associació Sociocultural <a target="_blank" href="https://apatxes.cat">Districte Apatxe</a>, una associació que impulsa projectes culturals, escènics, artístics i relacionats amb el lleure.</p>
                        <p>Tècnic de so i il·luminació amb la companyia de teatre <a target="_blank" href="https://www.facebook.com/companyia.katalakaska/">Katalakaska</a>, donant suport a les seves representacions escèniques a teatres de Badalona.</p>
                        <p>Voluntari al <a target="_blank" href="https://twitter.com/projectecoco">Projecte Coco</a> fent tasques informàtiques als estudis i així habilitar-lo per a que la gent pugui grabar els seus podcasts.</p>
                        <p>Al marge del món informàtic, sóc director musical del grup de percussió <a target="_blank" href="https://instagram.com/kapombatucada">Kapomba</a>, on m'encarrego de composar els temes musicals de la batucada.</p>
                        <p></p>
                    </div>
                    <div class="col-lg-3 carta-imatge text-center">
                        <img src="{{asset('assets/img/perfil.png')}}" alt="Gabriel Franco">
                        <p>Gabriel Franco</p>
                    </div>
                </div>
            </div>
        </section>
        <script type='text/javascript' src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js'></script>
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js'></script>
    </body>
</html>
