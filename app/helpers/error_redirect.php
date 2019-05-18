<?php

function redirect_404(){
    header("HTTP/1.0 404 Not Found");
    include APPROOT."\\../\\resources\\error\\404.php";
    die();
}

