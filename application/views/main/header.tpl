<!DOCTYPE html>
<html>

    <meta charset="UTF-8">
    <title>smarty test</title>
    <head>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="application\media\css\bootstrap.css" />
    </head>
<body>
        <div id="header-nav" style="margin:0 auto; width:1000px; height:40px;">
        <nav class="navbar navbar-dark bg-inverse" style="background-color: #e3f2fd;">
{*          <a class="navbar-brand" href="#">menu</a>*}
          <ul class="nav navbar-nav">
            {foreach from=$top_menu item=key}
                <li class="nav-item">
                    <a class="nav-link" href={$key.url}> {$key.name|upper}</a>
                </li>
            {/foreach}
          </ul>
          <form class="form-inline pull-xs-right" style="float:right; margin-right: 30px; margin-top: 8px; ">
            <input class="form-control" type="text" placeholder="szukaj">
            <button class="btn btn-outline-success" type="submit">Szukaj</button>
          </form>
        </nav>
    </div>
    <hr>