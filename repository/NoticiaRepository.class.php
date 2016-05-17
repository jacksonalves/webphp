<?php

     header('Content-Type: text/html; charset=utf-8',true);

class NoticiaRepository {
    private $conexao;
    
    public function __construct($conexaoParam){
        $this->conexao = $conexaoParam;
    }
    
    public function inserir($noticia){
        $query = "INSERT INTO noticias (ID_GENERO, ID_CATEGORIA, TITULO, TEXTO, IMAGEM, AUTOR, DATA) values(?,?,?,?,?,?,?)";
      
          
        if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            $stmt->bind_param("iisssss", $noticia->getGenero(),$noticia->getCategoria(),$noticia->getTitulo(), $noticia->getTexto(), $noticia->getImagem(), $noticia->getAutor(), $noticia->getData());
            $stmt->execute();
        }else{
            
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
    }
       public function listarNoticias(){
        $retorno = array();
        $query = "SELECT id_noticia, id_genero, id_categoria, titulo, texto, imagem, autor, data FROM noticias ORDER BY id_noticia DESC limit 5";
        
          if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            
            $stmt->execute();
            $stmt->bind_result($id_noticia, $id_genero, $id_categoria, $titulo, $texto, $imagem, $autor, $data);
            
            //$id = result.getInt(0); 
          
            while ($stmt->fetch()) {
                $retorno[] = new Noticia($id_noticia, $id_genero, $id_categoria, $titulo, $texto, $imagem, $autor, $data);
            }
        }else{
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
        
        return $retorno;
    }
    public function listaNO($id_noticia){
        $retorno = array();
        $query = "SELECT id_noticia, id_genero, id_categoria, titulo, texto, imagem, autor, data FROM noticias WHERE id_noticia=".$id_noticia;
        
          if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            
            $stmt->execute();
            $stmt->bind_result($id_noticia, $id_genero, $id_categoria,$titulo, $texto, $imagem,$autor,$data);
            
            //$id = result.getInt(0); 
          
            while ($stmt->fetch()) {
                $retorno[] = new Noticia($id_noticia, $id_genero, $id_categoria, $titulo, $texto, $imagem, $autor,$data);
            }
        }else{
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
        
        return $retorno;
    }
    
    
}

