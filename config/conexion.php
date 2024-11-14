<?php
     session_start();

     class Conectar{
        proptected $dbh;

        protected function Conexion(){
            try{
                $conectar = $this->$dbh = new PDO("mysql:local=localhost;dbname=BD.sql","root","suclave","");
                return $conectar;
            }catch(exception $e){
                print "¡Error BD!: ".$e->getMessage()."</br>";
                die();
            }
        }
        public function set_names(){
            return $this->$dbh->query("SET NAMES'utf8'");
        }
        public function ruta(){
            //local
            return "http://localhost/BD/";
            //web
            //return "https://WWW.sudominio.com/BD/";
        }
     }