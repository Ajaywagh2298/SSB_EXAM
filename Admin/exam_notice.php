<?php include "header.php"; ?>
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
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="card-title">
                            <i class="fas fa-angle-double-right"></i>&nbsp;
                            Exam Notification
                        </div>
                    </div><br>
                    <div class="card-body" style="background:white;">
                        <div class="" style="background:white;">
                            <div class="col-md-4">
                                <div class="">
                                    <select class="form-control">
                                        <option>Select</option>
                                        <option value="create">Create</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="create box card-body" style="background:white;">
                        <div class="card card-success" style="background:white;">
                            <div class="col-md-10">
                                <div class="bottom-section" style="padding: 10px;">
                                    <form action="" method="post" style="padding-left: 20px;">
                                        <div class="form-group">
                                            <label style="padding: 10px;font-size: 20px;">Exam Name </label>
                                            <input type="text" class="form-control" name="e_name">
                                        </div>
                                        <div class="form-group">
                                            <label style="padding: 10px;font-size: 20px;">Qualification Require</label>
                                            <input type="text" class="form-control" name="qualification">
                                        </div>
                                        <div class="form-group">
                                            <label style="padding: 10px;font-size: 20px;">Information About Exam Conduct</label>
                                            <textarea class="form-control" name="message" style="width: 100%;height: 200px;">Enter the all information related to the exam like, 1. which type student can apply 2. Vacancy and other.</textarea>
                                        </div>

                                        <br>
                                        <div class="form-group">
                                            <button type="reset" class="btn btn-sm btn-danger" style="width: 200px;">Clear</button>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type="submit" name="submit" class="btn btn-sm btn-success" style="width: 200px;">Upload</button>
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
    mysqli_query($conn, "INSERT INTO `exam_t` VALUES (NULL ,'$_POST[e_name]','$_POST[qualification]','$_POST[message]')") or die(mysqli_error($conn));

    ?>

    <script type="text/javascript">
        alert( "Registered successfully!" );
        window.location = "exam_notice.php";
    </script>

    <?php
}
?>
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
<?php include "footer.php"; ?>

