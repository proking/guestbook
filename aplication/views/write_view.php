
        <?php echo $data; ?>
                <div style="margin-left: 30px;">
            <form   id="text" action="#"	method="post"	name="form">
                <fieldset>
                    <center>
                        <legend>Повідомлення</legend>
                        <label>	Ім'я:	</label><input  class="input-large" required	type="text" placeholder="Введіть ім'я…"	name="name"	maxlength="16">
                        <label>	Повідомлення    </label><label>	<textarea   id="fulltext" 
                                                                            name="fulltext" required rows="10"></textarea>	</label>

                        <input  class="btn btn-primary" style="margin-left: 110px;"	type="submit"	name="sub"	value="Відправити">
                    </center>
                </fieldset>        
            </form>
        </div>
   