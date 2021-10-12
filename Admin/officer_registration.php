<?php include "../connection.php"; ?>
<?php include "header.php"; ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="card-title">
                            <i class="fas fa-angle-double-right"></i>&nbsp;
                            Officer Registration
                        </div>
                    </div><br>
                    <div class="create box card-body" style="background:white;">
                        <div class="card card-success" style="background:white;">
                            <div class="col-md-10">
                                <div class="bottom-section" style="padding: 10px;">
                                    <form class="form-group" name="insert" action="" method="post">
                                        <div class="text-justify" style="padding-left: 120px;padding-right: 120px;border-radius: 10px;">
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
                                                    </div>
                                                    <br><br>
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
    mysqli_query($conn, "INSERT INTO `officer` VALUES (NULL ,'$_POST[per_number]','$_POST[rank]','$_POST[name]','$_POST[mob_no]','$_POST[email]','$_POST[password]','$_POST[field]')") or die(mysqli_error($conn));

    ?>

    <script type="text/javascript">
        alert( "Registered successfully!" );
        window.location = "officer_registration.php";
    </script>

    <?php
}
?>
<?php include "footer.php"; ?>
