<?php 
 function clean($str) {

    global $conn;

    $str = trim($str);

    // $str = mysqli_real_escape_string($str);

    $str = SqlEscapeString($str);

    $str = htmlspecialchars($str);

    $str = strip_tags($str);

    return ($str);

}

function SqlEscapeString($string = "")
{
    global $conn;

    if (empty($conn)) {
        return false;
    }
    
    $str = mysqli_real_escape_string($conn, $string);
    return $str;
}