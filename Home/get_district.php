<?php
$conn = mysqli_connect("localhost","root","","nda_db");

// Check connection
if (mysqli_connect_errno()) {
    ?>
    <script type="text/javascript">console.log("Database Server Not Connected Successfully :<?echo mysqli_connect_error(); ?> ");</script>
    <?php
}else{
    ?>
    <script type="text/javascript">console.log("Database Server  Connected Successfully ");</script>
    <?php
}
?>
<?php
if(!empty($_POST["state_id"])) 
{


    $query =mysqli_query($conn,"SELECT * FROM district WHERE StCode = '" . $_POST["state_id"] . "'");
    ?>
        <option value="">Select District</option>
    <?php
    while($row=mysqli_fetch_array($query))
        {
        ?>
            <option value="<?php echo $row["DistrictName"]; ?>"><?php echo $row["DistrictName"]; ?></option>
        <?php
    }
}
?>
