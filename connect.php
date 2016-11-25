<?php

	$pdo = new PDO('mysql:dbname=Grupp4AB;host=wwwlab.iit.his.se', 'sqllab', 'Tomten2009');
    $pdo->exec("set names utf8");
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );