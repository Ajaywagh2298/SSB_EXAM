<?php include "header.php"; ?>
<?php $t = 50; ?>
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
<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                                <div class="text-left">
                                    <h1 class="h4 text-gray-900 mb-4">Test Mark sheet</h1>
                                </div>
                                <div class="text-left" style="width: 300px;">
                                    <select class="form-control">
                                        <option>Select Test</option>
                                        <option value="group-discussion">Group Discussion</option>
                                        <option value="group-planning-exercise">Group Planning Exercise (Military Planning Exercise)</option>
                                        <option value="progressive-group-tasks">Progressive Group Tasks (PGT)</option>
                                        <option value="half-group-tasks">Half Group Tasks</option>
                                        <option value="individual-obstacles">Individual Obstacles </option>
                                        <option value="group-obstacles-race-or-snake-race">Group Obstacles Race or Snake Race</option>
                                        <option value="command-task">Command Task</option>
                                        <option value="lecturette">Lecturette</option>
                                        <option value="final-group-sask">Final Group Task</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group-discussion box container-login">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card shadow-sm my-5">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="login-form">
                                                    <div class="text-center">
                                                        <h1 class="h4 text-gray-900 mb-4">Group Discussion</h1>
                                                    </div>
                                                    <form>
                                                        <table class="table align-items-center table-flush" id="dataTable">
                                                            <thead class="thead-light text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </thead>
                                                            <tfoot class="text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </tfoot>
                                                            <tbody>
                                                            <tr><td>1</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>2</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?> </td>
                                                            </tr>
                                                            <tr><td>3</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"> <?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>4</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"> <?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>5</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"> <?php echo $t; ?> </td>
                                                            </tr>
                                                            <tr><td>6</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"> <?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>7</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"> <?php echo $t; ?> </td>
                                                            </tr>
                                                            <tr><td>8</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>9</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>10</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>11</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>12</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>13</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>14</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>15</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>16</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>17</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>18</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>19</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>20</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>21</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>22</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>23</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>24</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>25</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>26</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>27</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>28</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>29</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>30</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                    <hr>
                                                    <div class="text-center">
                                                        <button class="btn btn-info" name="submit1"  style="width: 300px;"><i class="fas fa-check-circle"></i> Add </button>
                                                    </div>
                                                    <div class="text-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group-planning-exercise box container-login">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card shadow-sm my-5">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="login-form">
                                                    <div class="text-center">
                                                        <h1 class="h4 text-gray-900 mb-4">Group Planning Exercise (Military Planning Exercise)</h1>
                                                    </div>
                                                    <form>
                                                        <table class="table align-items-center table-flush" id="dataTable">
                                                            <thead class="thead-light text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </thead>
                                                            <tfoot class="text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </tfoot>
                                                            <tbody>
                                                            <tr><td>1</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>2</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>3</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>4</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>5</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>6</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>7</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>8</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>9</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>10</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>11</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>12</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>13</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>14</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>15</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>16</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>17</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>18</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>19</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>20</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>21</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>22</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>23</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>24</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>25</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>26</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>27</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>28</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>29</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>30</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                    <hr>
                                                    <div class="text-center">
                                                        <button class="btn btn-info" name="submit1"  style="width: 300px;"><i class="fas fa-check-circle"></i> Add </button>
                                                    </div>
                                                    <div class="text-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="progressive-group-tasks box container-login">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card shadow-sm my-5">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="login-form">
                                                    <div class="text-center">
                                                        <h1 class="h4 text-gray-900 mb-4">Progressive Group Tasks (PGT)</h1>
                                                    </div>
                                                    <form>
                                                        <table class="table align-items-center table-flush" id="dataTable">
                                                            <thead class="thead-light text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </thead>
                                                            <tfoot class="text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </tfoot>
                                                            <tbody>
                                                            <tr><td>1</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>2</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>3</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>4</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>5</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>6</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>7</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>8</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>9</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>10</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>11</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>12</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>13</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>14</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>15</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>16</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>17</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>18</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>19</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>20</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>21</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>22</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>23</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>24</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>25</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>26</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>27</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>28</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>29</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>30</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                    <hr>
                                                    <div class="text-center">
                                                        <button class="btn btn-info" name="submit1"  style="width: 300px;"><i class="fas fa-check-circle"></i> Add </button>
                                                    </div>
                                                    <div class="text-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="half-group-tasks box container-login">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card shadow-sm my-5">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="login-form">
                                                    <div class="text-center">
                                                        <h1 class="h4 text-gray-900 mb-4">Half Group Tasks</h1>
                                                    </div>
                                                    <form>
                                                        <table class="table align-items-center table-flush" id="dataTable">
                                                            <thead class="thead-light text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </thead>
                                                            <tfoot class="text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </tfoot>
                                                            <tbody>
                                                            <tr><td>1</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>2</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>3</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>4</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>5</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>6</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>7</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>8</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>9</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>10</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>11</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>12</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>13</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>14</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>15</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>16</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>17</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>18</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>19</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>20</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>21</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>22</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>23</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>24</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>25</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>26</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>27</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>28</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>29</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>30</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                    <hr>
                                                    <div class="text-center">
                                                        <button class="btn btn-info" name="submit1"  style="width: 300px;"><i class="fas fa-check-circle"></i> Add </button>
                                                    </div>
                                                    <div class="text-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="individual-obstacles box container-login">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card shadow-sm my-5">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="login-form">
                                                    <div class="text-center">
                                                        <h1 class="h4 text-gray-900 mb-4">Individual Obstacles</h1>
                                                    </div>
                                                    <form>
                                                        <table class="table align-items-center table-flush" id="dataTable">
                                                            <thead class="thead-light text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </thead>
                                                            <tfoot class="text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </tfoot>
                                                            <tbody>
                                                            <tr><td>1</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>2</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?> </td>
                                                            </tr>
                                                            <tr><td>3</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"> <?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>4</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"> <?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>5</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"> <?php echo $t; ?> </td>
                                                            </tr>
                                                            <tr><td>6</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"> <?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>7</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"> <?php echo $t; ?> </td>
                                                            </tr>
                                                            <tr><td>8</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>9</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>10</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>11</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>12</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>13</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>14</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>15</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>16</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>17</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>18</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>19</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>20</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>21</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>22</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>23</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>24</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>25</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>26</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>27</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>28</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>29</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>30</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                    <hr>
                                                    <div class="text-center">
                                                        <button class="btn btn-info" name="submit1"  style="width: 300px;"><i class="fas fa-check-circle"></i> Add </button>
                                                    </div>
                                                    <div class="text-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group-obstacles-race-or-snake-race box container-login">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card shadow-sm my-5">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="login-form">
                                                    <div class="text-center">
                                                        <h1 class="h4 text-gray-900 mb-4">Group Obstacles Race or Snake Race</h1>
                                                    </div>
                                                    <form>
                                                        <table class="table align-items-center table-flush" id="dataTable">
                                                            <thead class="thead-light text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </thead>
                                                            <tfoot class="text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </tfoot>
                                                            <tbody>
                                                            <tr><td>1</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>2</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>3</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>4</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>5</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>6</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>7</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>8</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>9</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>10</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>11</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>12</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>13</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>14</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>15</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>16</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>17</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>18</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>19</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>20</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>21</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>22</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>23</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>24</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>25</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>26</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>27</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>28</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>29</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>30</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                    <hr>
                                                    <div class="text-center">
                                                        <button class="btn btn-info" name="submit1"  style="width: 300px;"><i class="fas fa-check-circle"></i> Add </button>
                                                    </div>
                                                    <div class="text-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="command-task box container-login">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card shadow-sm my-5">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="login-form">
                                                    <div class="text-center">
                                                        <h1 class="h4 text-gray-900 mb-4">Command Task</h1>
                                                    </div>
                                                    <form>
                                                        <table class="table align-items-center table-flush" id="dataTable">
                                                            <thead class="thead-light text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </thead>
                                                            <tfoot class="text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </tfoot>
                                                            <tbody>
                                                            <tr><td>1</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>2</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>3</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>4</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>5</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>6</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>7</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>8</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>9</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>10</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>11</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>12</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>13</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>14</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>15</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>16</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>17</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>18</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>19</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>20</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>21</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>22</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>23</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>24</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>25</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>26</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>27</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>28</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>29</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>30</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                    <hr>
                                                    <div class="text-center">
                                                        <button class="btn btn-info" name="submit1"  style="width: 300px;"><i class="fas fa-check-circle"></i> Add </button>
                                                    </div>
                                                    <div class="text-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lecturette box container-login">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card shadow-sm my-5">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="login-form">
                                                    <div class="text-center">
                                                        <h1 class="h4 text-gray-900 mb-4">Lecturette</h1>
                                                    </div>
                                                    <form>
                                                        <table class="table align-items-center table-flush" id="dataTable">
                                                            <thead class="thead-light text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </thead>
                                                            <tfoot class="text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </tfoot>
                                                            <tbody>
                                                            <tr><td>1</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>2</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>3</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>4</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>5</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>6</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>7</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>8</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>9</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>10</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>11</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>12</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>13</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>14</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>15</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>16</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>17</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>18</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>19</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>20</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>21</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>22</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>23</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>24</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>25</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>26</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>27</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>28</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>29</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>30</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                    <hr>
                                                    <div class="text-center">
                                                        <button class="btn btn-info" name="submit1"  style="width: 300px;"><i class="fas fa-check-circle"></i> Add </button>
                                                    </div>
                                                    <div class="text-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="final-group-sask box container-login">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card shadow-sm my-5">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="login-form">
                                                    <div class="text-center">
                                                        <h1 class="h4 text-gray-900 mb-4">Final Group Task</h1>
                                                    </div>
                                                    <form>
                                                        <table class="table align-items-center table-flush" id="dataTable">
                                                            <thead class="thead-light text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </thead>
                                                            <tfoot class="text-center">
                                                            <tr><th></th>
                                                                <th>Chest Number</th>
                                                                <th>Obtained Mark</th>
                                                                <th>Total Mark</th>
                                                            </tr>
                                                            </tfoot>
                                                            <tbody>
                                                            <tr><td>1</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>2</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>3</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>4</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>5</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>6</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>7</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>8</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>9</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>10</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>11</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>12</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>13</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>14</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>15</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>16</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>17</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>18</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>19</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>20</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>21</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>22</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>23</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>24</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>25</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>26</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>27</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>28</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>29</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            <tr><td>30</td>
                                                                <td class="text-center"><input type="text" name="" class="form-control"></td>
                                                                <td class="text-center"><input type="tel" name="" class="form-control"></td>
                                                                <td class="text-center"><?php echo $t; ?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                    <hr>
                                                    <div class="text-center">
                                                        <button class="btn btn-info" name="submit1"  style="width: 300px;"><i class="fas fa-check-circle"></i> Add </button>
                                                    </div>
                                                    <div class="text-center">
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
        </div>
    </div>
</div>
<?php include "footer.php"; ?>


