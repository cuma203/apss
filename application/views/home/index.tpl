<div id="okienko" title="Edycja danych" style="margin-top:10px; width:600px; height:400px;display: none;"></div>
    <div id="alert">
        <div class="alert alert-success">
  <strong>Success!</strong> Edycja wpisu zakończona powodzeniem</div>
    </div>
<div style="width: 1500px; min-height: 1000px; height:auto; margin:0 auto;padding-bottom: 100px">

    <div class="panel panel-default" style="float:left; width: 75%;">
    <div class="panel-heading testy">STRONA GŁÓWNA</div>
    <div class="panel-body">
        <div class="table-responsive2" style="position:relative;">
                <div class="loading-overlay"></div>
            <table class="table table-striped table-bordered table-hover" style="font-size: 12px; width: 1093px; font-family: Comfortaa;">
                <thead class="thead-inverse" style="background-color: #0bd0ff; color: white; font-family: Comfortaa; font-size: 13px;">
                    <tr id="header-table">
                        <th>ID</th>
                        <th>Nazwa</th>
                        <th>Nazwisko</th>
                        <th>Imię</th>
                        <th>Telefon</th>
                        <th>Adres</th>
                        <th>Miasto</th>
                        <th>Stan</th>
                        <th>Kod pocztowy</th>
                        <th>Kraj</th>
                            
                    </tr>
                    <tr style="background-color:#b7b7b7;">
                        <td><div class="search">
  <span class="fa fa-search"></span>
  <input placeholder="Search term">
</div></td>
                        <td><input type="text" class="search-query form-control"  style="height:20px; margin:0px;" placeholder="szukaj" /></td>
                        <td><input type="text" class="search-query form-control"  style="height:20px; margin:0px;" placeholder="szukaj" /></td>
                        <td><input type="text" class="search-query form-control"  style="height:20px; margin:0px;" placeholder="szukaj" /></td>
                        <td><input type="text" class="search-query form-control"  style="height:20px; margin:0px;" placeholder="szukaj" /></td>
                        <td><input type="text" class="search-query form-control"  style="height:20px; margin:0px;" placeholder="szukaj" /></td>
                        <td><input type="text" class="search-query form-control"  style="height:20px; margin:0px;" placeholder="szukaj" /></td>
                        <td><input type="text" class="search-query form-control"  style="height:20px; margin:0px;" placeholder="szukaj" /></td>
                        <td><input type="text" class="search-query form-control"  style="height:20px; margin:0px;" placeholder="szukaj" /></td>
                        <td><input type="text" class="search-query form-control"  style="height:20px; margin:0px;" placeholder="szukaj" /></td>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$data key=klucz item=key}
                        <tr id="sticky_table_{$key.customerNumber}" onclick="getData(this);" >
                            <td style="text-align: center;" name="customerNumber">
                                {$key.customerNumber}
                            </td>
                            <td style="text-align: center;" name="customerName">
                                {$key.customerName}
                            </td>
                            <td name="contactLastName">
                                {$key.contactLastName}
                            </td>
                            <td name="contactFirstName">
                                {$key.contactFirstName}
                            </td>
                            <td name="phone">
                                {$key.phone}
                            </td>
                            <td name="addressLine1">
                                {$key.addressLine1}
                            </td>
                            <td name="city">
                                {$key.city}
                            </td>
                            <td name="state">
                                {$key.state}
                            </td>
                            <td name="postalCode">
                                {$key.postalCode}
                            </td>
                            <td name="country">
                                {$key.country}
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
                <nav aria-label="Page navigation" style="float:right;">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                    {for $page = 1 to $count}
                        <li class="page-item"><a class="page-link" href="javascript:void(0);" onclick="nextPage({$page});false;">{$page}</a></li>
                    {/for}
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
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