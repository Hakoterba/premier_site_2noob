<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);
    if (mysqli_connect_errno()) 
    {
        echo "Echec lors de la connexion à MySQL : " . mysqli_connect_error();
        return;
    }

    $queries = array(
        "DROP DATABASE IF EXISTS site_manga",
        "CREATE DATABASE site_manga",
        "USE site_manga",
        "CREATE TABLE User(pk_user_id INT PRIMARY KEY AUTO_INCREMENT,email VARCHAR(255), password VARCHAR(255),pseudo VARCHAR(255))",
        "INSERT INTO User(email,password,pseudo) VALUES ('admin@rush00', MD5('hb'),'pseudo')",
    );
    $i = 0;
    $count = count($queries);

    while($i < $count)
    {
        $res = mysqli_query($conn, $queries[$i]);
        
        echo "$queries[$i]\n";
        if($res)
        {
            echo "Executed successfully\n";
        }
        else
        {
            echo "Failed\n" . mysqli_error($conn);
            break;
        }
        $i++;
    }

    mysqli_close($conn);
?>