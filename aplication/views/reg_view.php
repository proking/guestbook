<html>
    <head>
        <title></title>
    </head>
    <body>
        
        <?php if($data) :?>
        <?php if($data == '��������� ������� ������!!!') :?>
        
        <div class="alert alert-success" style="margin:10px;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>����� :) <?php echo $data ; ?>!!!</strong>
        </div>
       <?php else:?>
          <div class="alert alert-warning" style="margin:10px;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>������� :( <?php echo $data ; ?>!!!</strong>
        </div>
        <?php endif;?>
        
        <?php endif;?>
         
        <div >
            <form   action="#"   method="post">
                <center>
                    <hr style="margin-bottom: -10px;">
                    <legend class="alert" style=" background-color: lightblue;">���������</legend>
                    <label> ����: </label> <input  type="text" maxlength="25" size="30" name="userName"> 
                    <label> �����: </label> <input type="text" maxlength="50"  size="30"   name="userEmeil" > 
                    <label> ������: </label> <input type="password" maxlength="25" size="30" name="userPassword">    
                    <label> �������� ������: </label> <input type="password" maxlength="25" size="30" name="reUserPassword">
                    <label> </label>
                    <input  class="btn btn-primary" style="margin-left: 110px;"	type="submit"	name="sub"	value="³��������">
                </center>
            </form>
        </div>
    </body>
</html>

