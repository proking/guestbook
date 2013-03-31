<html>
    <head>
        <title> </title>
        <link href="css/bootstrap.css" rel="stylesheet"  type="text/css" >
        <link href="css/bootstrap.min.css" rel="stylesheet"  type="text/css" >
    </head>
    <body>

       

<?php
include '/model/model.php';
$obj = new Guest_Book_Model();

if ($_POST['message'] == 'Відправити повідомлення') {
    include 'views/view_input.php';
}
elseif ($_POST['output'] == 'Переглянути повідомлення') {
     $a = $obj->read_db();
    include 'views/view_output.php';
}
else {
    include '/views/view_main.php';
}
/*if ($_GET['id'] == 1) {
    $a = $obj->read_db();
    include '/views/view_output.php';*/
    /*
     * якщо умова виконаєть, тоді виведуться дані з БД методом read_db()
     */
//}
if ((int) $_GET['del']) {
    $b = $obj->delete_db($_GET['del']);
    /**
     *  якщо умова виконається, буде видалений запис з БД під № який
     * отримується методом $_GET
     */
}

if (strlen($_POST['name']) > 3 && strlen($_POST['text']) > 0) {
    $obj->write_db($_POST['name'], $_POST['text']);
    /**
     *  умова перевряє кількість елементів у вхідних даних, які надійшли 
     * через метод $_POST, якщо умова вірна тоді виконаєть запис в БД
     */
}
if ((int) $_GET['update']) {

    $obj = new Guest_Book_Model();
    $myrow = $obj->update_db($_GET['update']);
    include '/views/view_update.php';
    if (strlen($_POST['name']) > 3 && strlen($_POST['text']) > 0) {
        $obj->update_write_db($_POST['name'], $_POST['text'], $_GET['update']);
        /**
         *  умова перевряє кількість елементів у вхідних даних, які надійшли
         * через метод $_POST, якщо умова вірна виконається заміна даних в БД
         */
    }
    /**
     * умова перевіряє чи тип вхідного елемента є цілим 
     */
}
if ((int) $_GET['fullinf']) {
    $obj = new Guest_Book_Model();
    $myrow = $obj->read_full_db($_GET['fullinf']);
    include '/views/views_full_output.php';
    /**
     * умова перевіряє чи тип вхідного елемента є цілим, якщо вірно виведуться
     * дані з БД
     */
}
?>
</body>
</html>