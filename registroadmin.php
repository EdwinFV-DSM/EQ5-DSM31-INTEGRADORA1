<?php

if(isset($_POST)){
    require_once 'includes/conexion.php';
    


    //Recoger valores del formulario

    $email = isset($_POST['email']) ? $_POST['email'] : false;
	$password = isset($_POST['password']) ? $_POST['password']: false;
    
         // Array de errores
	$errores = array();
    
    //Validar valores
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
		$email_validado = true;
	}else{
		$email_validado = false;
		$errores['email'] = "El email no es válido";
	}

    // Validar la contraseña
	if(!empty($password)){
		$password_validado = true;
	}else{
		$password_validado = false;
		$errores['password'] = "La contraseña está vacía";
	}

    var_dump($errores);

    $guardar_usuario = false;
	
	if(count($errores) == 0){
		$guardar_usuario = true;
        //cifrar contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        // INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
		$sql = "INSERT INTO usuarios VALUES(null,'$email', '$password_segura');";
		$guardar = mysqli_query($db, $sql);
        if($guardar){
			$_SESSION['completado'] = "Registro exitoso";
		}else{
			$_SESSION['errores']['general'] = "Fallo en el registro, intente otra vez";
		}

       
    }else{
        $_SESSION['errores']=$errores;
        
    }
    header('location:registroadmin1.php');





}

/*
if(isset($_POST)){
	
	// Conexión a la base de datos
	require_once 'includes/conexion.php';

	// Iniciar sesión
	if(!isset($_SESSION)){
		session_start();
	}

	// Recoger valores del formulario
    $email = isset($_POST['email']) ? $_POST['email'] : false;
	$password = isset($_POST['password']) ? $_POST['password']: false;
    
    // Array de errores
	$errores = array();

	// Validar el email
	if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
		$email_validado = true;
	}else{
		$email_validado = false;
		$errores['email'] = "El email no es válido";
	}
	
	// Validar la contraseña
	if(!empty($password)){
		$password_validado = true;
	}else{
		$password_validado = false;
		$errores['password'] = "La contraseña está vacía";
	}

    $guardar_usuario = false;
	
	if(count($errores) == 0){
		$guardar_usuario = true;
        
        //cifrar contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        // INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
		$sql = "INSERT INTO usuarios VALUES(null,'$email', '$password_segura');";
		$guardar = mysqli_query($db, $sql);

        if($guardar){
			$_SESSION['completado'] = "El registro se ha completado con éxito";
		}else{
			$_SESSION['errores']['general'] = "Fallo al guardar el usuario!!";
		}

    }else{
		$_SESSION['errores'] = $errores;
        
	}
	

}*/
