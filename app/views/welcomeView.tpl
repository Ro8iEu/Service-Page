{extends file="main.tpl"}
{block name=login} {if count($conf->roles)>0}
    <a href="{$conf->action_root}logout" class="button small">Wyloguj</a>
{else}
    <a href="{$conf->action_root}loginShow" class="button small">Zaloguj</a>
{/if}{/block}
{block name=welcome}
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">

            {foreach $id as $p}
                {strip}
                    <h1>Witaj {$p['name']} </h1>
                    <br>
                    <br>
                    <h4>Wybierz co chcesz zrobić</h4>
                    <br>
                    <br>
                    <br>
                    <tr>


                        <td>
                            <ul class="actions">
                                <li><a class="button primary name="sf_id_user" href="{$conf->action_url}reportList">Moje Zlecenia</a></li>

                                <li><a class="button" href="{$conf->action_url}reportNew">Nowe zlecenie</a></li>
                                <br>
                            </ul>
                        </td>
                    </tr>
                {/strip}
            {/foreach}

        </div>
    </section>
{/block}
