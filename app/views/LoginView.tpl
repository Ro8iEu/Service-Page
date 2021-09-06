{extends file="main.tpl"}

{block name=top}
<div class="row gtr-uniform">
            <form action="{$conf->action_root}login" method="post">
                <legend><b>Logowanie do systemu</b></legend>


                    <div class="col-6 col-12-xsmall">
                        <input id="id_login" type="text" name="login" placeholder="login" value="{$form->login}"/>
                    </div>

                    <div class="col-6 col-12-xsmall">
                        <input id="id_pass" type="password" placeholder="hasło" name="pass"/><br/>
                    </div>

                    <input type="submit" value="zaloguj" class="button primary small"/>


            </form>

</div>
    <a class="button small" href="{$conf->action_url}register">Zarejestruj sie</a>
{/block}
