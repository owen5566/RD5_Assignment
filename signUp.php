<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
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
    <div class="container">
      <!-- Content here -->
      <div id = "title"class="row"><div>歡迎</div></div>
      <!-- sign up Input -->
      <div class="row" style="margin: 20px;">
          <div class = "col" >
            <div style="font-size: xx-large;color: grey ;margin-bottom: 10px;">註冊</div>
                <form method = "POST">
                <div class="form-group row">
                    <label class="col-4 col-form-label" for="sTxtUserName">帳戶名稱</label> 
                    <div class="col-8">
                    <input id="sTxtUserName" name="sTxtUserName" type="text" class="form-control" required>
                    <div id="checkUserName" class="" style="color: crimson; font-size: xx-small;"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sTxtPass" class="col-4 col-form-label">密碼</label> 
                    <div class="col-8">
                    <input id="sTxtPass" name="sTxtPass" type="password" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sTxtPass2" class="col-4 col-form-label">再次確認密碼</label> 
                    <div class="col-8">
                    <input id="sTxtPass2" name="sTxtPass2" placeholder="" type="password" class="form-control" aria-describedby="text2HelpBlock" required> 
                    <div id="passHelpBlock" class="" style="color: crimson; font-size: xx-small;"><i class="fa fa-close fa-1"></i>請確認兩次輸入是否相同</div>
                    <div id="passHelpBlock2" class="" style="color: green; font-size: xx-small;"><i class="fa fa-check fa-1" aria-hidden="true"></i>正確</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sTxtName" class="col-4 col-form-label">姓名</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <input id="sTxtName" name="sTxtName" type="text" class="form-control" required> 
                        <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                        </div>
                    </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="sTxtBirth" class="col-4 col-form-label">生日</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <input id="sTxtBirth" name="sTxtBirth" type="text" class="form-control" required> 
                        <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                        </div>
                    </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="sTxtAddress" class="col-4 col-form-label">地址</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <input id="sTxtAddress" name="sTxtAddress" type="text" class="form-control" required> 
                        <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                        </div>
                    </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="sTxtEmail" class="col-4 col-form-label">e-mail</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <input id="sTxtEmail" name="sTxtEmail" type="text" class="form-control" required> 
                        <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                        </div>
                    </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button id = "submit" name="submit" type="submit" class="btn btn-primary" value=1 disabled>註冊</button>
                    <div id="HelpBlock3" class="" style="color: green; font-size: xx-small;"></div>
                    </div>
                </div>
                </form>
          </div>
          <div class = 'col' style="background-color: antiquewhite;">
      </div>
    </div>
    <script>
        let checkPass = 0;
        $(function(){
            $("#passHelpBlock").hide();
            $("#passHelpBlock2").hide();

            $("#sTxtPass2,#sTxtPass").on("blur",function(){
                if($("#sTxtPass2").val()!=$("#sTxtPass").val()||$("#sTxtPass2").val()==""){
                    $("#passHelpBlock").show();
                    $("#passHelpBlock2").hide();
                    // $("#submit").prop("disabled",true);
                    checkPass = 0;
                }else{
                    $("#passHelpBlock").hide();
                    $("#passHelpBlock2").show();
                    // $("#submit").prop("disabled",false);
                    checkPass = 1;
                }
            })

            $(".form-control").on("blur",function(){
              let count = 0 ;
                $(".form-control").each(function(){
                  if($.trim($(this).val())!="")
                    count++;
                    if(count==7 && checkPass==1){
                      $("#submit").prop("disabled",false);
                    }else{
                      $("#submit").prop("disabled",true);
                    }
                });
            })
        })
    </script>
</body>
</html>