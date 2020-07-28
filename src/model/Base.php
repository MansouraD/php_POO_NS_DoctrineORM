<?php
namespace model ;




class Base {
    protected $base;

    function __construct(){

        $this->base = $this->se_connecter();
    }

    private function se_connecter(){

        $server = "localhost";
        $user = "root";
        $password = "";
        $base = "ormBase";
      
        try {
            $connexion = new \PDO("mysql:host=$server;dbname=$base",$user, $password);
            $connexion->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        }catch(\PDOException $exception){

            die ('Error :'.$exception->getMessage());
        }
        
        return $connexion;
        
    }




}

?>