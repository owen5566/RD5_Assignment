<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>withdraw</title>
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
        #btnClearAmount{
            height: 36px;
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
      <?php require_once("navBar.php")?>
      <!-- main view -->
      <div id = "balanceBlock" >
          <div id="titlebalace" class="row justify-content-center title-s">
              <div class="col" style="text-align:center">帳戶餘額</div>
          </div>
          <div id="balanceShow" class="row justify-content-center title-s">
              <div id="balanceNum" class="col-7" style="text-align:right">$*******</div>
              <div id="blanceEye" class="col-5">
                  <i id = "eye" class="fa fa-eye " aria-hidden="true" onclick="eyeShow(1)"></i>
                  <i id = "eyeHide"class="fa fa-eye-slash hide" aria-hidden="true" onclick="eyeShow(0)"></i>
              </div>
          </div>
      </div>
      <hr>
      <!-- withdraw -->
      <div id="titlebalace" class="row justify-content-center title-s">
        <div class="col" style="text-align:center">提款</div>
      </div>
      <div class="row justify-content-center">
        <div class = "col-6">
            <div class="input-group mb-3">
                    <input id = "inputAmount" type="number" min="100" class="form-control" placeholder="輸入金額" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
        </div>
            <input id="btnClearAmount" type="button" class="btn btn-outline-secondary col-2" value="清空"></input>
      </div>
      <div class="row justify-content-center">
        <input id="btnWithdraw" type="submit" class="btn btn-outline-info col-4" value="確認"></input>
        <input id="btnCancel" type="button" class="btn btn-outline-secondary col-4" value="取消"
               onclick="window.location.href='main.php'"></input>
      </div>
      <!-- button Group -->
      <!-- <div id="controlGroup" class="row justify-content-center">
        <div id = "btnGroup" class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-outline-success btn-detail">今天</button>
            <button type="button" class="btn btn-outline-success btn-detail">這週</button>
            <button type="button" class="btn btn-outline-success btn-detail">這個月</button>
        </div>
      </div> -->
      

    <script>
        let balance = 0;
        $(function(){
            $("#btnClearAmount").click(clearAmount);
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
        function clearAmount(){
            $("#inputAmount").val("");
        }
    </script>
</body>
</html>