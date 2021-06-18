<?php

    require_once "../Models/LoginModel.php";

    if( isset($_POST['ingresar'])){

        if(
            preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ_., ]+$/', $_POST['usu']) &&
            preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ_., ]+$/', $_POST['contra'])
        ){
            $admon = array(
            "user" => $_POST['usu'], //son variables de name del imput
            "password" => $_POST['contra']
            );
            $respuesta = LoginModel::validarUsuarios($admon);
            
            echo json_encode(['respuesta'=>$respuesta]);
        }else{
            echo json_encode(['respuesta'=>'Caracteres no admitidos']);
        }
        
    }