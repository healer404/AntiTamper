<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="Roniel Duka">
    <title>Anti-Tamper Zone</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
        }
        .box{
            width: 800px;
            border: 1px solid #cccccc;
            background-color: #ffffff;
            border-radius: 5px;
            margin-top: 36px;
        }
    </style>
</head>
<body>
    <div class="container box">
        <form action="name_checker.php" method="post">
            <div class="form-group">
                <h1 align="center">ANTI-TAMPER FOR MARX</h1>
                <label for="lastname">Last Name</label>
                <input type="text" name="lname" id="lastname" class="form-control">
                <span id="thirdnamevalidity"></span><br>
                <label for="firstname">First Name</label>
                <input type="text" name="fname" id="firstname" class="form-control">
                <span id="firstnamevalidity"></span><br>
                <label for="middlename">Middle Name</label>
                <input type="text" name="mname" id="middlename" class="form-control">
                <span id="secondnamevalidity"></span><br><br>
            </div>
            <button type="submit" id="tester" class="btn btn-info" name="textnow">TEST NOW</button>
            <br><br>
        </form>
    </div>
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
          $("#firstname").blur(function () {
             var firstname = $(this).val();
             $.ajax({
                 url: "session_starter.php",
                 method: "POST",
                 data:{first_name:firstname},
                 dataType: "text",
                 success:function (html) {
                     $('#firstnamevalidity').html(html);
                 }
             })
          });
        });
        $(document).ready(function () {
            $("#middlename").blur(function () {
                var secondname = $(this).val();
                $.ajax({
                    url: "session_starter_1.php",
                    method: "POST",
                    data:{second_name:secondname},
                    dataType: "text",
                    success:function (html) {
                        $('#secondnamevalidity').html(html);
                    }
                })
            });
        });
        $(document).ready(function () {
            $("#lastname").blur(function () {
                var thirdname = $(this).val();
                $.ajax({
                    url: "session_starter_2.php",
                    method: "POST",
                    data:{third_name:thirdname},
                    dataType: "text",
                    success:function (html) {
                        $('#thirdnamevalidity').html(html);
                    }
                })
            });
        });
    </script>
</body>
</html>