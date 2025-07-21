<?php
include "config/conn.php"
$userName = $_POST["username"] ;
$pass = $_POST["password"] ;
$sql = "selcet * from useres where username = ? " ;
$stnt = $conn->prepar( $sql) ;
$stnt->bind_pram ( "s" , $username )
$stnt->execute();
$result = $stat->get_result();
$user = $result->fech_assoc();
if ( $user &&  $password == $user ["password"] ) {
    echo " Hello" , $user['username']
     header("location.index.php ")
}
else{
    header("location.php? error = Data not signed ")
}

 