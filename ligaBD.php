<?php
$ligaBD=mysql_connect("localhost","root","root");
if(!$ligaBD)
{
    echo'<br>Erro: Nao foi possivel establecer ligaçao com o MYSQL';exit;

}
else

{
    $escolheBD=mysql_select_db("projeto-m19",$ligaBD);
    if(!$escolheBD)
    {
        echo'<br>Erro: Erro ao conectar a BD';exit; 
    }
}
?>