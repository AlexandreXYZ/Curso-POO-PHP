<?php
require_once 'Publicacao.php';
require_once 'Pessoa.php';
class Livro implements Publicacao{
    
    //Atributos\\
    private $titulo;
    private $autor;
    private $DataLivro;
    private $totalPag;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    //metodo padrão\\
    function __construct($titulo, $autor, $dataLivro, $totalPag, $leitor) {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setDataLivro($dataLivro);
        $this->setTotalPag($totalPag);
        $this->setLeitor($leitor);
    }

    //Metodos\\
    public function detalhes(){
       echo "<br>O livro " . $this->getTitulo() . "Foi escrito por " . $this->getAutor() . "em " . $this->getDataLivro();
       echo "<br>Paginas: " . $this->getTotalPag();
       echo "<br>Leitor: " . $this->getLeitor()->getNome() . "<br>";
    }
    public function abrir() {
        $this->setAberto(true);
        if($this->getPagAtual() == NULL){
            $this->setPagAtual(1);
        }
    }
    public function fechar() {
        if($this->getAberto() == True){
            $this->setAberto(false);
        }
        else{
            echo "O livro já está fechado";
        }
    }
    public function folhear($p) {
        if($this->getAberto() == True){
            if($p > $this->getTotalPag() && $p < 1){
                echo 'Essa pagina não exist';
                $this->setPagAtual(0);
            }
            else{
                $this->setPagAtual($p);
            }
        }
        else{
            echo "O livro já está fechado";
        }
        
    }
    public function avançarPag() {
        if($this->getAberto() == True){
            if($this->getPagAtual() < $this->getTotalPag()){
                $this->setPagAtual($this->getPagAtual()+1);
            }
            else{
                echo 'Essa é a ultima pagina';
            }
        }
        else{
            echo "O livro já está fechado";
        }
    }
    public function voltarPag() {
        if($this->getAberto() == True){
            if($this->getPagAtual() > $this->getTotalPag()){
                $this->setPagAtual($this->getPagAtual()-1);
            }
            else{
                echo 'Essa é a primeira pagina';
            }
        }
        else{
            echo "O livro já está fechado";
        }

    }

    //Metodos especiais\\
    #Titulo
    function getTitulo() {
        return $this->titulo;
    }
    function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    #Autor
    function getAutor() {
        return $this->autor;
    }
    function setAutor($autor): void {
        $this->autor = $autor;
    }

        
    #TotalPag
    function getTotalPag() {
        return $this->totalPag;
    }
    function setTotalPag($totalPag): void {
        $this->totalPag = $totalPag;
    }

    #PagAtual
    function getPagAtual() {
        return $this->pagAtual;
    }
    function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }
    
    #Aberto
    function getAberto() {
        return $this->aberto;
    }
    function setAberto($aberto): void {
        $this->aberto = $aberto;
    }
    
    #Leitor
    function getLeitor() {
        return $this->leitor;
    }
    function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }
    
    #Data do Livro
    function getDataLivro() {
        return $this->DataLivro;
    }
    function setDataLivro($DataLivro): void {
        $this->DataLivro = $DataLivro;
    }
}