<?php

    class Connect{

        private static $instance = null; //Instancia para garantizar una unica conexion               
        private $connection;            
        private $host = '127.0.0.1';            
        private $user = 'root';            
        private $password = '';            
        private $db = 'VMW';
        
        private function __construct(){ //metodo constructor privado
            try{
                $this->connection = new PDO(
                    "mysql:host=$this->host;dbname=$this->db",
                    $this->user,
                    $this->password,
                    [
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", //Codificacion utf8 por defecto
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //Capturar los errores
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //Modo fetch por defecto
                        PDO::ATTR_EMULATE_PREPARES => false, //Emulacion de sentencias preparadas
                        PDO::ATTR_PERSISTENT => true //Conexiones persistentes
                    ]
                );

            }catch(PDOException $e){
                echo htmlspecialchars(trim("Error con la conexion"));
                die(error_log("Error con la base de datos: " . $e->getMessage()));
            }
        }
        
        public static function ObtainInstance(){ //Funcion publica para poder acceder al constructor -> conexion a la base de datos
            if(!self::$instance){
                self::$instance = new Connect();
            }
            return self::$instance->connection;
        }
    }

?>