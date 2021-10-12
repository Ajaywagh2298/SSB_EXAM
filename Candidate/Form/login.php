<?php include "../connection.php"; ?>
<?php session_start(); ?>
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
            //var code = a  + b + c  + d +  e +  f  + g;
            document.getElementById("mainCaptcha").value = code
        }

       function ValidCaptcha(){
            var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
            var string2 = document.getElementById('txtInput').value;
            if (string1 == string2){
                return true;
            }
            else{
                return  false;
                window.location.href="login.php";
            }
        }
        function removeSpaces(string){
            return string.split(' ').join('');
        }
    </script>
</head>
<body onload="Captcha();">
<div class="col-xl-12 col-lg-12 col-md-12 " style="padding: 10px; height: 200px;border-bottom: 0.5px solid #F4F6F6;padding-left: 0px; margin-left: 0px;">
    <div class="col-xl-12 col-lg-12 col-md-12 d-inline-flex">
        <div class=" col-lg-2 float-child">
            <div class="container" style=""><img style="height: 200px;padding-bottom: 10px;padding-left: 0px;" src="img/logo1.png"> </div>
        </div>
        <div class="col-xl-8 col-lg-12 col-md-8" style="text-align: center;">
            <div class="container" style="padding-top: 20px;">
                <p style="font-size: 60px;color: #5499C7;font-family: Times New Roman;margin-bottom: 0px;">National Defence Academy</p>
                <p style="font-size: 30px;font-family: Times New Roman;color: #2d4373;"> Union Public Service Commission </p>
            </div>
        </div>
        <div class="col-lg-2 float-child">
            <div class="container" style="200px;"><img style="height: 200px;padding-bottom: 10px;padding-left: 0px;" src="img/img3.png"> </div>
        </div>


    </div>
</div>
<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-12 col-md-9">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                                <div class="text-center">
                                    <p style="font-size: 30px;font-family: Times New Roman" class="text-gray-900 mb-4">Login</p>
                                </div>
                                <form class="user" method="post" action="">
                                    <div class="form-group">
                                        <label >Registration Number / पंजीकरण संख्या <span style="color: red">*</span> </label>
                                        <input type="text" name="cad_id" class="form-control" id="exampleInputtext">
                                    </div>
                                    <div class="form-group">
                                        <label >Birth Of Date / जन्म की तारीख <span style="color: red">*</span> </label>
                                        <input type="date" name="date" class="form-control" id="exampleInputPassword">
                                    </div>
                                    <div class="form-group text-center">
                                        <label>Captcha <spans style="color: red">*</spans></label><br>
                                        <div class="custom-control d-inline-flex">
                                            <input type="text" class="form-control" name="capt" style="font-size: 19px;font-weight: bold;font-family: Times New Roman;width: 150px;" id="mainCaptcha" disabled readonly>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="text" id="txtInput" name="txtInput" class="form-control" style="width: 150px;" maxlength="" >
                                            <i onclick="Captcha();" class="fas fa-redo" style="padding: 15px;color: #2e6da4;"></i>
                                        </div>
                                    </div><br><br>
                                    <div class="form-group text-center">
                                        <button  type="submit" name="submit" style="width: 200px;background: #2e6da4;" onclick="ValidCaptcha();" class="btn btn-primary">Login / लॉग इन करें</button>
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
<?php
if(isset($_POST["submit"])){
    $count=0;
    $res= mysqli_query($conn,"select * from candidate_t where cad_regist_id='$_POST[cad_id]' && birth_date='$_POST[date]'");
    $count=mysqli_num_rows($res);

    if($count==0)
    {
        ?>
        <script type="text/javascript">
            window.location.href=window.location.href;
        </script>
    <?php
    }
    else
    {
    $_SESSION['cad_regist_id'] = $_POST['cad_id'];
    ?>
        <script type="text/javascript">
            window.location.href="form2.php";
        </script>
        <?php
        }
}
?>

<?php include "../footer.php"; ?>
