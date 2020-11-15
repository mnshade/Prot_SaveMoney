<?php

    require 'Connection.php';

    class User{

        public function Login($user, $password){

            $conn = new Connection();
            $pdo = $conn->Connect();

            $sql = $pdo->prepare('select EmailUsuario, SenhaUsuario from Usuario where usr = :usr and email = :email');
            $sql->execute(array('usr' => $user, 'password'=> $password));
            $full_name = $sql->fetch();

            $return = array('rowCount' => $sql->rowCount(), 'full_name' => $full_name['full_name']);
            
            return $return;

        }

        public function Logout(){


        }

        public function Create(){


        }

    }