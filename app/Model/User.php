<?php

    require 'Connection.php';

    session_start();

    class User{

        public function Login($user, $password){

            $conn = new Connection();
            $pdo = $conn->Connect();

            $sql = $pdo->prepare('select UsuarioID, EmailUsuario, SenhaUsuario from Usuario where EmailUsuario = :email && SenhaUsuario = :password');
            $sql->execute(array('email' => $user, 'password'=> $password));
            
            if($ID = $sql->fetch()){
                $return = array('rowCount' => $sql->rowCount(), 'ID' => $ID['UsuarioID'] );
            
                return $return;
            }else
                return 0;

            // return $password;

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

                $resultaod = $sql->execute(array('nome' => $nome, 'email' => $email, 'password' => $password));

                // return $sql->fetch();

                if(!$resultado){
                    $retorno = $this->Read('EmailUsuario', $email);
                    $_SESSION['user'] = $retorno['UsuarioID'];
                    $_SESSION['nome'] = $retorno['NomeUsuario'];
                    header("Location: ../View/dashboard.php");   
                    
                    // var_dump($retorno);
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

            session_unset();
            session_destroy();
            header("Location: ../View/Login.php");

        }

        public function Read($param, $id){            

            $conn = new Connection();
            $pdo = $conn->Connect();

            $sql = $pdo->prepare("select * from usuario where $param = :id");
            $sql->execute(array('id' => $id));

            $resultado = $sql->fetch();

            // return $resultado['NomeUsuario'];

            return $resultado;  
            
        }

        public function Delete(){


        }

    }