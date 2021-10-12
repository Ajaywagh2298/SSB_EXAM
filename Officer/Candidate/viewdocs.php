<?php include "header.php"; ?>
<?php
$query = "select * from documents_t order by Chest_No desc limit 1";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);

$chest_num =$row['chest_num'];

if($chest_num == " "){
    $che_num = "S0001";
}else{
    $che_num = substr($chest_num,9);
    $che_num = intval($che_num);
    $che_num = "S000" . ($che_num + 1);
}
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
        $("select").change(function(){
            $(this).find("option:selected").each(function(){
                var optionValue = $(this).attr("value");
                if(optionValue){
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else{
                    $(".box").hide();
                }
            });
        }).change();
    });
</script>
<script language="javascript">

    $(function () {
        $("#btn").on("click", function (e) {
            e.preventDefault();


            $("#form").show();

            document.getElementById("myiframe");

            $("#form").show();
            $("#map").show();
        });
        $(document).ready(function () {
            $("#map").hide();
        });
    });
</script>
<div class="col-md-12" style="padding-left: 80px;padding-right: 80px;">
    <div class="card mb-5">
        <div class="container-login">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="my-5">
                        <p style="font-size: 35px;font-family: Times New Roman" class="text-center"><b>Verification Candidate Documents</b></p>
                        <div class="row">
                            <!-- Datatables -->
                            <div class="col-lg-12">
                                <div class="text-left" style="padding-left: 100px;">
                                    <form action="" method="post" id="form">
                                        <div class="form-group" style="width: 300px;">
                                            <label>Candidate Registration Number</label>
                                            <input type="text" name="reg_num" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-secondary" id="btn" name="submit1">Check</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card mb-4" id="map">
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary"></h6>
                                    </div>
                                    <div >
                                    <div class="table-responsive p-3" id="myiframe">
                                        <table class="table align-items-center table-flush text-center"  >
                                            <thead class="thead-light">
                                            <tr>
                                                <th>SR. NO</th>
                                                <th>Document Name</th>
                                                <th>Document Number</th>
                                                <th>View</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>SR. NO</th>
                                                <th>Document Name</th>
                                                <th>Document Number</th>
                                                <th>View</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            <?php
                                            if ( isset( $_POST[ "submit1" ] ) ) {
                                            $res=mysqli_query($conn,"select * from candidate_t2 where cad_regist_id='$_POST[reg_num]'")or die(mysqli_error($conn));
                                            while($row = mysqli_fetch_assoc($res));
                                            ?>
                                            <tr>
                                                <td>1</td>
                                                <th>10 th Mark Sheet</th>
                                                <td><?php echo $row["10_mark_num"]; ?></td>
                                                <td><button class="btn  btn-info"><?php //echo $row["10_mark"]; ?>View</button></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <th>12 th Mark Sheet</th>
                                                <td><?php echo $row["12_mark_num"]; ?></td>
                                                <td><button class="btn  btn-info"><?php //echo $row["12_mark"]; ?>View</button></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <th>Domicile Certificate</th>
                                                <td><?php echo $row["domicile_num"]; ?></td>
                                                <td><button class="btn  btn-info"><?php //echo $row["domicile_certificate"]; ?>View</button></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <th>Nationality Certificate</th>
                                                <td><?php echo $row["nationality_num"]; ?></td>
                                                <td><button class="btn  btn-info"><?php //echo $row["nationality_certificate"]; ?>View</button></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <th> Birth Date</th>
                                                <td></td>
                                                <td><button class="btn  btn-info"><?php //echo $row["birth_certificate"]; ?>View</button></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <th>Aadhar Card</th>
                                                <td></td>
                                                <td><button class="btn  btn-info"><?php //echo $row["aadhar_card"]; ?>View</button></td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <th>PAN Card</th>
                                                <td><?php echo $row["pan_num"]; ?></td>
                                                <td><button class="btn  btn-info"><?php //echo $row["pan_card"]; ?>View</button></td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <th>College Letter</th>
                                                <td></td>
                                                <td><button class="btn  btn-info"><?php //echo $row["clg_letter"]; ?>View</button></td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <th>Risk Certificate</th>
                                                <td></td>
                                                <td><button class="btn  btn-info"><?php //echo $row["risk_certificate"]; ?>View</button></td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <th>Creamy Layer Certificate</th>
                                                <td><?php echo $row["creamy_layer_num"]; ?></td>
                                                <td><button class="btn  btn-info"><?php //echo $row["creamy_layer_certificate"]; ?>View</button></td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <th>Caste Certificate</th>
                                                <td><?php echo $row["caste_certificate_num"]; ?></td>
                                                <td><button class="btn  btn-info"><?php //echo $row["caste_certificate"]; ?>View</button></td>
                                            </tr><?php }  ?>
                                            </tbody>
                                        </table>
                                    </div></div>
                                </div>
                                <div class="text-left card-body col-4" style="padding-left: 100px;" >
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <input type="hidden" name="chest_num" value="<?php echo $che_num; ?>" class="form-control">
                                        </div>
                                        <div class="form-group" style="width: 300px;">

                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option value="">Select</option>
                                                <option value="grievance">Grievance</option>
                                                <option value="approval">Approval</option>
                                            </select>
                                        </div>
                                        <div class="grievance box form-group" style="width: 300px;">
                                            <label>Grievance Message</label>
                                            <textarea class="form-control" name="msg" value="null"></textarea>
                                        </div>
                                        <div class="form-group" >
                                            <button type="submit" name="submit" class="btn btn-info">Done</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if ( isset( $_POST[ "submit" ] ) ) {

   mysqli_query($conn, "INSERT INTO `documents_t` VALUES ('$_POST[reg_num]','$_POST[chest_num]','$_POST[status]','$_POST[msg]')") or die(mysqli_error($conn));
?>
    <script type="text/javascript">
        alert( "Registered successfully!" );
        window.location = "viewdocs.php";
    </script>
<?php
}
?>
<?php include "footer.php"; ?>
