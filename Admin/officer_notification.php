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
                            Notification For Officer
                        </div>
                    </div><br>
                    <div class="card-body" style="background:white;">
                        <div class="" style="background:white;">
                                <div class="col-md-4">
                                    <div class="">
                                        <select class="form-control">
                                            <option>Select</option>
                                            <option value="create">Create</option>
                                            <option value="display">Display</option>
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
                                                <label style="padding: 10px;font-size: 20px;">Subject</label>
                                                <input type="text" class="form-control" name="sub">
                                            </div>
                                            <div class="form-group">
                                                <label style="padding: 10px;font-size: 20px;">Notice Paragraph</label>
                                                <textarea class="form-control" style="width: 100%;height: 300px;"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label style="padding: 10px;font-size: 20px;">Start Date</label>
                                                <input type="date" class="form-control" name="s_date">
                                            </div>
                                            <div class="form-group">
                                                <label style="padding: 10px;font-size: 20px;">End Date</label>
                                                <input type="date" class="form-control" name="e_date">
                                            </div><br>
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
                    <div class="display box card-body" style="background:white;">
                        <div class="card card-success" style="background:white;">
                            <div class="col-md-12">
                                <div class="bottom-section"style="padding: 10px;">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">List Notification</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead style="text-align: center;">
                                                <tr>
                                                    <th>subject</th>
                                                    <th>Messege</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td style="text-align: center;">NDA</td>
                                                    <td style="text-align: justify-all">NDA Exam are scheldule sept month.</td>
                                                    <td style="text-align: center;">02/07/2021</td>
                                                    <td style="text-align: center;">23/07/2021</td>
                                                    <td style="text-align: center;"><button type="button" style="width: 100px;" class="btn btn-sm btn-danger">Delete</button></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">Center Avability</td>
                                                    <td style="text-align: justify-all">Center are Available not due to covid.</td>
                                                    <td style="text-align: center;">22/07/2021</td>
                                                    <td style="text-align: center;">7/08/2021</td>
                                                    <td style="text-align: center;"><button type="button" style="width: 100px;" class="btn btn-sm btn-danger">Delete</button></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">Center Avability</td>
                                                    <td style="text-align: justify-all">Center are Available not due to covid.</td>
                                                    <td style="text-align: center;">22/07/2021</td>
                                                    <td style="text-align: center;">7/08/2021</td>
                                                    <td style="text-align: center;"><button type="button" style="width: 100px;" class="btn btn-sm btn-danger">Delete</button></td>
                                                </tr>
                                                </tbody>
                                                <tfoot style="text-align: center;">
                                                <tr>
                                                    <th>subject</th>
                                                    <th>Messege</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </tfoot>
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
</section>
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
