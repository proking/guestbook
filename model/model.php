<?php

class GuestBookModel {
    
    public function __constuct(){
          $db   =   mysql_connect('localhost', 'Misha', '1111');
       
         
    }

    /**
     * @return резльтат запиту
     */
    public function readDB() {
        //include '../config.php';;
        $result = mysql_query("SELECT * FROM messages ", $db);
        //$myrow = mysql_fetch_array($result);
        
        return $result;
    }

    /**
     * @param type int $id № повідомлення 
     * @return type массив з БД під № $id
     */
    public function readFullDB($id) {
        //include '../config.php';
        mysql_select_db("messdb", $db);
        $result = mysql_query("SELECT * FROM messages	WHERE id =" . $id, $db);
        /** 	Обробляєм ряд результату запиту і отримуєм	массив	 */
        //$myrow = mysql_fetch_array($result);
        $myrow = mysql_fetch_array($result);
        return $myrow;
    }

    /**
     * @param type $nameU  ім'я користувача якого заносить в БД
     * @param type $fulltext  повідомлення
     */
    public function writeDB($nameU, $fulltext) {
        trim(strip_tags($nameU));
        trim(strip_tags($fulltext));
        $shorttext = mb_substr($fulltext, 0, 6);
        $time = time();
       //include '../config.php';
        mysql_select_db("messdb", $db);
        $result = mysql_query("INSERT INTO	messages	(
                    name,   short_text,  full_text, created_date) 
                    VALUES(
                    '$nameU' ,'$shorttext', '$fulltext',    '$time')
                    ");
    }

    /**
     * 
     * @param type $idUpdate   приймає № повідомлення 
     * @return type массив з бд під отриманим номером
     */
    public function updateDB($idUpdate) {
        //include '../config.php';
        /** 	Відправляєм запит	mysql	 */
        $result = mysql_query("SELECT * FROM messages WHERE id=" . $idUpdate, $db);
        $myrow = mysql_fetch_array($result);
        /** 	Обробляєм ряд результату запиту і отримуєм	массив	 */
        return $myrow;
    }

    /**
     * 
     * @param type $name редаговане ім'я 
     * @param type $fulltext редаговане повідомлення
     * @param type $idUpdate № запису в БД
     */
    public function updateWriteDB($name, $fulltext, $idUpdate) {
        //include '../config.php';
        mysql_select_db("messdb", $db);
        trim(strip_tags($name));
        trim(strip_tags($fulltext));
        echo $shorttext = mb_substr($fulltext, 0, 6);
        $time = time();
        $uResult = mysql_query("UPDATE messages	SET
            name='$name',full_text  = '$fulltext', short_text = '$shorttext',update_date='$time' 
                WHERE id='$idUpdate'");
    }

    /**
     * 
     * @param type $del № запису в БД
     * @return type int кількість задіяних записів 
     */
    public function deleteDB($del) {
        //include '../config.php';
        $result = mysql_query("
            DELETE FROM messages WHERE id =" . (int) $del);

        return mysql_affected_rows();
    }

}

//$obj = new Guest_Book_Model();




