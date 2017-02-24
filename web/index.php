<!DOCTYPE html>
<html>
    <head>
        <title>Cookie_monster</title>
    </head>
    <body>
<?php

if(array_key_exists("Red_Guy's_name", $_COOKIE)&&preg_match('/([Ee])(lmo)+/', $_COOKIE["Red_Guy's_name"])){
  echo('<p>You got it! Flag{omm_nom_nom}</p>');
}else{
    echo("<p>He's my favorite red guy</p>");
    setcookie("Red_Guy's_name", 'Name', time()+300);
}

?>
</body>
</html>
