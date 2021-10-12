<?php include "../connection.php"; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href=plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
      <b>Admin Login</b>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">

           <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="pwd">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                                        <!-- /.col -->
                    <div class="col-4 text-center">
                        <button type="submit" class="btn btn-primary " style="width: 110px;" name="submit">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
                   <!-- /.login-card-body -->
    </div>
</div>
    <div class="container-login">
        <div class="row justify-content-center">
            <div class="col-xl-24 col-lg-24 col-md-24">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-22">
                                <div class="login-form">
                                    <div class="col-xl-10 col-lg-10 col-md-10 text-center">
                                        <div class="d-inline-flex">
                                            <div class="text-center" style="padding-left: 50px;padding-right: 50px;padding-top: 50px;">
                                                <img style="width: 100px;height: 100px;" src="img/logo2.jpg">
                                            </div>
                                            <div class="text-center" style="padding-left: 50px;padding-right: 50px;">
                                                <img style="width: 150px;height: 200px;" src="img/logo1.png">
                                            </div>
                                            <div class="text-center" style="padding-left: 50px;padding-right: 50px;padding-top: 50px;">
                                                <img style="width: 100px;height: 100px;" src="img/img3.png">
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
    <?php
    if(isset($_POST["submit"])){
        $count=0;
        $res= mysqli_query($conn,"select * from admin where email ='$_POST[email]' && password ='$_POST[pwd]'");
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
        $_SESSION['email'] = $_POST['email'];
        ?>
            <script type="text/javascript">
                window.location.href="index.php";
            </script>
            <?php
        }
    }
    ?>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>

