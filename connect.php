<?php

    $connect = new mysqli('localhost','root','','crud') ;
    if(!$connect)
    {
        die(mysqli->error($connect));
    }

    //Chọn hệ ký tự là utf8 để có thể in ra tiếng Việt.
    // $connect->set_charset('utf8'); //csdl tiếng việt
?>