<?php include "../connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/ruang-admin.min.css" rel="stylesheet">
    <style>  body{
            -webkit-user-select: none;  /* Chrome all / Safari all */
            -moz-user-select: none;     /* Firefox all */
            -ms-user-select: none;      /* IE 10+ */
            user-select: none;          /* Likely future */
        }</style>
    <style>
        .parent {display: block;position: relative;float: left;line-height: 70px;background-color: #ff3838;border-right:#CCC 1px solid;}
        .parent a{margin: 10px;color: #FFFFFF;text-decoration: none;}
        .parent:hover > ul {display:block;position:absolute;}
        .child {display: none;}
        .child li {background-color: #3e65aa;line-height: 30px;border-bottom:#CCC 1px solid;border-right:#CCC 1px solid; width:100%;}
        .child li a{color: #000000;}
        ul{list-style: none;margin: 0;padding: 0px; min-width:10em;}
        ul ul ul{left: 100%;top: 0;margin-left:1px;}
        .expand{font-size:12px;float:right;margin-right:5px;}
        .login,
        .image {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url('https://source.unsplash.com/WEQbe2jBg40/600x1200');
            background-size: cover;
            background-position: center;
        }

        .login-heading {
            font-weight: 300;
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
            border-radius: 2rem;
        }

        .form-label-group {
            position: relative;
            margin-bottom: 1rem;
        }

        .form-label-group>input,
        .form-label-group>label {
            padding: var(--input-padding-y) var(--input-padding-x);
            height: auto;
            border-radius: 2rem;
        }

        .form-label-group>label {
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            margin-bottom: 0;
            /* Override default `<label>` margin */
            line-height: 1.5;
            color: #495057;
            cursor: text;
            /* Match the input under the label */
            border: 1px solid transparent;
            border-radius: .25rem;
            transition: all .1s ease-in-out;
        }

        .form-label-group input::-webkit-input-placeholder {
            color: transparent;
        }

        .form-label-group input:-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-moz-placeholder {
            color: transparent;
        }

        .form-label-group input::placeholder {
            color: transparent;
        }

        .form-label-group input:not(:placeholder-shown) {
            padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
            padding-bottom: calc(var(--input-padding-y) / 3);
        }

        .form-label-group input:not(:placeholder-shown)~label {
            padding-top: calc(var(--input-padding-y) / 3);
            padding-bottom: calc(var(--input-padding-y) / 3);
            font-size: 12px;
            color: #777;
        }

        /* Fallback for Edge
        -------------------------------------------------- */

        @supports (-ms-ime-align: auto) {
            .form-label-group>label {
                display: none;
            }
            .form-label-group input::-ms-input-placeholder {
                color: #777;
            }
        }

        /* Fallback for IE
        -------------------------------------------------- */

        @media all and (-ms-high-contrast: none),
        (-ms-high-contrast: active) {
            .form-label-group>label {
                display: none;
            }
            .form-label-group input:-ms-input-placeholder {
                color: #777;
            }
        }

    </style>
</head>

<body style="background: white;">
<div class="col-xl-12 col-lg-12 col-md-12 " style="padding: 10px; height: 200px;border-bottom: 0.5px solid #F4F6F6;padding-left: 0px; margin-left: 0px;">
    <div class="col-xl-12 col-lg-12 col-md-12 d-inline-flex">
        <div class=" col-lg-2 float-child">
            <div class="container" style=""><img style="height: 200px;padding-bottom: 10px;padding-left: 0px;" src="../img/logo1.png"> </div>
        </div>
        <div class="col-xl-8 col-lg-12 col-md-8" style="text-align: center;">
            <div class="container" style="padding-top: 20px;">
                <p style="font-size: 60px;color: #5499C7;font-family: Times New Roman;margin-bottom: 0px;">National Defence Academy</p>
                <p style="font-size: 30px;font-family: Times New Roman;color: #2d4373;"> Union Public Service Commission </p>
            </div>
        </div>
        <div class="col-lg-2 float-child">
            <div class="container" style="200px;"><img style="height: 200px;padding-bottom: 10px;padding-left: 0px;" src="../img/img3.png"> </div>
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
                                    <p style="font-size: 50px;font-family: Times New Roman" class="text-gray-900 mb-4">Contact Us</p>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <label >Full Name / पूरा नाम <span style="color: red">*</span> </label>
                                        <input type="text" class="form-control" id="exampleInputtext">
                                    </div>
                                    <div class="form-group">
                                        <label >Email Address / ईमेल पता <span style="color: red">*</span> </label>
                                        <input type="text" class="form-control" id="exampleInputPassword">
                                    </div>
                                    <div class="form-group">
                                        <label >Mobile Number / मोबाइल नंबर <span style="color: red">*</span> </label>
                                        <input type="text" class="form-control" id="exampleInputPassword">
                                    </div>
                                    <div class="form-group">
                                        <label >Message / संदेश <span style="color: red">*</span> </label>
                                        <textarea class="form-control" style="height: 220px;"></textarea>
                                    </div>
                                    <br><br>
                                    <div class="form-group text-center">
                                        <a href="" style="width: 200px;background: #2e6da4;" onclick="alert(ValidCaptcha());" class="btn btn-primary">Login / लॉग इन करें</a>
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
<br><br>

<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-10">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                                <div class="text-center">
                                    <p style="font-size: 50px;font-family: Times New Roman;color:#2e6da4 ;">Contact Us</p>
                                </div>
                                <div class="text-center">
                                    <p style="font-size: 30px;font-family: Times New Roman;color: #F1C40F;">UNION PUBLIC SERVICE COMMISSION</p>
                                </div><br>
                                <div class="col-xl-12 col-lg-12 col-md-12" style="padding-left:15%;">
                                    <div class="card-body p-0">
                                <div class="text-left">
                                    <p style="font-size: 25px;font-family: Times New Roman" >Dholpur House,</p>
                                </div>
                                <div class="text-left">
                                    <p style="font-size: 25px;font-family: Times New Roman" >Shahjahan Road, New Delhi - 110069</p>
                                </div>
                                <div class="text-left">
                                    <p style="font-size: 25px;font-family: Times New Roman" ><b>Facilitation Counter :</b> 011-23098543 / 23385271 / 23381125 / 23098591</p>
                                </div>
                                <div class="text-left">
                                    <p style="font-size: 25px;font-family: Times New Roman;" >Email : feedback-example[exam@domain.com]</p>
                                </div>
                                    </div></div><br><br>
                                <div class="col-xl-12 col-lg-12 col-md-12 text-center">
                                    <div class="d-inline-flex">
                                        <div class="text-center" style="padding-left: 50px;padding-right: 50px;padding-top: 50px;">
                                            <img style="width: 100px;height: 100px;" src="../img/logo2.jpg">
                                        </div>
                                        <div class="text-center" style="padding-left: 50px;padding-right: 50px;">
                                            <img style="width: 150px;height: 200px;" src="../img/logo1.png">
                                        </div>
                                        <div class="text-center" style="padding-left: 50px;padding-right: 50px;padding-top: 50px;">
                                            <img style="width: 100px;height: 100px;" src="../img/img3.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../js/ruang-admin.min.js"></script>
<script src="../vendor/chart.js/Chart.min.js"></script>
<script src="../js/demo/chart-area-demo.js"></script>
</body>

</html>
