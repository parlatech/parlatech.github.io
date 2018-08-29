<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>ParlaTech - Expressando cidadania através de estudos sobre tecnologia | @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="mosh-preloader"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area clearfix">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <!-- Menu Area Start -->
                <div class="col-12 h-100">
                    <div class="menu_area h-100">
                        <nav class="navbar h-100 navbar-expand-lg align-items-center">
                            <!-- Logo -->
                            <a class="navbar-brand" href="/"><img src="img/core-img/logo.png" alt="logo"></a>
                            <!-- Menu Area -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mosh-navbar" aria-controls="mosh-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse justify-content-end" id="mosh-navbar">
                                <ul class="navbar-nav animated" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="/">Principal</a></li>
                                    <li class="nav-item"><a class="nav-link" href="grupo">Sobre o Grupo</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pesquisas">Pesquisas</a></li>
                                    <li class="nav-item"><a class="nav-link" href="portifolio">Portifólio</a></li>
                                    <li class="nav-item"><a class="nav-link" href="contato">Contato</a></li>
                                </ul>                                                               
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <section class="content">
         @yield('conteudo')
    </section>

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>