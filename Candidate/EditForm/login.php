<?php include "connection.php"; ?> /* connections..

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">
    <style>  body{
            -webkit-user-select: none;  /* Chrome all / Safari all */
            -moz-user-select: none;     /* Firefox all */
            -ms-user-select: none;      /* IE 10+ */
            user-select: none;          /* Likely future */
        }</style>
    <script type="text/javascript">
                 function Captcha(){
                     var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
                     var i;
                     for (i=0;i<6;i++){
                       var a = alpha[Math.floor(Math.random() * alpha.length)];
                       var b = alpha[Math.floor(Math.random() * alpha.length)];
                       var c = alpha[Math.floor(Math.random() * alpha.length)];
                       var d = alpha[Math.floor(Math.random() * alpha.length)];
                       var e = alpha[Math.floor(Math.random() * alpha.length)];
                       var f = alpha[Math.floor(Math.random() * alpha.length)];
                       var g = alpha[Math.floor(Math.random() * alpha.length)];
                      }
                    var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
                    document.getElementById("mainCaptcha").value = code
                  }

                  function ValidCaptcha(){
                      var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
                      var string2 = document.getElementById('txtInput').value;
                      if (string1 == string2){
                        var a = "Captcha is  Correct";
                        return a;
                      }
                      else{
                      var b = "Captcha is not Correct";
                        return b;
                      }
                  }
                  function removeSpaces(string){
                    return string.split(' ').join('');
                  }
             </script>
</head>
<body onload="Captcha();">
<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-12 col-md-9">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                                <div class="text-center">
                                    <p style="font-size: 30px;font-family: Times New Roman" class="text-gray-900 mb-4">Verification</p>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <label >Registration Number / पंजीकरण संख्या <span style="color: red">*</span> </label>
                                        <input type="text" class="form-control" id="exampleInputtext">
                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <div class="form-group ">
                                        <label>Captcha <spans style="color: red">*</spans></label><br>
                                        <div class="custom-control  text-center d-inline-flex">
                                            <input type="text" class="form-control" style="font-size: 19px;font-weight: bold;font-family: Times New Roman;width: 150px;" id="mainCaptcha" disabled readonly>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="text" id="txtInput" class="form-control" style="width: 150px;" maxlength="7" >
                                            <i onclick="Captcha();" class="fas fa-redo" style="padding: 15px;color: #F1C40F;"></i>
                                        </div>
                                    </div><br><br>
                                    <div class="form-group text-center">
                                        <button  style="width: 200px;" onclick="alert(ValidCaptcha());" class="btn btn-info"><i class="fas fa-check-circle"></i>&nbsp;&nbsp;Submit / प्रस्तुत करें</button>
                                    </div>
                                </form>
                                <div class="text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>

<?php include "../footer.php"; ?>
