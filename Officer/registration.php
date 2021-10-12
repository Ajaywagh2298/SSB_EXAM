<?php include "../connection.php"; ?>
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
<br><br><br>
<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-10 col-md-10">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12" >
                            <div class="login-form">
                                <div class="text-center">
                                    <p class="text-center" style="color:#284EFF;font-size: 40px;font-family: Times New Roman;" >
                                        Officer Registration
                                    </p>
                                </div>
                                <form class="form-group" name="insert" action="" method="post">
                                    <div class="text-justify" style="border: 1px solid black;padding-left: 120px;padding-right: 120px;border-radius: 10px;">
                                        <br><br>
                                        <div class="col-xl-12 col-lg-12 col-md-12" style="padding-left: 10px;">
                                            <div class="col-12"><br>
                                                <div class="form-group">
                                                    <label>Full Name <span style="color: red;">*</span> </label>
                                                    <input type="text" class="form-control" name="name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Permanent Number <span style="color: red;">*</span> </label>
                                                    <input type="text" class="form-control" name="per_number" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Rank <span style="color: red;">*</span> </label>
                                                    <input type="text" class="form-control" name="rank" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Field <span style="color: red;">*</span> </label>
                                                    <input type="text" class="form-control" name="field" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>	Mobile Number <span style="color: red;">*</span> </label>
                                                    <input type="tel" class="form-control" name="mob_no" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email <span style="color: red;">*</span> </label>
                                                    <input type="email" class="form-control" name="email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password <span style="color: red;">*</span> </label>
                                                    <input type="password" class="form-control" name="password" required>
                                                </div>
                                                <br>
                                                <div class="text-center">
                                                        <button type="reset" class="btn btn-danger" style="width: 200px;">Reset</button>&nbsp;&nbsp;&nbsp;
                                                        <button  type="submit" name="submit" class="btn btn-info" style="width: 200px;">Registration</button>
                                                </div> <br><br>
                                </form>
                            </div>

                            <div class="text-center">
                            </div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if ( isset( $_POST[ "submit" ] ) ) {
    mysqli_query($conn, "INSERT INTO `officer` VALUES (NULL ,'$_POST[per_number]','$_POST[rank]','$_POST[name]','$_POST[mob_no]','$_POST[email]','$_POST[password]','$_POST[field]')") or die(mysqli_error($conn));

    ?>

    <script type="text/javascript">
        alert( "Registered successfully!" );
        window.location = "registration.php";
    </script>

    <?php
}
?>



<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/ruang-admin.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
</body>

</html>
