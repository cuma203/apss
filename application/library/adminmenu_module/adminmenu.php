<?php

$config = registry::register('config');
if($_SESSION[$config->default_session_admin_priv_var] == 'admin')
{
	echo '<ul>
            <li><a class="_ico icon1" href="administrator/dashboard">Home<span>Najważniejsze informacje</span></a></li>
            <li><a class="_ico icon2" href="administrator/management">Języki<span>Zarządzanie tłumaczeniami</span></a></li>
			<li><a class="_ico icon4" href="administrator/articles">Artykuły<span>Twórz i zmieniaj artykuły</span></a></li>
            <li><a class="_ico icon3" href="administrator/my_pages">Moje strony<span>Modyfikuj swoje strony</span></a></li>
            <li><a class="_ico icon4" href="administrator/my_modules">Moduły<span>Twórz nowe moduły</span></a></li>
            <li><a class="_ico icon5" href="administrator/wylogowanie">Wylogowanie<span>Zakończ pracę z serwisem</span></a></li>
        </ul>';
}
else
{
	echo '<ul>
            <li><a class="_ico icon1" href="administrator/dashboard">Home<span>Najważniejsze informacje</span></a></li>
            <li><a class="_ico icon2" href="administrator/management">Języki<span>Zarządzanie tłumaczeniami</span></a></li>
			<li><a class="_ico icon4" href="administrator/articles">Artykuły<span>Twórz i zmieniaj artykuły</span></a></li>
            <li><a class="_ico icon3" href="administrator/user_pages">Moje strony<span>Modyfikuj swoje strony</span></a></li>
            <li><a class="_ico icon5" href="administrator/wylogowanie">Wylogowanie<span>Zakończ pracę z serwisem</span></a></li>
        </ul>';
}

?>