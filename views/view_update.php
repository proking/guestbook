<html>
    <head>
        <title>Форма</title>
        <meta charset="utf-8">
    </head>
    <body>

        <form id="text" action=../../guestbook/index.php?update=<?php echo $myrow['id']; ?>	method="post"	name="form1">
            <label>	Ім'я: <?php
echo "<input	type='text'	name='name'	maxlength='16'  
                                 value=" . $myrow['name']
 . "> ";
?>
            </label>
            <label>	Повідомлення	<textarea id='text' name='text'  cols='40'   rows='3'> 
<?php echo $myrow['full_text']; ?>
                </textarea>	
            </label>
            <input	type="submit"	name="sub"	value="Відправити"	>
        </form>
    </body>
</html>