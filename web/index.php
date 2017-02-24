<!DOCTYPE html>
<html>
    <head>
        <title>Cookie_monster</title>
    </head>
    <body>
<?php

if(array_key_exists("Yellow_Guy's_name", $_COOKIE)&&preg_match('/([Bb])(ig)\s([Bb])(ird)+/', $_COOKIE["Yellow_Guy's_name"])){
  echo('<p>You got it! flag{bigest_of_the_birds}</p>');
}else{
    echo("<p>He's my favorite Yellow guy</p>");
    setcookie("Yellow_Guy's_name", 'Name', time()+300);
}

?>
</body>
</html>
