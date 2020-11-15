<?php

    require 'Connection.php';

    class User{

        public function Login($user, $password){

            $conn = new Connection();
            $pdo = $conn->Connect();

            $sql = $pdo->prepare('select EmailUsuario, SenhaUsuario from Usuario where EmailUsuario = :usr && SenhaUsuario = :password');
            $sql->execute(array('usr' => $user, 'password'=> $password));
            $email = $sql->fetch();

            $return = array('rowCount' => $sql->rowCount(), 'full_name' => $email['EmailUsuario']);
            
            return $return;

        }

        public function Logout(){


        }

        public function Create($nome, $email, $password){

            $conn = new Connection();
            $pdo = $conn->Connect();

            $sql =$pdo->prepare('insert into Usuario (NomeUsuario, EmailUsuario, SenhaUsuario) values (:nome, :email, :senha)');

            if($sql->execute(array('nome' => $nome, 'email' => $email, 'password' => $password))){
                
            }

        }

        public function Edit(){


        }

        public function Delete(){


        }

    }