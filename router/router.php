 <?php

//echo spl_autoload_extensions();
 



if ($_POST['message'] == 'Відправити повідомлення') {
    
}
elseif ($_POST['output'] == 'Переглянути повідомлення') {
     
    
}
else {
    include '/views/view_main.php';
}
if ($_GET['id'] == 1) {
    
   
   
}
if ((int) $_GET['del']) {
 
}

if (strlen($_POST['name']) > 3 && strlen($_POST['text']) > 0) {
 
}
if ((int) $_GET['update']) {

 
    $myrow = $obj->update_db($_GET['update']);
}
    if (strlen($_POST['name']) > 3 && strlen($_POST['text']) > 0) {
     
    
}
if ((int) $_GET['fullinf']) {
   
   
}