<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
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
            margin-bottom: 10px;
        }
        #controlGroup{
            margin-bottom: 5px;
        }
        #detailDate{
            padding: 7px;
        }
        .action{
           padding: 5px;
           font-size: 20px;
        }
        #ActionAmount{
            text-align: right;
        }
        .title-s{
            font-size: xx-large;
            color: grey ;
        }
        .btn{
            margin: 2px;
        }
        .hide{
            display:none;
        }
        .btn-detail{
            width:80px;
        }
        .note{
            color: grey ;
        }
        

    </style>
</head>
<body>
    <div class="container">
      <!-- Content here -->
      <div id = "title" class="row">
          <div class="col">歡迎</div>
          <div class="col" style="text-align:right"><button type="button" class="btn btn-light">登出</button></div>
      </div>
      <!-- main view -->
      <div id = "balanceBlock" >
          <div id="titlebalace" class="row justify-content-center title-s">帳戶餘額</div>
          <div id="balanceShow" class="row justify-content-center title-s">
              <div id="balanceNum" class="col-4" style="text-align:right">$*******</div>
              <div id="blanceEye" class="col-2">
                  <i id = "eye" class="fa fa-eye " aria-hidden="true" onclick="eyeShow(1)"></i>
                  <i id = "eyeHide"class="fa fa-eye-slash hide" aria-hidden="true" onclick="eyeShow(0)"></i>
              </div>
          </div>
      </div>
      <hr>
      <!-- button Group -->
      <div id="controlGroup" class="row justify-content-center">
        <div id = "btnGroup" class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-outline-success btn-detail">今天</button>
            <button type="button" class="btn btn-outline-success btn-detail">這週</button>
            <button type="button" class="btn btn-outline-success btn-detail">這個月</button>
        </div>
      </div>
      <!-- detail list -->
      <div id="detailList" >
        <div id ="detail" class="row">
            <div class="col">
                <div id="detailDate" class="row" style="background-color: whitesmoke;">2020/08/07</div>
                <div id="detailAction" class="row action">
                    <div id="ActionName" class="col action">提款</div>
                    <div id="ActionAmount" class="col action">$1000</div>
                </div>
                <div id="detailAction" class="row">
                    <div id="ActionName" class="col note">備註：</div>
                    <div id="ActionAmount" class="col note">餘額$5215</div>
                </div>
            </div>
        </div>
        <hr>
        <div id ="detail" class="row">
            <div class="col">
                <div id="detailDate" class="row" style="background-color: whitesmoke;">2020/08/07</div>
                <div id="detailAction" class="row action">
                    <div id="ActionName" class="col action">提款</div>
                    <div id="ActionAmount" class="col action">$1000</div>
                </div>
                <div id="detailAction" class="row">
                    <div id="ActionName" class="col note">備註：</div>
                    <div id="ActionAmount" class="col note">餘額$6215</div>
                </div>
            </div>
        </div>
        <hr>
        <div id ="detail" class="row">
            <div class="col">
                <div id="detailDate" class="row" style="background-color: whitesmoke;">2020/08/07</div>
                <div id="detailAction" class="row action">
                    <div id="ActionName" class="col action">存款</div>
                    <div id="ActionAmount" class="col action">$7215</div>
                </div>
                <div id="detailAction" class="row">
                    <div id="ActionName" class="col note">備註：</div>
                    <div id="ActionAmount" class="col note">餘額$7215</div>
                </div>
            </div>
        </div>
      </div>
      <hr>
    <!-- total -->

    <script>
        let balance = 0;
        $(function(){
            
        })
        function eyeShow(status){
            if(status){
                $("#eyeHide").show();
                $("#eye").hide();
                $("#balanceNum").text("$5215");
            }else{
                $("#eyeHide").hide();
                $("#eye").show();
                $("#balanceNum").text("$*******");
            }
        }
    </script>
</body>
</html>