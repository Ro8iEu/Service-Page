{extends file="main.tpl"}
{block name=login} {if count($conf->roles)>0}
    <a href="{$conf->action_root}logout" class="button small">Wyloguj</a>
{else}
    <a href="{$conf->action_root}loginShow" class="button small">Zaloguj</a>
{/if}{/block}
{block name=search}
    <a class="button small"
    "  href="{$conf->action_url}reportNew">Nowe zlecenie</a>
    <div>
        <center><b>Wyszukaj zlecenie</b></center>
    </div>
    <div>
        <br>
        <form action="{$conf->action_url}reportList">

            <fieldset>
                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <input type="text" placeholder="numer zgłoszenia" name="sf_id_report"/> <br>
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <select name="sf_id_status" id="id_status">
                            <option value="">Status zgłoszenia</option>
                            <option value="3">Przyjęty</option>
                            <option value="4">Diagnozowany</option>
                            <option value="5">Naprawiony</option>
                            <option value="6">Wysłany</option>
                            <option value="7">Zakończony</option>
                        </select>

                    </div>

            </fieldset>
            <center>
                <div>
                    <button type="submit" class="primary small" a href="#one">Filtruj</button>
                </div>
            </center>
        </form>
    </div>
{/block}

{block name=bottom}
    <br>
    <br>
    <br>
    <div class="table-wrapper">
        <table>
            <thead>
            <tr>
                <th style="text-align:center">Numer Zgłoszenia</th>
                <th style="text-align:center">Model</th>
                <th style="text-align:center">Data zgłoszenia</th>
                <th style="text-align:center">Status</th>

            </tr>
            </thead>
            <tbody>
            {foreach $reports as $p}
                {strip}
                    <tr>
                        <td style="text-align:center">{$p["id_report"]}</td>
                        <td style="text-align:center">{$p["model"]}</td>
                        <td style="text-align:center">{$p["date_of_report"]}</td>
                        <td style="text-align:center">{$p["name"]}</td>



                        <td style="text-align:center">
                            <a class="button primary small" href="{$conf->action_url}reportDetail?report={$p['id_report']}">Szczegóły</a>
                            <a class="button small" href="{$conf->action_url}reportEdit?report={$p['id_report']}">Edytuj</a>

                            <a class="button small"
                               onclick="confirmLink('{$conf->action_url}reportDelete/{$p['id_report']}','Czy na pewno usunąć zlecenie ?')">Usuń</a>

                        </td>

                    </tr>
                {/strip}
            {/foreach}
            </tbody>
        </table>
    </div>
    <div>
        {if $p != 1}
        <a class="button small" href="{$conf->action_url}reportList?page=1"><<</a>
    {/if}
        {if $previous_page > 0}
            <a class="button small" href="{$conf->action_url}reportList?page={$p-1}"><</a>
        {/if}
        <a class="button small" href="{$conf->action_url}reportList?page={$p}">{$p}</a>
        {if $isNextPage}
            <a class="button small" href="{$conf->action_url}reportList?page={$p+1}">{$p+1}</a>
            <a class="button small" href="{$conf->action_url}reportList?page={$next_page}">></a>

        {/if}
    </div>
{/block}
