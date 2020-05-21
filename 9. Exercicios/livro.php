<?php
require_once 'pessoa.php';
require_once 'publicacao.php';

class livro implements publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    function detalhes(){
        echo "<hr>Livro " . $this->titulo . " escrito por " . $this->autor;
        echo "<br>Paginas: " . $this->totPaginas . ", pagina atual: " . $this->pagAtual;
        echo "<br>Sendo lido por " . $this->leitor->getNome();
    }

    function __construct($titulo, $autor, $totPaginas, $leitor){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }

    //GET and SET
    function getTitulo(){
        return $this->titulo;
    }
    function getAutor(){
        return $this->autor;
    }
    function getTotPaginas(){
        return $this->totPaginas;
    }
    function getPagAtual(){
        return $this->pagAtual;
    }
    function getAberto(){
        return $this->aberto;
    }
    function getLeitor(){
        return $this->leitor;
    }
    function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    function setAutor($autor){
        $this->autor= $autor;
    }
    function setTotPaginas($totPaginas){
        $this->totPaginas = $totPaginas;
    }
    function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }
    function setAberto($aberto){
        $this->aberto = $aberto;
    }
    function setLeitor($leitor){
        $this->leitor = $leitor;
    }

    //metodos abstratos
    function abrir(){
        $this->aberto = true;
    }
    function avancarPag(){
        $this->pagAtual ++;
    }
    function fechar(){
        $this->fechado = false;
    }
    function folhear($p){
        if($p > $this->totPaginas){
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }
    function voltarPag(){
        if($this->pagAtual > 0){
            $this->pagAtual --;
        } else {
            echo "[ERROR] $this->pagAtual";
        }
    }

}?>