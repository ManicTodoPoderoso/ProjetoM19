<?php 

    include("ligaBD.php");
    $lista="select * from comentarios";
    $faz_lista = mysql_query($lista, $ligaBD);   

    $num_registos=mysql_num_rows($faz_lista); 
    if($num_registos==0)
    {
        echo 'Não existem registos na base de dados.';
     
    }
    else
    {
        echo 'Número total de comentários encontrados: '.$num_registos;
        echo '<style>
                table, tr, td{
                    border: 1px solid black;
                }
              </style>';

        echo '<table>';
        echo '<tr style="text-align: center;">';
        echo '<td>Email</td>';
        echo '<td>Data</td>';
        echo '<td>Comentarios</td>';
        echo '</tr>';

        for ($i=0;$i<$num_registos;$i++)
        {
            $registos=mysql_fetch_array($faz_lista);
            echo '<tr>';
            echo '<td style="width:100px;">'.$registos['Email'].'</td>';
            echo '<td style="width:100px;">'.$registos['Dat'].'</td>';
            echo '<td style="width:100px;">'.$registos['Texto'].'</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo "<a href='comments.html'>Voltar</a>";
        echo '<html>
              <head>
              <body>
              </body>
              </head>
              </html>';
    }
?>