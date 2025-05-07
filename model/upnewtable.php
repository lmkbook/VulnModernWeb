<?php

try{

    require_once('../database/connection.php');

    class upnewtables{
    
        public function ValitadePost(){
            if($_SERVER["REQUEST_METHOD"] !== "POST"){
                echo json_encode([
                    'fail' => htmlspecialchars(trim('Valide los datos he intente de nuevo'))
                ]);
                return false;  
            }
            return true;
        }

        public function droptables(){

            $query = Connect::ObtainInstance()->prepare("DROP TABLE IF EXISTS Users");
            if($query->execute()){
                $drop = Connect::ObtainInstance()->prepare("DROP TABLE IF EXISTS Record");
                if(!$drop->execute()){
                    echo json_encode([
                        'fail' => htmlspecialchars(trim('Ocurrio un errro al momento de eliminar las tablas'))
                    ]);
                    return false;
                }
                return true;
            }
            return false;
        }

        public function newTables(){

            $tableUsers = Connect::ObtainInstance()->prepare("CREATE TABLE IF NOT EXISTS `Users`(`idUsers` INT AUTO_INCREMENT, `name` VARCHAR(10), `password` TEXT, PRIMARY KEY(`idUsers`))");
            if($tableUsers->execute()){
                $tableRecord = Connect::ObtainInstance()->prepare("CREATE TABLE IF NOT EXISTS `Record`(`idRecord` INT AUTO_INCREMENT, `nameuser` VARCHAR(30) NOT NULL UNIQUE, `mail` TEXT NOT NULL UNIQUE, `password` TEXT NOT NULL, PRIMARY KEY(`idRecord`))");
                if(!$tableRecord->execute()){
                    echo json_encode([
                        'succes' => htmlspecialchars(trim('Ocurrio un error al momento de crear las tablas'))
                    ]);
                    return false;
                }
                return true;
            }
            return false;    
        }

        public function insertnewtables(){
            
            $insert = Connect::ObtainInstance()->prepare("INSERT INTO `Users` (`name`, `password`) VALUES ('Admin', MD5('Admin')), ('David', MD5('Password1234')), ('Jhon', MD5('Root')), ('nick', MD5('chocolate')), ('Patricio', MD5('spiderman'))");
            if($insert->execute()){
                echo json_encode([
                    'fail' => htmlspecialchars(trim('Tablas creadas con exito'))
                ]);
                return true;
            }
            echo json_encode([
                'fail' => htmlspecialchars(trim('Error al insertar los datos'))
            ]);
            return false;
        }
    }

    $obejec = new upnewtables();
    if($obejec->ValitadePost() !== false){
        if($obejec->droptables() !== false){
            if($obejec->newTables() !== false){
                $obejec->insertnewtables();
            }
        }
    }
    

}catch(Exception $e){
    echo json_encode([
        'fail' => htmlspecialchars(trim('Error durante la ejecucion'))
    ]);
    error_log("Codigo: " . $e->getCode() . " " . "Error:" . " " .$e->getMessage());
}
?>