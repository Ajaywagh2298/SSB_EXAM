<?php include "header.php"; ?>
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
                                        Edit Profile
                                    </p>
                                </div>
                                <?php
                                $res=mysqli_query($conn,"select * from officer where Per_Number='$per_num'")or die(mysqli_error($conn));
                                while($row = mysqli_fetch_array($res)){
                                ?>
                                <form class="form-group" name="" action="" method="post">
                                    <div class="text-justify" style="border: 1px solid black;padding-left: 120px;padding-right: 120px;border-radius: 10px;">
                                        <br><br>
                                        <div class="col-xl-12 col-lg-12 col-md-12" style="padding-left: 10px;">
                                            <div class="col-12"><br>
                                                <div class="form-group">
                                                    <label>Full Name <span style="color: red;">*</span> </label>
                                                    <input type="text" class="form-control" name="name" value="<?php echo $row['Name']; ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Permanent Number <span style="color: red;">*</span> </label>
                                                    <input type="text" class="form-control" name="per_number" value="<?php echo $row['Per_Number']; ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Rank <span style="color: red;">*</span> </label>
                                                    <input type="text" class="form-control" name="rank" value="<?php echo $row['Rank']; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Field <span style="color: red;">*</span> </label>
                                                    <input type="text" class="form-control" name="field" value="<?php echo $row['Field']; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>	Mobile Number <span style="color: red;">*</span> </label>
                                                    <input type="tel" class="form-control" name="mob_no" value="<?php echo $row['Mob_No']; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email <span style="color: red;">*</span> </label>
                                                    <input type="email" class="form-control" name="email"  value="<?php echo $row['Email']; }?>" readonly>
                                                </div>
                                                <br>
                                                <div class="text-center">
                                                    <button  type="submit" name="submit" class="btn btn-info" style="width: 200px;">Done</button>
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
    mysqli_query($conn, "UPDATE `officer` SET `Rank`='$_POST[rank]',`Name`='$_POST[name]',`Mob_No`='$_POST[mob_no]',`Email`='$_POST[email]',`Field`='$_POST[field]' WHERE Per_Number='$_POST[per_number]'") or die(mysqli_error($conn));
?>

    <script type="text/javascript">
        alert( "Registered successfully!" );
        window.location = "profile.php";
    </script>

<?php

}
?>
<?php include "footer.php"; ?>
