<?php
error_reporting(0);
error_log(0);
ini_set('error_log', NULL);
ini_set('log_errors', 0);
session_destroy();
if(isset($_POST['third_name'])){
    if(empty($_POST['third_name'])){
        echo '<span class="text-danger">Enter your name</span>';
        //session_destroy();
    }
    elseif(strlen($_POST['third_name']) <= 2){
        echo '<span class="text-danger">Too short</span>';
        //session_destroy();
    }
    elseif(strlen($_POST['third_name']) > 2 && !empty($_POST['third_name'])){
        echo '<span class="text-success">Okay!</span>';
        session_start();
        $_SESSION['THIRDNAME'] = $_POST['third_name'];
    }

}
else{
    echo "<script>alert('Error occured...')</script>";
    echo "<script>window.open('index.php')</script>";
}