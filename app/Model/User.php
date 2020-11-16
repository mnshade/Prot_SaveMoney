<?php

    require 'Connection.php';

    session_start();

    class User{

        public function Login($user, $password){

            $conn = new Connection();
            $pdo = $conn->Connect();

            $sql = $pdo->prepare('select EmailUsuario, SenhaUsuario from Usuario where EmailUsuario = :email && SenhaUsuario = :password');
            $sql->execute(array('email' => $user, 'password'=> $password));
            $email = $sql->fetch();

            $return = array('rowCount' => $sql->rowCount(), 'EmailUsuario' => $email['EmailUsuario']);
            
            return $return;

        }

        public function Logout(){


        }

        public function Create($nome, $email, $password){

            $conn = new Connection();
            $pdo = $conn->Connect();

            $sql = $pdo->prepare('select EmailUsuario from Usuario where EmailUsuario = :email');
            $sql->execute(array('email' => $email));

            $resultado = $sql->fetch();

            // return $resultado;

            if(!$resultado){

                $sql = $pdo->prepare('insert into Usuario (NomeUsuario, EmailUsuario, SenhaUsuario) values (:nome, :email, :password)');

                $sql->execute(array('nome' => $nome, 'email' => $email, 'password' => $password));

                // return $sql->fetch();

                if(!$resultado){
                    $_SESSION['user'] = 'Cadastro realizado com sucesso!';
                    header("Location: ../View/dashboard.php");          
                }else{
                    $_SESSION['msg'] = 'Ocorreu algum erro. Tente mais tarde!';
                    header("Location: ../View/cadastro.php");
                }

            }else{
                $_SESSION['msg'] = 'Email já cadastrado. Por favor utilize outro email.';
                header("Location: ../View/cadastro.php");
            }

        }

        public function Edit(){


        }

        public function Read(){

            
        }

        public function Delete(){


        }

    }