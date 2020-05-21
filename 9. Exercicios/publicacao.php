<?php
interface publicacao{
    function abrir();
    function fechar();
    function folhear($p);
    function avancarPag();
    function voltarPag();
}

?>