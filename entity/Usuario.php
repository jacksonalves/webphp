<?php

class Usuario {
    private $id;
    private $nome;
    private $senha;
    
    function __construct($id, $nome, $senha) {
        $this->id = $id;
        $this->nome = $nome;
        $this->senha = $senha;
    }
    function __destruct() {
        
    }
    function getId(){
        return $this->id;
    }
    function getNome(){
        return $this->nome;
    }
    function getSenha(){
        return $this->nome;
    }
    
    function setId($id){
       $this->id = $id;
    }
    function setNome($nome){
       $this->nome = $nome;
    }
    function setSenha($nome){
       $this->nome = $nome;
    }
}
