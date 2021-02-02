<?php
    class Caneta {
        public $modelo;
        private $ponta;
        
        public function __construct($m, $p) {
            $this->modelo = $m;
            $this->ponta = $p;
        }
        public function getModelo(){
            
            return $this->modelo;
        }
        public function setModelo($m){
            $this->modelo = $m;
            
        }
        public function getPonta (){
            return $this->ponta;
        }
        public function setPonta($p){
            $this->ponta = $p;
        }
}
