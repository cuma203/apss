<div style="width: 1000px; min-height: 1200px; height:auto; margin:0 auto; margin-bottom: 50px;">

<div id="exTab2" class="container">	
<ul class="nav nav-tabs">
     {foreach from=$types key=klucz item=typ}
        {if $typ.type == 1}
            <li class="active"><a  href="#{$typ.type}" data-toggle="tab">{$typ.name}</a></li>
        {else}
            <li><a href="#{$typ.type}" data-toggle="tab">{$typ.name}</a></li>
        {/if}
    {/foreach}
</ul>

<div class="tab-content">
{foreach from=$types key=klucz item=key}
    <div class="tab-pane active" id="{$key.type}">
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
            {if $data[$key.type]|@count < 1}
                <tr id="sticky-table_{$klucz}" onclick="getData(this)">
                    <td colspan="6" style="text-align:center;">Brak promocji...</td>
                </tr>
            {else} 
                {foreach from=$data[$key.type] key=klucz2 item=key2}   
                    <tr id="sticky-table_{$klucz2}" onclick="getData(this)" >
                        <td>
                                <img src={$key2.url}  width="70px" height="70px"/>
    {*                                <div class="tooltip">
                                <span class="tooltiptext"><img src={$key.url}  width="400px" height="400px"/></span>
                            </div>*}

                        </td>
                        <td style="text-align: center;">
                            {$key2.name}
                        </td>
                        <td>
                            {$key2.description}
                        </td>
                        <td>
                            {$key2.price2}&nbsp;zł
                        </td>
                        <td>
                            {$key2.shop}
                        </td> 
                        <td>
                            {$key2.date}
                        </td> 
                    </tr>
                {/foreach}
            {/if}
        </tbody>
    </table>
    </div>
        
    </div>
{/foreach}
</div>
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</div>