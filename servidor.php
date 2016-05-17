<?php
session_start();
if(isset($_SESSION['usuarioID']) && isset($_SESSION['usuarioNome'])){
    
include_once('./entity/Noticia.class.php');
include_once('./repository/NoticiaRepository.class.php');
include_once('./util/Conexao.class.php');
include_once './application/NoticiaService.class.php';
include_once './util/funcoes.php';

                    $conexao = new Conexao();
                    $noticiaService = new NoticiaService($conexao);
                    
 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(isset($_POST['titulo']) && isset($_POST['texto']) && isset($_POST['autor']) && isset($_POST['data'])){
                    
                     $uploadfile = $_FILES['img']['name'];
                     //directório onde será gravado a imagem
                 if (!move_uploaded_file($_FILES['img']['tmp_name'], "fotos/".$uploadfile)) {
                    
                    //grava na base de dados, no campo imagem, somente o nome da imagem que ficou gravado na variável $uploadfile que criamos acima.
                } else {
                    //não foi possível concluir o upload da imagem.
                }
                    $genero = htmlspecialchars($_POST['genero']);
                    $categoria = htmlspecialchars($_POST['categoria']);
                    $titulo = htmlspecialchars($_POST['titulo']);
                    $texto = htmlspecialchars($_POST['texto']);
                    $autor = htmlspecialchars($_POST['autor']);
                    $imagem = $uploadfile;
                    $data = datetoen($_POST['data']);
                    $noticia = new Noticia(0, $genero, $categoria, $titulo, $texto, $imagem, $autor, $data);
                    $noticiaService->inserirNoticias($noticia);
                   header('Location: index.php');
                    }else{
			echo "dados invalidos";
		}
                echo "dados invalidos";
                }

    } else {
        header("Location: util/login.php");
        exit;
        }