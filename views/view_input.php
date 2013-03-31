<html>
    <head>
        <title>Форма</title>
        <meta charset="utf-8">
        <link href="../css/bootstrap.css" rel="stylesheet"  type="text/css" >
        <link href="../css/bootstrap.min.css" rel="stylesheet"  type="text/css" >
    </head>
    <body>
        <div style="margin-left: 30px;">
            <form   id="text" action="/guestbook/index.php"	method="post"	name="form">
                <fieldset>
                    <legend>Повідомлення</legend>
                    <label>	Ім'я:	</label><input  class="input-large"	type="text" placeholder="Введіть ім'я…"	name="name"	maxlength="16">
                    <label>	Повідомлення    </label><label>	<textarea	id="fulltext" 
                                                                      name="text"  rows="10">	</textarea>	</label>

                    <input  class="btn btn-primary" style="margin-left: 110px;"	type="submit"	name="sub"	value="Відправити"	>
                </fieldset>        
            </form>
        </div>
    </body>
</html>