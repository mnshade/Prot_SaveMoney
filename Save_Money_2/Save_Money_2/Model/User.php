<?php

    require 'Connection.php';

    class User{

        public function Login($user, $password){

            $conn = new Connection();
            $pdo = $conn->Connect();

            $sql = $pdo->prepare('select EmailUsuario, SenhaUsuario from Usuario where usr = :usr and email = :email');
            $sql->execute(array('usr' => $user, 'password'=> $password));
            
        }

        public function Logou(){


        }

        public function Create(){


        }

    }