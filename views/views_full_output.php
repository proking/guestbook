<!DOCTYPE html>
<html>
    <head>
        <title>     </title>
        <meta charset="utf-8">
    </head>    
    <body>
        <?php
        echo	"ID: ".$myrow['id'];
	echo	"<p>Ім'я: ".$myrow['name']."</p>";
	echo	"<p>Короткий текс: ".$myrow['short_text']."</p>";
	echo	"<p>Повний текст: ".$myrow['full_text']."</p>";
	/**	Перетворюєм юнікс час  	*/
	echo	"<p>Час створення: ".date('d/m/o/H:i:s ',$myrow['created_date'])."</p>";
	echo	"<p>Час редагування: ".date('d/m/o/H:i:s ',$myrow['update_date'])."</p>"
        ?>
</body>
</html>