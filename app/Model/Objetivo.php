<?php

    require 'Connection.php';
    session_start();
   

    class Objetivo{
        public $nome;
        public $inicio;
        public $fim;
        public $valor;
        public $descricao;
        public $id;

        public function __construct($nome, $inicio, $fim, $valor, $descricao){
            $this->nome = $nome;
            $this->inicio = $inicio;
            $this->fim = $fim;
            $this->valor = $valor;
            $this->descricao = $descricao;

        }
        
    
        public function Create(){
            
            $conn = new Connection();
            $pdo = $conn->Connect();
            
            $sql = "INSERT INTO objetivousuario(NomeObjetivo, DataObjetivoIni, DataObejtivoFim, ObjetivoValor, ObjetivoDesc)
            VALUES(?, ?, ?, ?, ?);";

            $stmt = $pdo->prepare($sql);
            $resultado = $stmt->execute([$this->nome, $this->inicio, $this->fim, $this->valor, $this->descricao]); //"Inserido com Sucesso" : "Erro o inserir" ;
            if($resultado){
                $_SESSION['msg'] = "Inserido com Sucesso";
                header("Location: ../View/criar_objetivo.php");
                
            }
            //var_dump($resultado);
            //echo "iniciando";
        }

        public function Read(){


        }

        public function Edit(){


        }

        public function Delete(){


        }
    }