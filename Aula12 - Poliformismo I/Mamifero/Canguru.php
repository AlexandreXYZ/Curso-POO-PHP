<?php

    require_once 'Mamifero.php';

    class Canguru extends Mamiferos{
        public function usarBolsa(){
            echo 'Usando bolsa...';
        }
        public function locomover(){
            echo 'Saltando';
        }
    }