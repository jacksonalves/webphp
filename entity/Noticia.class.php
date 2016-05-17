<?php


class Noticia {
    private $id;
    private $genero;
    private $categoria;
    private $titulo;
    private $texto;
    private $imagem;
    private $autor;
    private $data;
            
    function __construct($idParam, $generoParam, $categoriaParam, $tituloParam, $textoParam,
            $imagemParam, $autorparam, $dataParam) {
       $this->id = $idParam; 
       $this->genero = $generoParam;
       $this->categoria = $categoriaParam;
       $this->titulo = $tituloParam;
       $this->texto = $textoParam;
       $this->imagem = $imagemParam;
       $this->autor = $autorparam;
       $this->data = $dataParam;
   }
   
   function __destruct() {
       
   }
   function getGenero() {
       return $this->genero;
   }

   function getCategoria() {
       return $this->categoria;
   }
   function setGenero($genero) {
       $this->genero = $genero;
   }

   function setCategoria($categoria) {
       $this->categoria = $categoria;
   }

         function getId(){
       return $this->id;
   }
   function getTitulo(){
       return $this->titulo;
   }
   
   function getTexto(){
       return $this->texto;
   }
   function getImagem(){
       return $this->imagem;
   }
   function getAutor(){
       return $this->autor;
   }
   function getData(){
       return $this->data;
   }
   function setId($idParam){
       $this->id = $idParam;
   }
           function setTitulo($tituloParam){
       $this->titulo = $tituloParam;
   }
   function setTexto($textoParam){
       $this->texto = $textoParam;
   }
   function setImagem($imagemParam){
       $this->imagem = $imagemParam;
   }
   function setAutor($autorParam){
       $this->autor = $autorParam;
   }
   function setData($dataParam){
       $this->data = $dataParam;
   }
}

