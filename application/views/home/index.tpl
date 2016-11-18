<div style="width: 1500px; min-height: 1000px; height:auto; margin:0 auto;">
{*            <div id="okienko" title="okienko modalne" style="martin-top:10px; width:400px; height:400px;"> </div>*}
    <div class="panel panel-default" style="float:left; width: 75%;">
    <div class="panel-heading">STRONA GŁÓWNA</div>
    <div class="panel-body">
            <div class="table-responsive2">
            <table table class="table table-striped table-bordered table-hover" style="font-size: 15px; width: 1093px; font-family: Trebuchet MS, Helvetica, sans-serif;">
                <thead class="thead-inverse" style="background-color: #0bd0ff; color: white; font-family: Comic Sans MS, cursive, sans-serif;">
                    <tr>
                        <th>ZDJĘCIE</th>
                        <th>NAZWA</th>
                        <th>OPIS</th>
                        <th>CENA</th>
                        <th>SKLEP</th>
                        <th>CZAS TRWANIA</th>
                            
                    </tr>
                </thead>
                <tbody style="font-family: Trebuchet MS, Helvetica, sans-serif">
                    {foreach from=$data key=klucz item=key}
                        <tr id="sticky-table_{$klucz}" onclick="getData(this)" >
                            <td>
                                    <img src={$key.url}  width="70px" height="70px"/>
{*                                <div class="tooltip">
                                    <span class="tooltiptext"><img src={$key.url}  width="400px" height="400px"/></span>
                                </div>*}
                                
                            </td>
                            <td style="text-align: center;">
                                {$key.name}
                            </td>
                            <td>
                                {$key.description}
                            </td>
                            <td>
                                {$key.price2}&nbsp;zł
                            </td>
                            <td>
                                {$key.shop}
                            </td>
                            <td>
                                {$key.date}
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
            </div>
                
    </div>
</div>
    <div class="panel panel-default" style="float:right;  width: 20%; margin-right: 30px;">
    <div class="panel-heading">Aktualny czas</div>
    <div class="panel-body timer">
        <span id="timeData">
           
        </span>
    </div>
</div>
            <div style="clear: both;"></div> 
</div>