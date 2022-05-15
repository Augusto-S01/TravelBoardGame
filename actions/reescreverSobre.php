<?php

    $novoTexto = $_POST['sobre'];
    $arquivo = fopen("../config/sobre.txt","w");
    fwrite($arquivo, $novoTexto);          
    fclose($arquivo);                
    echo "<script>alert('Texto salvo com sucesso');
    window.location.href = '../index.php'</script>";
?>