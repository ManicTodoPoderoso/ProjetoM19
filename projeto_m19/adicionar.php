<?php

    $email=$_POST['email'];
    $data=$_POST['data'];
    $texto=$_POST['message'];
    include("ligaBD.php");
    $faz_insere_comentario = mysql_query("insert into comentarios(Email, Dat, Texto) values( ' ".$email. " ' ,' ".$data." ',' ".$texto." ')",$ligaBD);
    echo "<p> !Comentário registado com sucesso!";
    echo "<a href='comments.html'></a>";


?>