<?php

/**
 * ModuleName: Menu główne
 * ModuleDesc: Menu głowne serwisu SuperCMS
 */

echo '<div class="content">       
        <h1><a href="/">Design klasy biznes</a></h1>        
        <ul>
            <li><a href="home/index">Home</a></li>
            <li><a href="produkty/index">Usługi i ceny</a></li>
            <li><a href="artykuly/index">Artykuły</a></li>
            <li><a href="kontakt/index">Kontakt</a></li>'.
            model_load('homemodel', 'addLogoutBtn', '').'
        </ul>
    </div>';

?>