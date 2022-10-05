<?php
    $messsage ='This is saru';

    $article  =htmlspecialchars($_REQUEST['article']);
    $name =htmlspecialchars($_REQUEST['name']);

    require_once 'bbs.tpl.php';