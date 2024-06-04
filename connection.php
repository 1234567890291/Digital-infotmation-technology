<?php

$servername ="sql308.infinityfree.com";
$username ="if0_36563706";
$password ="YryztDVltPg ";
$dbname ="if0_36563706_ditdataentry";


$conn ="mysql_connect($servername,$username,$password,$dbname)";
if($conn)
{
    echo "Connection Ok";
}
else
{
    echo "Connection Filed";
}
?>