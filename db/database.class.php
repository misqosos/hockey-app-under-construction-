
<?php
    
    class DbConnection {
        #Declare our attribute that will receive the instance of database.
        public static $instance;
     
        #Create the method that will make the connection with the database and will set this connection in the attribute "instance".
        public static function getDatabaseConnection() {
            #Verify if the attribute already have a connection set in it.
            if (!isset(self::$instance)) {
                #Create a new PDO object and make the connection with database.$dbh = new PDO("mysql:host=$host", $root, $root_password);
                self::$instance = new PDO('mysql:host=players.local;dbname=icehockey', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
            }
            #Return the attribute with the connection setted in it.
            return self::$instance;
        }
    }
?>