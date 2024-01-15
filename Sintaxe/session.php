<?php

session_start();//inicia a sessão


$_SESSION["nome"] = "Esdras"; //cria uma sessão 


echo $_SESSION["nome"];//mostra o nome da sessão
 

session_destroy(); //destroi a sessão
