<?php 
$conexao = mysqli_connect("localhost","root","","cadastros");
    if(!$conexao){
        echo "".mysqli_connect_error();
    }
    echo "";
?>