<?php

    $connect = mysqli_connect("localhost","root","","logincode") or die("Hubo un error en la conexión");  

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordC = $_POST['passwordC'];

    if($password == $passwordC){
        $query = mysqli_query($connect,
        "SELECT * FROM credentials where email = '".$email."';");

        $resultado = mysqli_num_rows($query); 

        if($resultado == 1){
            echo json_encode("Registered");
        }else{
            echo json_encode('No se pudo ingresar');
        }
    }

?>