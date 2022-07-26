<?php

$conn = mysqli_connect("localhost","root","","orena");

if($conn){
    echo "connected";
}else{
    echo "not connected";
}

?>