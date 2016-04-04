<?php
include ("conexao.php");
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Listar de News</title>
         <style type="text/css">
            @import url("css/main.css");
        </style>
        
    </head>
    <body>
        <div id="cadastro">
        <fieldset>
            <legend>Listar News</legend>
            <ul>
                <?php
                    $SQL = "SELECT * FROM news";
                    $query = mysql_query($SQL, $conn);
                    while ($exibir = mysql_fetch_array($query)){
                ?>
                <li><?php echo $exibir["titulo"]?> </li>
                <li><?php echo $exibir["fonte"]?> </li>
                <li><?php echo $exibir["autor"]?> </li>
                <li><?php echo $exibir["conteudo"]?> </li>
                <li><?php echo $exibir["data"]?> </li>
                <?php 
                   }
                ?>
            </ul>
        </fieldset>
            
        </div>
    </body>
</html>

