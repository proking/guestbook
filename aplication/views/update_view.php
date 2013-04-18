      <?php print_r($data); ?>
        <div style="margin-left: 30px;">
            <form   id="text" action=""	method="post"	name="form">
                <fieldset>
                    <center>
                        <legend>Редагування Повідомлення</legend>
                        <label>	Ім'я:	</label>
                            <?php echo "
                        <input  class='input-large' required	type='text' name='name'	maxlength='16' value=" . $data['name'] . ">"; ?>
                        <label>	Повідомлення    </label>
                        <label>
                            <textarea 	id="fulltext" name="fulltext" required rows="10">
                                <?php echo $data['full_text']; ?>
                            </textarea>
                        </label>
                        <input  class="btn btn-primary" style="margin-left: 110px;"	type="submit"	name="sub"	value="Відправити">
                    </center>
                </fieldset>        
            </form>
        </div>
    