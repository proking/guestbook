<?php

class Model_Registration extends Model {

    protected $_server = "localhost";
    protected $_uName = "Misha";
    protected $_uPassword = "1111";
    protected $_nameDB = "messdb";

    public function __construct() {
        $db = mysql_connect($this->_server, $this->_uName, $this->_uPassword);
        mysql_select_db($this->_nameDB, $db) or die('Conected failed');
    }
/**
 * @param $_POST �������
 * @return  �����������    ������ �� �� ������ ���������
 * 
 */
    public function addUserDB($userName, $userPassword, $reUserPassword, $userEmeil) {
        $userName = trim(strip_tags($userName));
        $userEmeil = trim(strip_tags($userEmeil));
        $userPassword = trim(strip_tags($userPassword));
        $reUserPassword = trim(strip_tags($reUserPassword));
        $time = time();
        if (isset($_POST['sub'])) {
            /** ������� �� ������������ ����� ��������� ������ */
            if (preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $userEmeil)) {
                if (strlen($userName) >= 3 && strlen($userPassword) >= 5) {
                    if ($userPassword == $reUserPassword) {
                        /* ������� �� ��������� ����������� � ����� �� ������ */
                        $result = mysql_query("SELECT id FROM registration WHERE name='$userName'");
                        $myrow = mysql_fetch_array($result);
                        if (!empty($myrow['id'])) {
                            return "�������, ���������� � ����� ������ ��� ����!!!";
                        }
                        /** ���� ������ ����������� � �� */
                        $result2 = mysql_query("INSERT INTO	registration	(
                    name,   emeil,  password, date) 
                    VALUES(
                    '$userName' ,'$userEmeil', '$userPassword',    '$time')
                    ");
                        return "��������� ������� ������!!!";
                    } else {
                        return "��������� ������ �� �������";
                    }
                } else {
                    return "���� �� ������ ����� ��������!!!";
                }
            } else {
                return "Email ������� �� ����!!!";
            }
        }
    }

   /* public function inputUser($userName, $userPassword) {
        new Model_Registration();
        $result = mysql_query("SELECT id FROM registration WHERE name='$userName'");
        $myrow = mysql_fetch_array($result);
        if (!empty($myrow['id'])) {
            return "�������, ���������� � ����� ������ ��� ����!!!";
        }
    }

*/
}