<?php
    $servername="localhost";
    $username="root";   
    $password="";
    $bd="formmulario";

    $name = $_POST['nome'];
    $email = $_POST ['email'];
    $comment = $_POST['coment'];

    $conn = new mysqli("$servername", "$username", "$password", "$bd");
    if ($conn->connect_error) {
        die("Connection falied: " .$conn->connect_error);
    }
    echo "Connected successfully";
    $sql ="INSERT INTO contato (nome, email, msg)  VALUES ('$name', '$email', '$comment')";
    if ($conn ->query($sql) === TRUE) {
        echo "É ISSO AÍ";
    } 
    else{
        echo "ops!" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>