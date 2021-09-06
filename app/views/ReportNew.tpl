{extends file="main.tpl"}
{block name=login} {if count($conf->roles)>0}
    <a href="{$conf->action_root}logout" class="button small">Wyloguj</a>
{else}
    <a href="{$conf->action_root}loginShow" class="button small">Zaloguj</a>
{/if}{/block}
{block name=top}

    <div class="bottom-margin">
        <form action="{$conf->action_root}newReport" method="post">
            <fieldset>
                <legend>Tworzenie nowego zlecenia</legend>
                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">

                        <input id="name" type="text" placeholder="imię" name="name" value="{$form->name}">
                    </div>
                    <div class="col-6 col-12-xsmall">

                        <input id="surname" type="text" placeholder="nazwisko" name="surname" value="{$form->surname}">
                    </div>
                    <div class="col-6 col-12-xsmall">

                        <input id="phone" type="text" placeholder="numer telefonu" name="phone" value="{$form->phone}">
                    </div>
                    <div class="col-6 col-12-xsmall">

                        <input id="description" type="text" placeholder="Krótki Opis problemu" name="description"
                               value="{$form->description}">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="model" type="text" placeholder="model" name="model" value="{$form->model}">
                    </div>


                    <div class="col-12">
                        <select name="id_repair" id="id_repair">
                            <option value="">Rodzaj naprawy</option>
                            <option value="3">Diagnostyka</option>
                            <option value="4">Czyszczenie</option>
                            <option value="5">Naprawa</option>
                            <option value="6">Reklamacja</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <select name="id_device" id="id_device">
                            <option value="">Rodzaj sprzętu</option>
                            <option value="3">Karta Graficzna</option>
                            <option value="4">Monitor</option>
                            <option value="5">Procesor</option>
                            <option value="6">Zasilacz</option>
                            <option value="7">Laptop</option>
                            <option value="8">Komputer Stacjonarny</option>
                            <option value="9">Telefon</option>
                            <option value="10">Telewizor</option>
                        </select>
                    </div>

                </div>

<br>

                    <input type="submit" class="small button primary" value="Wyślij"/>

    </div>
    </fieldset>
    <input type="hidden" name="id" value="{$form->id}">
    </form>

    </div>

{/block}

