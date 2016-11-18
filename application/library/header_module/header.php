<?php
$menuData = model_load("topmenumodel", "showTopMenu", "");
    
echo '
<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" href="'.directory_stylesheet().'bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="'.directory_stylesheet().'style.css" />
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script type="text/javascript" src="'.directory_javascript().'jQuery.js"></script>
        <script type="text/javascript" src="'.directory_javascript().'timer.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="'.directory_javascript().'skrypty.js"></script>
        <title>smarty test</title>
    </head>
<body>
        <div id="header-nav" style="margin:0 auto; width:1000px; height:40px;">
        <nav class="navbar navbar-light bg-faded" >
          <ul class="nav navbar-nav">';
            foreach($menuData as $value){
                echo '<li class="nav-item">
                    <a class="nav-link" href='.$value["url"].'>'.mb_strtoupper($value["name"],'UTF-8').'</a>
                </li>';
            }
            
echo    '</ul>
          <form class="form-inline pull-xs-right" style="float:right; margin-right: 30px; margin-top: 8px; ">
            <input class="form-control" type="text" placeholder="szukaj">
            <button class="btn btn-outline-success" type="submit">Szukaj</button>
          </form>
        </nav>
    </div>
    <hr>';