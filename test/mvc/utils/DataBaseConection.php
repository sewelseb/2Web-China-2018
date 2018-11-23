<?php
    abstract class DataBaseConection {

        static public function getPDO() {
            try{
                return new PDO('mysql:host=localhost;dbname=china_3_web','root','root');
            }
            catch (PDOException $e)
            {
                die('Data base connexion error');
            }
        }
    }