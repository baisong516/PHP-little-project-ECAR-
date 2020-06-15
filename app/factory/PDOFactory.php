<?php
class PDOFactory {
    const DB_CONFIG_FILE_PATH = __DIR__.'/../database/dbconfig.json';
    static function getConnection()
    {
        $f = fopen(PDOFactory::DB_CONFIG_FILE_PATH,"r");
        $content = fread($f,filesize(PDOFactory::DB_CONFIG_FILE_PATH));
        $json_data = json_decode($content);
        
        $dsn = $json_data->DSN;
        $username = $json_data->USERNAME;
        $password = $json_data->PASSWORD;
        
        $conn = new PDO($dsn,$username,$password);
        return $conn;
    }
}
