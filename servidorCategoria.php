<?php
include 'util/conexao.php'; 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
     $genero = $_REQUEST['dado'];
     $array = array();
      switch($genero){
      case "1":{                
                $select = "SELECT id_categoria, nome FROM categoria WHERE id_genero = 1";
                $result = mysql_query($select);
                while ($row = mysql_fetch_array($result)) {                    
                    $id = $row['id_categoria'];
                    $nome = $row['nome'];                                                    
                    $array[$id] = "$nome" ;
                }

        break;
      }
      case "2":{
          $select = "SELECT id_categoria, nome FROM categoria WHERE id_genero = 2";
                $result = mysql_query($select);
                while ($row = mysql_fetch_array($result)) {                    
                    $id = $row['id_categoria'];
                    $nome = $row['nome'];                                                    
                    $array[$id] = "$nome" ;
                }
        break;
      }
      case "3":{
           $select = "SELECT id_categoria, nome FROM categoria WHERE id_genero = 3";
                $result = mysql_query($select);
                while ($row = mysql_fetch_array($result)) {                    
                    $id = $row['id_categoria'];
                    $nome = $row['nome'];                                                    
                    $array[$id] = "$nome" ;
                }
        break;
      }
      case "4":{
        $select = "SELECT id_categoria, nome FROM categoria WHERE id_genero = 4";
                $result = mysql_query($select);
                while ($row = mysql_fetch_array($result)) {                    
                    $id = $row['id_categoria'];
                    $nome = $row['nome'];                                                    
                    $array[$id] = "$nome" ;
                }
        break;
       }
      } 
      echo json_encode($array);

        

    
}