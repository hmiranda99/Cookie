<?php
    header("Location: index.php");

    $color = $_POST['selectColor'];
    
    setcookie('selectedColor', $color);
    //nome, valor (conteúdo do cookie) e tempo de vida
    //tempo = 3min
    //10 dias = time()+(60*60*24*10)
    //60 = 1min
    //*60 = 1h
    //*24 = 1d
    //*10 = 10d
?>