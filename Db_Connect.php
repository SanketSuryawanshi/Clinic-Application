<?php

$Host = "localhost";
$User = "root";
$Pass = "";
$Database = "my_game";

$Con = mysqli_connect($Host,$User,$Pass,$Database);

if($Con){
    // echo '<script>alert("Database Connected !!")</script>';
}
else{
    echo 'alert("Database Not Connected !!")';
}


?>