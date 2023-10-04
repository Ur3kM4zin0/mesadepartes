<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Registrase | Mesa de Partes</title>
        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <link rel="shortcut icon" href="../public/assets/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="../public/assets/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../public/assets/img/favicons/apple-touch-icon-180x180.png">
        <link rel="stylesheet" id="css-main" href="../public/assets/css/codebase.min.css">
    </head>
    <body>
 
        <div id="page-container" class="main-content-boxed">
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('../Docs/UTEA.jpg');">
                <div class="row mx-0 bg-black-op">
                    <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                        <div class="p-30 invisible" data-toggle="appear">
                                <p class="font-size-h1 font-w600 text-white mb-5">
                                   UNIVERSIDAD TECNOLÓGICA DE LOS ANDES
                                </p>
                               
                                
                                <p class="font-italic text-white-op">
                                   
                                </p>
                            </div>
                        </div>
                        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white">
                            <div class="content content-full">
                                <!-- Header -->
                                <div class="px-30 py-10">
                                    <a class="link-effect font-w700" href="index.php">
                                    <i class="fa-sharp fa-solid fa-briefcase"></i>
                                        <span class="font-size-xl text-primary-dark">Tramite </span><span class="font-size-xl">Documentario</span>
                                    </a>
                                    <h1 class="h3 font-w700 mt-30 mb-10">Crear Cuenta</h1>
                                    <h2 class="h5 font-w400 text-muted mb-0">Por favor agrege los detalles</h2>
                                </div>
                                <div class="px-30">
                                    <form method="post" id="usuario_form">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="form-material floating">
                                                    <input type="text" class="form-control" id="usu_nom" name="usu_nom" required>
                                                    <label for="usu_nom">Nombres</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="form-material floating">
                                                    <input type="text" class="form-control" id="usu_ape" name="usu_ape" required>
                                                    <label for="usu_ape">Apellidos</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="form-material floating">
                                                    <input type="email" class="form-control" id="usu_correo" name="usu_correo" required>
                                                    <label for="usu_correo">Email</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="form-material floating">
                                                    <input type="password" class="form-control" id="usu_pass1" name="usu_pass1" required>
                                                    <label for="usu_pass1">Contraseña</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="form-material floating">
                                                    <input type="password" class="form-control" id="usu_pass2" name="usu_pass2" required>
                                                    <label for="usu_pass2">Confirmar Contraseña</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="col-12">
                                        <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms"required>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Acepto los Términos y Condiciones</span>
                                            </label>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <button type="submit" name="action" value="add" id="btnguardar" class="btn btn-sm btn-hero btn-alt-success">
                                                <i class="fa fa-plus mr-10"></i> Crear Cuenta
                                            </button>
                                            <div class="mt-30">
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="#" data-toggle="modal" data-target="#modal-terms">
                                                <i class="fa fa-book text-muted mr-5"></i>Leer términos Condiciones
                                            </a>
                                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="../">
                                                    <i class="fa fa-user text-muted mr-5"></i> Acceso
                                                </a>
                                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="../RecuperarContrasena/">
                                                    
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        
        <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Terms &amp; Conditions</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>En cumplimiento con la Ley Federal de Protección de Datos Personales en Posesión de los Particulares y con el fin de Asegurar la protección y privacidad de los datos personales, así como regular el acceso, rectificación, cancelación y oposición del manejo de los mismos se establece lo siguiente.</p>
                            <p>Centro Educativo Empresarial, S.C.; Y/O CEEM (la "Institución") con domicilio en Coacalco, Méx. , es responsable de recabar sus datos personales, del uso que se le dé a los mismos y de su protección. Los datos personales recabados por esta Institución, tienen como finalidad que los datos personales y/o sensibles, que en su caso sean recabados, por virtud de los formatos que puedan ser utilizados para la debida operación de la Institución, incluyendo su transmisión a otras Instituciones Educativas, Agencias Calificadoras y terceros dentro y fuera del país, así como con las autoridades competentes, que tengan necesidad de conocerlos, para el debido cumplimiento de los fines de esta Institución, con el objeto de que los mismos puedan ser utilizados para efectos académicos, administrativos, de mercadotecnia.</p>
                            <p>ventas y estadísticos, incluyendo de manera enunciativa más no limitativa, la validación de la autenticidad de certificados, diplomas, títulos o cualquier otro documento que sea expedido a favor del alumno, ex-alumno, o posible alumno; la confirmación de la autenticidad de la documentación que usted entregue; la entrega de dichos datos a cualquier autoridad competente que lo solicite; la realización de cualquier trámite interno de la Institución que sea necesario para poder cumplir los fines de la misma; el envío de información por parte de la Institución que le sea necesaria o conveniente para cursar y terminar sus estudios; su difusión en los diversos programas de prácticas profesionales y servicio social; invitación a ciertos eventos de la Institución, la cobranza de adeudos pendientes.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                            <i class="fa fa-check"></i> Perfecto
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <script src="../public/assets/js/core/jquery.min.js"></script>
        <script src="../public/assets/js/core/popper.min.js"></script>
        <script src="../public/assets/js/core/bootstrap.min.js"></script>
        <script src="../public/assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="../public/assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="../public/assets/js/core/jquery.appear.min.js"></script>
        <script src="../public/assets/js/core/jquery.countTo.min.js"></script>
        <script src="../public/assets/js/core/js.cookie.min.js"></script>
        <script src="../public/assets/js/codebase.js"></script>
        <script src="../public/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="../public/assets/js/pages/op_auth_signup.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script type="text/javascript" src="registrarse.js"></script>
        <script src="https://kit.fontawesome.com/717bdba49c.js" crossorigin="anonymous"></script>
    </body>
</html>