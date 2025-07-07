<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Inicio de sesion</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/LOGO.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body onload="document.getElementById('usuario').focus()">
    <!-- Spinner Start -->
    
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
        <a href="#" class="navbar-brand ps-5 me-0">
        <img src="img/download.jpg" width="90" height="100">
        </a>

       
    </nav>
    <!-- Navbar End -->

    <!-- Service Start -->
    <div class="container-xxl py-3">
       
    </div>
    <div class="container" align="center">
        <fieldset class="mb-4">
            <legend><i class="fas fa-user" ></i> &nbsp; INICIO DE SESION</legend>
                <form role="form" class="form-horizontal" method="post" name="form1" id="form1" action="includes/inicio.php" autocomplete="off">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="col-12 col-md-9">
                            <div class="form-outline mb-4">
                                <div class="mb-4">
                                    <div class="form-outline mb-4">
                                        <label for="cargo" class="nav-link"> &nbsp;<strong>EMAIL</strong></label>
                                            <input type="text" id="email" class="form-control Input" name="usuario" maxlength="11" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="col-12 col-md-9">
                            <div class="form-outline mb-4">
                                <div class="mb-4">
                                    <div class="form-outline mb-4">
                                        <label for="cargo" class="nav-link"> &nbsp;<strong>CONTRASEÑA </strong></label>
                                        <input type="password" id="clave" class="form-control Input" name="clave" maxlength="10" required>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <input type="submit" name="inicio" id="inicio" value="   Entrar   " class="btn btn-info center-block"/>
                    </div><br>
                    
                        <a href="registrar_usuario.php"><h6>Registrarse</h6></a>
                    </div>
                    <!-- <div class="form-group" align="center">
                        <a href=""><h6>Registrarse</h6></a>
                    </div> --> 
                    <input type="hidden" name="MM_insert" value="form1">
                </form>
            </fieldset>
    </div>

    
<?php 

 include 'footer/footer.html';
?>

    


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>
