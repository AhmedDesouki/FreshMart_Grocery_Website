<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname="grocery";
try{
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
}
catch(PDOException $e)
{
    echo $e->getMessage();
    exit();
}

function destroySession()
{
$_SESSION=array();
if (session_id() != "" || isset($_COOKIE[session_name()]))
setcookie(session_name(), '', time()-2592000, '/');
session_destroy();
}
function sanitizeString($var)
{
global $connection;
$var = strip_tags($var);
$var = htmlentities($var);
if (get_magic_quotes_gpc())
$var = stripslashes($var);
return $connection->real_escape_string($var);
}


function random_num($length)
{
    $text = "";
    if($length < 5)
    {
        $length = 5;
    }
    $len = rand(4, $length);
    for ($i=0; $i < $len; $i++) {
        
        $text .= rand(0,9);
    }
    return $text;
}


?>