<?php

    require_once 'Mamifero.php';

    class Cachorro extends Mamiferos{
        public function enterrarOsso(){
            echo 'Enterrando osso...';
        }
        public function AbanarRabo(){
            echo 'Abanando o rabo...';
        }
    }