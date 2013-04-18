<?php


class ConnectDB extends Exception{
    
    
    public function __construct(){
        throw new ConnectDB(); 
           try {      
          $db = mysql_connect("localhost", "Misha", "111");
       //  mysql_select_db("messdb", $db);  
            //  throw new Exception();
        }
 catch (ConnectDB $e){
            echo 'Connection failed';
 }
    
         
}}
$obj = new ConnectDB();
