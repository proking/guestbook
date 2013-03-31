<!DOCTYPE html>
<html>
    <head>
        <title>     </title>
        <meta charset="utf-8">
           </head>    
    <body>
        
        <table border='0'>
            <tr>
                <th width='10'>ID</th>
                <th width='150'>Ім'я</th>
                <th width='350'>Короткий текст</th>
                <th width='150'>Час створення</th>
                <th width='180'>Дії</th>
            </tr>
        </table>

        <?php while ( $myrow  =   mysql_fetch_array($a)){ ?>
            <table  border="1">
                <tr></tr>
                <td width='4%'>
                    <a href=index.php?fullinf=<?php echo $myrow['id'];?>>  <?php echo  $myrow['id']; ?></a>
            </td>
            <td width='15%'>
                <?php echo  $myrow['name']; ?>
            </td>
            <td width='41%'>
                <?php echo  $myrow['short_text']; ?>
            </td>
            <td width='15%'>
                <?php echo date('d/m/o/H:i:s ', $myrow['created_date']); ?>
            </td>
            <td width='13%'>
                <a href=index.php?update=<?php echo $myrow['id']; ?> >
                    Редагувати</a></td>
                        <td width='12%'>
                    <a href=index.php?id=1&del=<?php echo $myrow['id']; ?>>
                    Видалити</a>
            </td>
        </table>
    <?php }  ?>

</body>
</html>