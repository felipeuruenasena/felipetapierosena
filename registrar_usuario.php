<?php
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

//destruir la sesion y borrar todo lo que haya en la pagina

//session_destroy();

?>
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


<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->




    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
        <a href="index.html" class="navbar-brand ps-5 me-0">
            <img src="img/download.jpg">
        </a>
       
        <div class="collapse navbar-collapse" id="navbarCollapse">
        
               
        </div>
    </nav>
    <!-- Navbar End -->



    <!-- Service Start -->
    <div class="container-xxl py-5">
    <div class="container-fluid" style="border-top: 1px solid #E1E1E1; padding: 20px; ">
                <div class="row gy-5 gx-4">
                <legend>Registre sus datos y pague la suscripción anual para tener acceso a la bolsa de empleo.</legend>
                    </div>
                </div>
        </div>
        <div class="container">
   

<form class="dashboard-container FormularioAjax" method="POST" data-form="save" data-lang="es" autocomplete="off" action="save_user.php" enctype="multipart/form-data" >
        <input type="hidden" name="modulo_producto" value="registro">
        <fieldset class="mb-4">
            <legend><i class="fas fa-box"></i> &nbsp; Información Personal</legend>
                <div class="container-fluid"><br>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="col-12 col-md-9">
                                <div class="form-outline mb-4">
                                    <label for="document" class="nav-link"><i class="fas fa-id-card"></i> &nbsp;<strong>No. Documento </strong></label>
                                    <input type="text" pattern="[0-9]{8,10}" class="form-control" name="document" id="document" maxlength="10" placeholder="Obligatorio" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-outline mb-4">
                                <div class="mb-4">
                                    <div class="form-outline mb-4">
                                        <label for="names" class="nav-link"><i class="fas fa-user"></i> &nbsp;<strong>Nombres Completos</strong></label>
                                        <input type="text" value="" onkeyup="mayus(this);"  pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().!#$%&’*+/=?^_`{|}~-].,\s ]{4,520}" class="form-control" name="names" id="names" maxlength="90" placeholder="Obligatorio" text-transform="capitalize" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </fieldset>
        <fieldset class="mb-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="col-12 col-md-9">
                            <div class="form-outline mb-4">
                                <div class="mb-4">
                                    
                                <div class="form-outline mb-4">
                                    <label for="phone" class="nav-link"><i class="fas fa-phone"></i> &nbsp;<strong>No. Celular </strong></label>
                                    <input type="text" pattern="[0-9]{10,10}" class="form-control" name="phone" id="phone" maxlength="10" placeholder="Obligatorio" required>
                                </div>
                                </div>

                                <div class="mb-4">
                                <label for="profesion" class="nav-link"><i class="fas fa-user"></i> &nbsp;<strong>Profesión</strong></label>
                                        <input type="text" value="" onkeyup="mayus(this);" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().!#$%&’*+/=?^_`{|}~-].,\s ]{4,520}" class="form-control" name="profesion" id="profesion" maxlength="90" placeholder="Obligatorio" text-transform="capitalize" required>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-outline mb-4">
                            <div class="mb-4">
                                    <label for="email" class="nav-link"><i class="fas fa-envelope"></i> &nbsp;<strong>Email</strong></label>
                                    <input type="email"  onkeyup="minus(this);" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" class="form-control" name="email" id="email" maxlength="40" required>
                            </div>
                        </div>
                        <div class="form-outline mb-4">
                                    <label for="contra" class="nav-link"><i class="fas fa-key"></i> &nbsp;<strong>Contraseña Mín 8 Max 10 caracteres. </strong></label>
                                    <input type="password" pattern="[A-Za-z0-9!?-]{8,10}" class="form-control" name="contra" id="contra" maxlength="10" placeholder="Obligatorio" required>
                                </div>
                    </div>  

                    
                        <div class="form-outline mb-4">
                                    <label for="contra" class="nav-link"><i class="fas fa-user"></i> &nbsp;<strong>Tipo Usuario </strong></label>
                                    <select class="form-control">
                                        <option value="">seleccione una</option>
                                        <option value="">vigilante</option>
                                        <option value="">numerario</option>
                                    </select>
                                </div>
                    </div> 
                    
                </div>
            </div>
            
        </fieldset>
       

       
        <fieldset class="mb-4">
            <legend><i class="far fa-comment-dots"></i> &nbsp; Descripción del Perfil </legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="form-outline mb-4">
                            <textarea pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\s ]{4,520}" class="form-control" name="desc_perfil" id="desc_perfil" maxlength="400" rows="7" placeholder="Describa su perfil profesional y laboral brevemente." required></textarea>
                            
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <!-- <fieldset class="mb-4">
            <legend><i class="far fa-file-image"></i> &nbsp; Foto </legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <label for="imag_cur" class="form-label">Tipos de archivos permitidos: JPG, JPEG, PNG. Tamaño máximo 50MB. Resolución recomendada 500px X 500px o superior manteniendo el aspecto cuadrado (1:1)</label>
                        <input class="form-control form-control-sm" id="imag_cur" name="imagen" type="file" required />
                    </div>
                </div>    
            </div>    
        </fieldset> -->
        <p class="text-center">
            <strong><small>Los campos marcados con * son obligatorios</small></strong>
        </p>           
        
        <p class="text-center" style="margin-top: 40px;">
            <button type="submit" class="btn btn-primary" name="save"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
        </p>
        
    </form>
<?php 

 include 'footer/footer.html';
?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


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
    <script>
        function mayus(e) {
        e.value = e.value.toUpperCase();
        }

        function minus(e) {
        e.value = e.value.toLowerCase();
        }
    </script>
</body>

</html>
