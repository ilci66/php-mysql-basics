<?php
    $conn = mysqli_connect('localhost', 'ilker', '123asd123', 'ninja_pizza');

    if(!$conn){
        echo "Connection error => " . mysqli_connection_error();
    };
?>