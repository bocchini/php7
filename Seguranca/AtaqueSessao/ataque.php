<?php

//Exemplo de ataque de sessão

session_start();

//Depois de verificar Login e senha reinicie o ID da seção

session_destroy();

session_start();

session_regenerate_id();

echo sessio_id();