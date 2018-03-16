<?php 

    $ligaBD = mysql_connect('localhost', 'root', 'root');
        if(!$ligaBD)
            {
            die("Conexão à base de dados falhou." . mysql_error($ligaBD));
            }
        else
        {
            $escolheBD = mysql_select_db('projeto_m19', $ligaBD );
                if (!$escolheBD)
                {
                    die("Escolha da base de dados falhou." . mysql_error($ligaBD));
                }
        }


?>