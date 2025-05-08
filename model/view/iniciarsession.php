<?php
$data = json_decode(file_get_contents('php://input'), true);
try{

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
            $rpt = isset($json_response['fail']) ? $json_response['fail'] : $json_response['succes'];
            echo json_encode([
                'fail' => $rpt
            ]);

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