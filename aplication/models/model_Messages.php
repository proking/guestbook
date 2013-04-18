<?php

class Model_Messages extends Model {

    protected $_server = "localhost";
    protected $_uName = "Misha";
    protected $_uPassword = "1111";
    protected $_nameDB = "messdb";

    public function __construct() {
        $db = @mysql_connect($this->_server, $this->_uName, $this->_uPassword);
        @mysql_select_db($this->_nameDB, $db) or die('Conected failed');
    }
/**
 * @param $_POST записис
 * @return  повідомлення    успішну чи не успішну реєстрацію
 * 
 */
    public function writeDB($nameU, $fulltext) {
        $nameU = trim(strip_tags($nameU));
        $fulltext = trim(strip_tags($fulltext));
        $shorttext = mb_substr($fulltext, 0, 6);
        $time = time();

        if (strlen($nameU) >= 3 && strlen($fulltext) >= 5) {
            //mysql_select_db("messdb", $db);
            $result = mysql_query("INSERT INTO	messages	(
                    name,   short_text,  full_text, created_date) 
                    VALUES(
                    '$nameU' ,'$shorttext', '$fulltext',    '$time')
                    ");

            return "Повідомлення успішно відправлено!!!";
        } else {
            return "Повідомлення не відповідає вимогам!!!";
        }
    }

    /**
     * @return массив з даними отриманими  mysql запитом
     */
    public function readDB() {
        new Model_Messages();
        $result = mysql_query("SELECT * FROM messages ");
        while ($data = mysql_fetch_array($result)) {
            $values[] = $data;
        }
        return $values;
    }

    /**
     * @param type int $del № запису в БД
     * * @return  type int  кылькысть задіяних записів
     */
    public function delDB($del) {
        $result = mysql_query("DELETE FROM messages WHERE id =" . (int) $del);
        return mysql_affected_rows();
    }

    /**
     * @param type int $idUpdate № запису в БД
     * @return  массив з даними отриманими  mysql запитом
     */
    public function updateDB($idUpdate) {
        /** Відправляєм запит	mysql	 */
        $result = mysql_query("SELECT * FROM messages WHERE id=" . $idUpdate);
        $myrow = mysql_fetch_array($result);
        /** 	Обробляєм ряд результату запиту і отримуєм	массив	 */
        return $myrow;
    }
/**
 * @param $_POST записис
 * @return  повідомлення    успішну чи не успішну реєстрацію
 * 
 */
    public function updateWriteDB($nameU, $fulltext, $idUpdate) {
        $nameU = trim(strip_tags($nameU));
        $fulltext = trim(strip_tags($fulltext));
        $shorttext = mb_substr($fulltext, 0, 6);
        $time = time();
        if (strlen($nameU) >= 3 && strlen($fulltext) >= 5) {
            $uResult = mysql_query("UPDATE messages	SET
            name='$nameU',full_text  = '$fulltext', short_text = '$shorttext',update_date='$time' 
                WHERE id='$idUpdate'");
            return "Повідомлення успішно редаговано!!!";
        } else {
            return "<p  class='textC'>Повідомлення не редаговано!!!</p>";
        }
    }

}

