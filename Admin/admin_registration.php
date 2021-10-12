<?php include "header.php"; ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="card-title">
                            <i class="fas fa-angle-double-right"></i>&nbsp;
                            New Admin Registration
                        </div>
                    </div><br>
                    <div class="create box card-body" style="background:white;">
                        <div class="card card-success" style="background:white;">
                            <div class="col-md-10">
                                <div class="bottom-section" style="padding: 10px;">
                                    <form action="" method="post">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Person Permanent ID" name="Per_id">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-id-card"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Full name" name="name">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Role of Person" name="role">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-plus-square"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="appointed Officer name" name="officer">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user-check"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Email" name="email">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" placeholder="Password" name="password">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" placeholder="Retype password" name="c_password">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="icheck-primary">
                                                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                                    <label for="agreeTerms">
                                                        I agree to the <a href="#">terms</a>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-4">
                                                <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php
if ( isset( $_POST[ "submit" ] ) ) {
    mysqli_query($conn, "INSERT INTO `admin`  VALUES (NULL,'$_POST[Per_id]','$_POST[name]','$_POST[role]','$_POST[officer]','$_POST[email]','$_POST[password]','$_POST[c_password]')") or die(mysqli_error($conn));

    ?>

    <script type="text/javascript">
        alert( "Registered successfully!" );
        window.location = "admin_registration.php";
    </script>

    <?php
}
?>
<?php include "footer.php"; ?>
