<?php
    class Config{
        function GetConfig(){
            $serverName = "localhost";
            $db = "prep";
            $username = "root";
            $password = "";

            try{
                $conn = new PDO("mysql:dbname=$db;host=$serverName;", $username, $password);
                return $conn;
            }catch(PDOException $ex){
                echo "error in config";
            }
        }
    }
?>