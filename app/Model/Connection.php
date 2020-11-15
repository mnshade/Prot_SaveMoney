<?php

    class Connection {

        public static $pdo;

        public function Connect(){

            $env = parse_ini_file('.env.ini');
            // var_dump($env);

            try {

                if (is_null(self::$pdo)){

                    self::$pdo = new PDO("mysql:host={$env['host']};dbname={$env['database']}", $env['user'], $env['password']);

                }

                return self::$pdo;

                // return "Conectado a {$env['database']} em {$env['host']} com sucesso.";

            } catch (PDOException $pe) {

                die("Não foi possível se conectar ao banco de dados {$env['database']} :" . $pe->getMessage());
            }            

        }

    }

?>