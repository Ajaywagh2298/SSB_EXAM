<?php include "connection.php"; ?>
<?php session_start(); ?>
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
<div class="row" style="padding-left: 12px; box-shadow: 10px 15px 20px 0px #EAECEE;">
    <ul id="menu" align="left">
        <li class="parent"><a href="index.php" style="text-decoration:none;"><b>Home / मुखपृष्ठ</b></a></li>
        <li class="parent"><a href="" style="text-decoration:none;" target="_blank"><b>FAQ / सामान्य प्रश्न</b></a></li>
        <li class="parent"><a href="EditForm/login.php" style="text-decoration:none;" ><b>Edit Application / आवेदन संपादित करें</b></a></li>
        <li class="parent"><a href="" style="text-decoration:none;"><b>View / Print Application देखें / प्रिंट आवेदन</b></a></li>
        <li class="parent"><a href="Form/uploaddoc.php" style="text-decoration:none;"><b>Document Upload / दस्तावेज़ अपलोड</b></a></li>
        <li class="parent"><a href="../Home/contact.php" style="text-decoration:none;"><b>Contact Us / हमसे संपर्क करें</b></a></li>
        <li class="parent"><a href="" style="text-decoration:none;"><b>Logout / लॉग आउट</b></a></li>
    </ul>
</div>
<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- Modal basic -->
                                        <div class="card mb-4" style="display: none;">
                                            <div class="text-center" style="text-align: center;padding-top: 10px;">
                                                <p class="m-0 font-weight-bold text-primary" style="font-size:25px;"></p>
                                            </div>
                                            <div class="card-body">
                                                Hello today we have to complete one page of our site

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6" >
                                        <!-- Modal with scrolling long content -->
                                        <div class="card mb-4"  style="height: 300px;">
                                            <div class="text-center" style="text-align: center;padding-top: 10px;">
                                                <p class="m-0 font-weight-bold text-primary" style="font-size:25px;"></p>
                                            </div><br><br>
                                            <div class="card-body"  style="text-align: center;padding-top: 10px;">
                                                <a href="Admit_card.php"><button type="button" class="btn btn-secondary" style="width: 300px;">Download</button> </a>
                                            </div>
                                            <div class="text-center">
                                                <p style="font-size: x-large;color: black;">Download the Hall-Ticket <br> हॉल-टिकट डाउनलोड करें</p>
                                            </div><br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                                <div class="row">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../js/ruang-admin.min.js"></script>
<script src="../vendor/chart.js/Chart.min.js"></script>
<script src="../js/demo/chart-area-demo.js"></script>
</body>

</html>

