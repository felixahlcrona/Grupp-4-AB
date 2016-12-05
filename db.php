<?php $db = mysqli_connect("wwwlab.iit.his.se", "sqllab", "Tomten2009", "Grupp4AB");
if (!$db->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $db->error);
    exit();
} else {
 
}