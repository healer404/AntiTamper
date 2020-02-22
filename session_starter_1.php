<?php
error_reporting(0);
error_log(0);
ini_set('error_log', NULL);
ini_set('log_errors', 0);
session_destroy();
    if(isset($_POST['second_name'])){
        if(strlen($_POST['second_name']) == 2 || strlen($_POST['second_name']) == 1){
            echo '<span class="text-danger">Too short</span>';
            //session_destroy();
        }
        elseif(empty($_POST['second_name'])){
            session_start();
            $_SESSION['SECONDNAME'] = $_POST['second_name'];
        }
        elseif(strlen($_POST['second_name']) > 2 && !empty($_POST['second_name'])){
            echo '<span class="text-success">Okay!</span>';
            session_start();
            $_SESSION['SECONDNAME'] = $_POST['second_name'];
        }
    }
    else{
        echo "<script>alert('Error occured...')</script>";
        echo "<script>window.open('index.php')</script>";
    }