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
        
        public function Read(){

            $conn = new Connection();
            $pdo = $conn->Connect();

            $numArgs = func_num_args();
            $args = func_get_args();

            // var_dump($numArgs, $args);

            if($numArgs === 3){
                $param = $args[0];
                $sql = $pdo->prepare("select SUM(DepositoEconomiaValor) from depositousuario WHERE $param= :id");
                $sql->execute(array('id' => $args[1]));  
                $retorno = $sql->fetch();   
                
                // var_dump($retorno);
                return $retorno[0];
            }else{
                $param = $args[0];
                $sql = $pdo->prepare("select * from depositousuario WHERE $param= :id");
                $sql->execute(array('id' => $args[1]));  
                $retorno = $sql->fetchAll();                        

                return $retorno;
            }
            
        }

        public function Edit(){  
            
        }

        public function Delete(){
            
        }
    }