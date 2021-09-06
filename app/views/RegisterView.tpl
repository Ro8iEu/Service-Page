{extends file="main.tpl"}

{block name=register}
    <div class="bottom-margin">
        <form action="{$conf->action_root}newUser" method="post">
            <fieldset>

                <label for="formGroupExampleInput" class="form-label">Tworzenie nowego użytkownika</label>

                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">

                        <input id="name" type="text" placeholder="imię" name="name">
                    </div>
                    <div class="col-6 col-12-xsmall">

                        <input id="surname" type="text" placeholder="nazwisko" name="surname" ">
                    </div>
                    <div class="col-6 col-12-xsmall">

                        <input id="login" type="text" placeholder="login" name="login" ">
                    </div>
                    <div class="col-6 col-12-xsmall">

                        <input id="inputPassword5" type="password" placeholder="hasło" name="password">
                    </div>


                </div>


                <div class="pure-controls">
                    <input type="submit" class="small button" value="Wyślij"/>
                    <br>
                    <br>
                    <a class="small button" href="{$conf->action_root}login">Powrót</a>
                </div>
    </div>
    </fieldset>

    </form>
    </div>

{/block}

