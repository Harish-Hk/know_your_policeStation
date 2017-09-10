<?php



//create a connection
$conn = mysqli_connect("localhost","root","root","info");

//check the connection
if( !$conn ) {
    die( "Connection failed: " .mysqli_connect_error() );
}

?>