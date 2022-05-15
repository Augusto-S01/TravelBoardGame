<?php

    $arquivoSobre = fopen("config/sobre.txt", "r");
    $texto = "";

    while(!feof($arquivoSobre)){
        $texto .= fgets($arquivoSobre);
    }

    
    fclose($arquivoSobre);
    if(isset($_SESSION['usuario'])){
        if($_SESSION['usuario'] == "admin"){
    
            echo ('<form action="actions/reescreverSobre.php" method="post"> <textarea resize="none" class="sobre__textarea" name="sobre" id="sobre">'.$texto.'</textarea><input class="sobre__botao" type="submit" value="salvar"></form>');
        } else{

            echo ('<textarea readonly resize="none" class="sobre__textarea" name="sobre" id="sobre"  value="">'.$texto.'</textarea>');
        } 
    }else{
        echo ('<textarea readonly  class="sobre__textarea" name="sobre" id="sobre" value="">'.$texto.'</textarea>');
    }
    ?>
    
