<?php 
require '../config/database.php';

$db = new Database();
$con = $db->conectar();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Verifica que se reciban los datos esperados del formulario
    if (
        isset($_POST["nombre"])  
        isset($_POST["documento"])
        isset($_POST["contrasena"])
    ) {
        $nombre  = $_POST["nombre"];
        $correo  = $_POST["correo"];
        $usuario = $_POST["usuario"];
        $clave   = password_hash($_POST["clave"], PASSWORD_DEFAULT); // Encriptar clave
        }
            // Insertar en la base de datos
            $sql = $con->prepare("INSERT INTO usuarios (nombre, correo, usuario, clave) VALUES (?, ?, ?, ?)");
            $sql->execute([$nombre, $correo, $usuario, $clave]);
        
            echo "<script>alert('Usuario registrado con éxito.')</script>";
            echo "<script>window.location='../index.php'</script>";
         {
            echo "<script>alert('Error al registrar: " . $e->getMessage() . "')</script>";
        }


    else {
    echo "<script>alert('Acceso no permitido.')</script>";
    echo "<script>window.location='../index.php'</script>";
}
?>
