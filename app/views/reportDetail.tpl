{extends file="main.tpl"}

<body class="is-preload">
{block name=login} {/block}

{block name=bot}



    <div class="table-wrapper">
        <table class="alt">
            <thead>
            <tr>
                <th style="text-align:center">Numer Zgłoszenia</th>
                <th style="text-align:center">imie</th>
                <th style="text-align:center">nazwisko</th>
                <th style="text-align:center">Telefon</th>
                <th style="text-align:center">Model</th>
                <th style="text-align:center">opis</th>
            </tr>
            <br>


            </tr>
            </thead>
            <tbody>
            {foreach $reports as $p}
                {strip}
                    <tr>
                        <td style="text-align:center">{$p["id_report"]}</td>
                        <td style="text-align:center">{$p["report_name"]}</td>
                        <td style="text-align:center">{$p["report_surname"]}</td>
                        <td style="text-align:center">{$p["phone"]}</td>
                        <td style="text-align:center">{$p["model"]}</td>
                        <td style="text-align:center">{$p["description"]}</td>
                    </tr>
                {/strip}
            {/foreach}
            </tbody>
        </table>
  <br>
        <br>
        <table class="alt">
            <thead>
            <tr>
                <th style="text-align:center">Komentarz</th>
                <th style="text-align:center">Cena</th>
                <th style="text-align:center">Data zgłoszenia</th>
                <th style="text-align:center">Data Aktualizacji</th>
                <th style="text-align:center">Typ naprawy</th>
                <th style="text-align:center">Rodzaj sprzętu</th>
                <th style="text-align:center">Status</th>
            </tr>
            </thead>
            <tbody>
            {foreach $reports as $p}
                {strip}
                    <tr>
                        <td style="text-align:center">{$p["comment"]}</td>
                        <td style="text-align:center">{$p["cost"]}</td>
                        <td style="text-align:center">{$p["date_of_report"]}</td>
                        <td style="text-align:center">{$p["date_of_repair"]}</td>
                        <td style="text-align:center">{$p["repair_name"]}</td>
                        <td style="text-align:center">{$p["device_name"]}</td>
                        <td style="text-align:center">{$p["status_name"]}</td>
                    </tr>
                {/strip}
            {/foreach}
            </tbody>
        </table>
        <td>
            <a class="small button" href="{$conf->action_root}reportList">Powrót</a>
        </td>
    </div>
{/block}
