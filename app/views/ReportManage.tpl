{extends file="main.tpl"}
{block name=login} {if count($conf->roles)>0}
    <a href="{$conf->action_root}logout" class="button small">Wyloguj</a>
{else}
    <a href="{$conf->action_root}loginShow" class="button small">Zaloguj</a>
{/if}{/block}
{block name=top}
    <div class="bottom-margin">
        <form action="{$conf->action_root}newEdit" method="post">
            <fieldset>
              <legend>zlecenie numer: <b>{$p}</b></legend>
                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <input id="comment" type="text" placeholder="komentarz" name="comment">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="cost" type="text" placeholder="Cena" name="cost">
                    </div>


                    <div class="col-12">
                        <select name="id_status" id="id_status">
                            <option value="">Status zgłoszenia</option>
                            <option value="3">Przyjęty</option>
                            <option value="4">Diagnozowany</option>
                            <option value="5">Naprawiony</option>
                            <option value="6">Wysłany</option>
                            <option value="7">Zakończony</option>
                        </select>
                    </div>


                    <div class="pure-controls">
                        <input type="submit" class="small button primary" value="Wyślij"/>
                        <br>
                        <br>
                        <a class="small button" href="{$conf->action_root}reportList">Powrót</a>
                    </div>
                </div>
            </fieldset>
            <input type="hidden" name="id" value="{$form->id}">

        </form>
    </div>
{/block}

