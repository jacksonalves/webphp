<?php
include '/conexao.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST["txtTitulo"])){
    
    $titulo = $_POST["titulo"];
    $fonte = $_POST["fonte"];
    $data = $_POST["data"];
    $autor = $_POST["autor"];
    $conteudo = $_POST["conteudo"];
   
    
  
}
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de News</title>
         <style type="text/css">
            @import url("css/main.css");
        </style>
        <script type="text/javascript">
            function validar(){
                var msg = "---erro----\n preencha os seguintes campos\n";
                
                if(document.getElementById("titulo").value.length <=0){
                   msg += "campo titulo:\n"; 
                }
                
                if(document.getElementById("fonte").value.length <=0){
                    msg +=("campo fonte:\n");  
                }
                if(document.getElementById("conteudo").value.length <=0){
                    msg +=("campo conteudo:\n");  
                }
                if(document.getElementById("cbvalores").value <= 0){
                    msg +=("selecione o autor :\n");  
                }
                if(msg != "---erro----\n preencha os seguintes campos\n"){
                    
                    alert(msg);
                    return false;
                }
            }
            function mask_date(field){
                if(document.getElementById(field).value.length == 2){
                    document.getElementById(field).value = document.getElementById(field).value +"/";
                }
                if(document.getElementById(field).value.length == 5){
                    document.getElementById(field).value = document.getElementById(field).value +"/";
                }
            }
            function insertFortmatURL(field){
               var newValue = document.getElementById(field).value.replace("http://www.", "");
               document.getElementById(field).value = newValue;
                if(document.getElementById(field).value.length > 0){
                    document.getElementById(field).value = "http://www." + document.getElementById(field).value;
                }
            }    
        </script>
    </head>
    <body>
        <div id="cadastro">
        <fieldset>
            <legend>Cadastro de News</legend>
            <form name="frn_cadastro" method="POST" action="index.php" onsubmit="return validar();">
                    
                <label for="titulo">Titulo:</label>
                <br/>
                <input type="text" name="titulo" id="titulo" size="75"/>
                <br/>
                <label for="autor">Fonte :</label>
                <br/>
                <input type="text" name="tonte" id="fonte" size="75"/>
                <br/>
                <label for="data">Data de publicação :</label>
                <br/>
                <input type="text" name="data" id="data" size="30" onkeyup="mask_date(this.id);" maxlength="10" onfocus="insertFortmatURL('fonte');"/>
                <br/>
                <br/>
                <label for="autores">Autor :</label>
                <br/>
                <select name="autores" id="cbvalores">
                    <option value="0">--Selecione--</option>
                    
                   
                       <?php
                    $SQL = "SELECT * FROM autor ORDER BY nome ASC";
                    $query = mysql_query($SQL, $conn);
                    while ($exibir = mysql_fetch_array($query)){
                    ?>
                    <option value="<?php echo $exibir["id"];?>"><?php echo $exibir["nome"];?></option>
                    <?php 
                       }
                    ?>
                    
                </select>
                <br/>
                <br/>
                <label for="conteudo">Conteúdo :</label>
                <br/>
                <textarea name="txtArea" id="conteudo" rows="15" cols="50"></textarea>
                <br/>
                <br/>
                <input type="submit" value="Cadastrar"/>
                <input type="reset" value="Limpar"/>
                </form>
        </fieldset>
            
        </div>
        <?php
        ?>
    </body>
</html>
