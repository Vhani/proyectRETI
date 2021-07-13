<?php 

    include 'conexion.php';


    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $edad = $_POST['edad'];

    //encriptar la contraseña en la base de datos
    $pass = hash('sha512', $pass);
    //consulta de insercion de datos de registro
    $consulta = "INSERT INTO usuariosdm(nombre, apellidos, correo, password, pais, ciudad, edad) 
                VALUES('$nombre', '$apellido', '$correo', '$pass', '$pais', '$ciudad', '$edad')";


    //control de correos repetidos
    $control_correo = mysqli_query($conexion, "SELECT * FROM usuariosdm WHERE correo= '$correo'");

    if(mysqli_num_rows($control_correo)>0){
        echo '<script>
            alert("Correo ya está en uso");
            window.location = "../registrarse.php";
        </script>';

        exit();
    }

    

    $ejecutar = mysqli_query($conexion, $consulta);

    if($ejecutar){
        echo '<script>
            alert("Usuario almacenado exitosamente");
            window.location = "../login.php";
        </script>';
    }else{
        echo '<script>
            alert("Usuario no registrado, intentar de nuevo");
            window.location = "../login.php";
        </script>';
    }

    mysqli_close($conexion);
?>