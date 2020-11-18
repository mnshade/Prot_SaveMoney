<?php

    require 'Connection.php';

    session_start();

    class Deposito{

        public function Create($valor, $descricao, $date, $id){

            $conn = new Connection();
            $pdo = $conn->Connect();

            $sql = $pdo->prepare('insert into depositousuario (DepositoEconomiaValor, DataDepositoEconomia, DepositoEconomiaDesc, Usuario_UsuarioID) values (:valor, :data, :descricao, :id)');
            $resultado = $sql->execute(array('valor' => $valor, 'data' => $date, 'descricao' => $descricao, 'id' => $id));

            return $resultado;

        }
        
        public function Read($param, $id){

            $conn = new Connection();
            $pdo = $conn->Connect();

            $sql = $pdo->prepare("select * from depositousuario where $param = :id");
            $resutaldo = $sql->execute(array('id' => $id));

            $retorno = $resultado->fetch();

            return $retorno;
            
        }

        public function Edit(){
            
        }

        public function Delete(){
            
        }
    }