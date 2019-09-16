<?php

    include('database.php');

    if(isset($_POST['name'])){
        $description = $_POST['description'];
        $name = $_POST['name'];
        $sql = "INSERT INTO `task` (`name`, `description`) VALUES ('$name', '$description');";
        $result = mysqli_query($connection, $sql);
        if(!$result){
            die('MAL');
        }
        echo 'EXITO';
    }

?>