<?php
session_start();
$data = json_decode(file_get_contents('php://input'), true);
try{

    function bloquearUSer(){
        sleep(60);
    }

    class ValidarDatos{
        
        public function validarCampos($name, $password){
            if(empty($name) || empty($password)){
                echo json_encode([
                    'fail' => htmlspecialchars(trim('Los campos son de caracter obligatorios'))
                ]);
                return false;
            }
            return true;
        }

        public function EviarApiFlask($name, $password){
            $datos = ['user' => $name, 'password' => $password];
            $startcurl = curl_init();
            curl_setopt($startcurl, CURLOPT_URL, "http://127.0.0.1:5000/login");
            curl_setopt($startcurl, CURLOPT_POST, true);
            curl_setopt($startcurl, CURLOPT_POSTFIELDS, json_encode($datos));
            curl_setopt($startcurl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
            curl_setopt($startcurl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($startcurl);
            $json_response = json_decode($response, true);
            if(isset($json_response['fail'])){
                //Contador para la proteccion contra fuerza bruta
                $_SESSION['contador'] += 1;
                if($_SESSION['contador'] === 4){
                    echo json_encode([
                        'fail' => 'Vuelva a intentar despues de un minuto'
                    ]);
                    // Quitar el return y llamar la funcion para bloquear el usurio
                    return true;
                }
                // Si el contador no ha llegado a 4 retorna la respuesta de flask
                echo json_encode([
                    'fail' => htmlspecialchars($json_response['fail'])
                ]);
            }

        }
    }

    $obeject = new ValidarDatos();
    if($obeject->validarCampos($data['user'], $data['password']) !== false){
        $obeject->EviarApiFlask($data['user'], $data['password']);
    }

}catch(Exception $e){
    echo json_encode([
        'fail' => htmlspecialchars(trim('Error de ejecucion'))
    ]);
    error_log("Codigo: " . $e->getCode() . " " . "Error: " . $e->getMessage());
}

?>