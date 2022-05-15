<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/jogo.css">
    <title>Jogo</title>
</head>
<body>




<div class="jogo">
    <ul class="jogo-casas-container">
    
        <?php
            $casas = array(79);
            for($i = 0; $i < 79; $i++){

                
                $casas[$i] = "<li id='casa".($i+1)."' class='casa'><p> ".($i+1)."</p></li>";
                echo $casas[$i];
            }
        ?>
    </ul>
</div>




</body>
</html>