<?php

class Guest_Book_Model {
   

    /**
     * @return резльтат запиту
     */
    public function read_db() {

        include '../guestbook/config.php';
        $result = mysql_query("SELECT * FROM messages ", $db);

        //$myrow = mysql_fetch_array($result);
        mysql_close($db);
        return $result;
    }

    /**
     * @param type int $id № повідомлення 
     * @return type массив з БД під № $id
     */
    public function read_full_db($id) {
        include '../guestbook/config.php';
        mysql_select_db("messdb", $db);
        $result = mysql_query("SELECT * FROM messages	WHERE id =" . $id, $db);
        /** 	Обробляєм ряд результату запиту і отримуєм	массив	 */
        //$myrow = mysql_fetch_array($result);
        $myrow = mysql_fetch_array($result);
        mysql_close($db);
        return $myrow;
    }

    /**
     * @param type $nameU  ім'я користувача якого заносить в БД
     * @param type $fulltext  повідомлення
     */
    public function write_db($nameU, $fulltext) {
        trim(strip_tags($nameU));
        trim(strip_tags($fulltext));
        $shorttext = mb_substr($fulltext, 0, 6);
        $time = time();
        include '../guestbook/config.php';
        mysql_select_db("messdb", $db);
        $result = mysql_query("INSERT INTO	messages	(
                    name,   short_text,  full_text, created_date) 
                    VALUES(
                    '$nameU' ,'$shorttext', '$fulltext',    '$time')
                    ");
        mysql_close($db);
    }

    /**
     * 
     * @param type $idUpdate   приймає № повідомлення 
     * @return type массив з бд під отриманим номером
     */
    public function update_db($idUpdate) {
        include '../guestbook/config.php';
        /** 	Відправляєм запит	mysql	 */
        $result = mysql_query("SELECT * FROM messages WHERE id=" . $idUpdate, $db);
        $myrow = mysql_fetch_array($result);
        /** 	Обробляєм ряд результату запиту і отримуєм	массив	 */
        mysql_close($db);
        return $myrow;
    }

    /**
     * 
     * @param type $name редаговане ім'я 
     * @param type $fulltext редаговане повідомлення
     * @param type $idUpdate № запису в БД
     */
    public function update_write_db($name, $fulltext, $idUpdate) {
        include '../guestbook/config.php';
        mysql_select_db("messdb", $db);
        trim(strip_tags($name));
        trim(strip_tags($fulltext));
       echo $shorttext = mb_substr($fulltext, 0, 6);
        $time = time();
        $uResult = mysql_query("UPDATE messages	SET
            name='$name',full_text  = '$fulltext', short_text = '$shorttext',update_date='$time' 
                WHERE id='$idUpdate'");
        mysql_close($db);
        
    }

    /**
     * 
     * @param type $del № запису в БД
     * @return type int кількість задіяних записів 
     */
    public function delete_db($del) {
        include '../guestbook/config.php';
        $result = mysql_query("
            DELETE FROM messages WHERE id =" . (int) $del);
        mysql_close($db);
        return mysql_affected_rows();
    }

}
//$obj = new Guest_Book_Model();



?>