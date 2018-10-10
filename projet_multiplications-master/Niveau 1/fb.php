<?php

function tableMultiplication($nombre)
    {
        Echo 'Table de multiplication de '.$nombre."<br>";

        for ($i = 1; $i <= 10; $i++)
          echo $nombre.'x '.$i.' = '.$i*$nombre."<br>";
   
        }
        $table=$_POST["table"];
tableMultiplication($table)

 
 

?>