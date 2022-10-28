<?php
function substrwords($text, $maxchar, $end='...') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);      
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } 
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    } 
    else {
        $output = $text;
    }
    return $output;
}

// fungsi koneksi
function koneksi() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web22";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    return $conn;
}