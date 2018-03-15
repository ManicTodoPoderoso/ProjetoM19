<?php 
    include("ligaBD.php");
    if(!isset($_POST["ordenar"])) {
    $ordenar="Dat";
    }
    else {
    $ordenar=$_POST["ordenar"];
    }
    if($ordenar=='Date'){
    $ordenar_por="order by Dat desc";
    }

    $lista="select * from comentarios $ordenar_por";
    $faz_lista = mysql_query($lista, $ligaBD);   

    $num_registos=mysql_num_rows($faz_lista); 
    if($num_registos==0)
    {
        echo 'Não existem registos na base de dados.';
     
    }
    else
    {
        echo 'Número total de Comentarios: '.$num_registos;
        for ($i=0;$i<$num_registos;$i++)
        {
            $registos=mysql_fetch_array($faz_lista);      
            echo 'Email: ';
            echo ''.$registos['Email'];
            echo '<br>Data: ';
            echo ''.$registos['Dat'];
            echo '<br>Comentario: ';
            echo ''.$registos['Texto'];
        }
        
        echo '<a href="javascript:history.back(1);">Voltar Atrás</a>';
    }
?>