<?php
    require_once('../../database/config.php');
    $host = $GLOBALS['host'];
    $user = $GLOBALS['user'];
    $password = $GLOBALS['password'];
    $bd = $GLOBALS['bd'];
    /// Inicia el patron de singleteon
    class Connect{

        private static $instance = null; //Instancia para garantizar una unica conexion               
        private $connection;            

        private function __construct(){ //metodo constructor privado
            try{

                global $host;
                global $user;
                global $password;
                global $bd;

                $this->connection = new PDO(
                    "mysql:host=$host;dbname=$bd",
                    $user,
                    $password,
                    [
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", //Codificacion utf8 por defecto
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //Capturar los errores
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //Modo fetch por defecto
                        PDO::ATTR_EMULATE_PREPARES => true, //Emulacion de sentencias preparadas
                        PDO::ATTR_PERSISTENT => true //Conexiones persistentes
                    ]
                );

            }catch(PDOException $e){
                echo $user;
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