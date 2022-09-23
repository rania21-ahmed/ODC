<?php

    setcookie("nameofcookie","valueofcookies" ,time + 3600,"/");

    if(count ($_COOKIE) > 0){
        echo "y";
    }else{
        echo "N";
    }
