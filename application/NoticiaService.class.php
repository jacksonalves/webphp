<?php


class NoticiaService {
    
    private $noticiaRepository;
    
    function __construct($conexao) {
        $this->noticiaRepository = new 
                NoticiaRepository($conexao);
    }
    function inserirNoticias(Noticia $noticia){
        $this->noticiaRepository->inserir($noticia);
    }
            function listarNoticias(){
        return $this->noticiaRepository->listarNoticias();
    }
    function MostrarNoti($id_noticia){
        return $this->noticiaRepository->listaNO($id_noticia);
    }
}
