<?php include 'header.php'; ?>
<?php $per_num=$_SESSION['per_num']; ?>

    <div class="col-md-12" style="padding-left: 80px;padding-right: 80px;">
        <div class="card mb-5">
            <div class="container-login">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="my-5">
                            <p style="font-size: 35px;font-family: Times New Roman" class="text-center"><b>Profile</b></p>
                            <div class="row">
                                <!-- Datatables -->
                                <div class="col-lg-12">
                                    <div class="card mb-4">
                                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                                        </div>
                                        <div class="table-responsive p-3">
                                            <table class="table align-items-center table-flush" id="dataTable">

                                                <?php
                                                $res=mysqli_query($conn,"select * from officer where Per_Number='$per_num'")or die(mysqli_error($conn));
                                                while($row = mysqli_fetch_array($res)){
                                                ?>
                                                <tbody>
                                                <tr style="padding-top: 30px;padding-bottom: 30px;">
                                                    <td>Full Name</td>
                                                    <td><?php echo $row['Name']; ?></td>
                                                </tr>
                                                <tr style="padding-top: 10px;padding-bottom: 10px;">
                                                    <td>Permanent Number</td>
                                                    <td><?php echo $row['Per_Number']; ?></td>
                                                </tr>
                                                <tr style="padding-top: 10px;padding-bottom: 10px;">
                                                    <td>Rank</td>
                                                    <td><?php echo $row['Rank']; ?></td>
                                                </tr>
                                                <tr style="padding-top: 10px;padding-bottom: 10px;">
                                                    <td>Field</td>
                                                    <td><?php echo $row['Field']; ?></td>
                                                </tr>
                                                <tr style="padding-top: 10px;padding-bottom: 10px;">
                                                    <td>Mobile Number</td>
                                                    <td><?php echo $row['Mob_No']; ?></td>
                                                </tr>
                                                <tr style="padding-top: 10px;padding-bottom: 10px;">
                                                    <td>Email Address</td>
                                                    <td><?php echo $row['Email']; }?></td>
                                                </tr>
                                                </tbody>
                                            </table>
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


<?php include 'footer.php'; ?>