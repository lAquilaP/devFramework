<?php
    class Cadastro{
        private $nome;
        private $senha;


        public function setNome($nm){
            $this->nome = $nm;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setSenha($pass){
            $this->senha = $pass;
        }
        public function getSenha(){
            return $this->senha;
        }
    }
?>