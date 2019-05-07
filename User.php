<?php
    class User{
        private $nome;
        private $idade;
        private $peso;
        private $altura;
        
        public function setUser(string $nome, int $idade, float $peso, float $altura){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->peso = $peso;
            $this->altura = $altura;
        }
        
        public function getUser(){
            return "($this->nome) tem ($this->idade) anos";
        }
        
        private function calcImc(){
            return $this->peso/($this->altura*$this->altura);
        }
        
        public function setIdade(int $idade){
            $this->idade = $idade;
        }
        
        public function setPeso(float $peso){
            $this->peso = $peso;
        }
        
        public function getImc(){
            return $this->calcImc();
        }
    }