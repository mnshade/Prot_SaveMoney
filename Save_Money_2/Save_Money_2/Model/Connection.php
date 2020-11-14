<?php

    require '../.env.ini';

    class Connection {

        public static $pdo;

        public function Connect(){

            try {

                if (is_null(self::$pdo)){

                    self::$pdo = new PDO("mysql:host={$env['host']};dbname={$env['database']}", $env['user'], $env['password']);

                }

                // return self::$pdo;

                return "Conectado a {$this->__get('base')} em {$this->__get('server')} com sucesso.";

            } catch (PDOException $pe) {

                die("Não foi possível se conectar ao banco de dados {$this->__get('base')} :" . $pe->getMessage());
            }            

        }


    }

?>