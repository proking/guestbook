<?php
        $server = "localhost";
        $nameBD = "Misha";
        $password = "1111";
        $db   =   mysql_connect($server, $nameBD, $password);
        mysql_select_db("messdb", $db);
       // echo $_SERVER['DOCUMENT_ROOT'];
?>