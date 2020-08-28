<?php 
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="css/bootstrap4/popper.js"></script>
    <script src="css/bootstrap4/bootstrap.min.js"></script>
    <style>
        #title{
            color: white;
            font-size: xx-large;
            background-color: #28a745;
            padding: 10px;
        }
        #title-s{
            font-size: xx-large;
            color: grey ;
            margin-bottom: 10px;
        }
        #inputRow{
            margin: 20px;
        }
        #submit{
            margin:6px;
        }
    </style>
</head>
<body>
    <div class="container" >
        <!-- Content here -->
        <div id = "title"class="row"><div>歡迎</div></div>
        <!-- loginInput -->
        <div id="inputRow" class="row">
            <div class="col">
                <div id="title-s">登入</div>
                <!-- <form action="login_p.php" id="login_form" name="login_input" method="POST"> -->
                    <!-- username -->
                    <div class="input-group mb-3 col-6">
                        <input id = "txtUserName" type="text" name="txtUserName" class="form-control" placeholder="使用者帳戶" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <!-- password -->
                    <div class="input-group mb-3 col-6">
                        <input type="password" name="txtUserPass" class="form-control" placeholder="密碼" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class=row>
                        <input id = "btnLogin" type="submit" name="btnLogin" value="登入" class="btn btn-outline-success col-1.5"></input>
                        <div id="submit">還沒有帳戶?<a href="signUp.php">新用戶註冊</a></div>
                    </div>
                <!-- </form> -->
            </div>
            </div>
    </div>

    <script>
        // $(function(){
        //     $("#btnLogin").click(function(){
        //         let loginData
        //         username = $("#txtUserName").val();
        //         $.ajax(
        //         )
        //     })
        // })
    </script>
</body>
</html>