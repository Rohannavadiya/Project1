<?php
    session_start();
    require_once('../inc/connection.php');
    extract($_POST);
    //var_dump($_POST);
    $sql = "select id,password from password where email=?";
    $cmd = $db -> prepare($sql);
    $cmd -> bindParam(1,$email);
    $cmd -> execute();
    $table = $cmd -> fetchAll();

    if(sizeof($table)==0)
    {
        $message = "Invalid login attempt";
        header("location:../index.php?error=$message");
    }
    else
    {
        $HashedPassword= $table[0]['password'];
        echo "user given password = $password and Hashed password = $HashedPassword";
        if(password_verify($password,$HashedPassword)==true)
        {
            $_SESSION['userid'] = $table[0]['id'];
            $message="login successfull";
            header("location:../lecture.php?success=$message");
        }
        else
        {
            $message = "Invalid login attempt";
            header("location:../index.php?error=$message");
        }
    }
?>