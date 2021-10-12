<?php include "../connection.php"; ?>
<?php session_start();
$cad_id = $_SESSION['cad_regist_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">
    <style>
        body{
            -webkit-user-select: none;  /* Chrome all / Safari all */
            -moz-user-select: none;     /* Firefox all */
            -ms-user-select: none;      /* IE 10+ */
            user-select: none;          /* Likely future */
        }
    </style>
</head>

<div class="col-xl-12 col-lg-12 col-md-12 " style="padding: 10px; height: 200px;border-bottom: 0.5px solid #F4F6F6;padding-left: 0px; margin-left: 0px;">
    <div class="col-xl-12 col-lg-12 col-md-12 d-inline-flex">
        <div class=" col-lg-2 float-child">
            <div class="container" style=""><img style="height: 200px;padding-bottom: 10px;padding-left: 0px;" src="img/logo1.png"> </div>
        </div>
        <div class="col-xl-8 col-lg-12 col-md-8" style="text-align: center;">
            <div class="container" style="padding-top: 20px;">
                <p style="font-size: 60px;color: #5499C7;font-family: Times New Roman;margin-bottom: 0px;">National Defence Academy</p>
                <p style="font-size: 30px;font-family: Times New Roman;color: #2d4373;"> Union Public Service Commission </p>
            </div>
        </div>
        <div class="col-lg-2 float-child">
            <div class="container" style="200px;"><img style="height: 200px;padding-bottom: 10px;padding-left: 0px;" src="img/img3.png"> </div>
        </div>
    </div>
</div>

<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-10 col-md-10">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12" >
                            <div class="login-form" >
                                <div class="text-center">
                                    <p class="text-center" style="color:#284EFF;font-size: 30px;font-family: Times New Roman;" >
                                        National Defence Academy  Examination - 2021<br>
                                        राष्ट्रीय रक्षा अकादमी परीक्षा  - 2021
                                    </p>
                                </div>
                                <div class="text-justify" style="border: 1px solid black;">
                                    <div class="col-xl-12 col-lg-12 col-md-12" style="padding-left: 10px;"><br>
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">PART-II REGISTRATION / भाग-II पंजीकरण</h1>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="text-justify" style="border: 1px solid black;">
                                    <div class="col-xl-12 col-lg-12 col-md-12" style="padding-left: 10px;">
                                        <div class="col-12"><br>
                                            <div class="text-center">

                                            </div><br>
                                            <div class="col-xl-12 col-lg-12 col-md-12" style="padding-left: 4%;padding-right: 4%;"><br>
                                                <form class="form-group" action="addform2.php" method="post">
                                                    <div class="form-group">
                                                        <input type="hidden" name="cad_re_id" class="form-control" value="<?php echo $cad_id ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label >Exam Center Selection I / परीक्षा केंद्र चयन I <span style="color: red">*</span></label>
                                                        <select name="center1" id="" class="form-control">
                                                            <option value="0" class="selInstruct"> Select</option>
                                                            <option value="agartala">Agartala</option>
                                                            <option value="bilaspur">Bilaspur</option>
                                                            <option value="agra">Agra</option>
                                                            <option value="chandigarh"> Chandigarh</option>
                                                            <option value="ahmedabad"> Ahmedabad</option>
                                                            <option value="chennai"> Chennai</option>
                                                            <option value="aizwal">Aizwal</option>
                                                            <option value="coimbatore">Coimbatore</option>
                                                            <option value="aligarh">Aligarh</option>
                                                            <option value="cuttack"> Cuttack</option>
                                                            <option value="almora"> Almora</option>
                                                            <option value="delhi"> Delhi</option>
                                                            <option value="ananthapur"> Ananthapur</option>
                                                            <option value="agartala">Dharwad</option>
                                                            <option value="aurangabad"> Aurangabad</option>
                                                            <option value="dispur"> Dispur</option>
                                                            <option value="bareilly"> Bareilly</option>
                                                            <option value="faridabad">Faridabad</option>
                                                            <option value="bengaluru"> Bengaluru</option>
                                                            <option value="gangtok">Gangtok</option>
                                                            <option value="jorhat"> Jorhat</option>
                                                            <option value="garwhal"> Garwhal (Srinagar)</option>
                                                            <option value="bhopal"> Bhopal</option>
                                                            <option value="gautam budh nagar"> Gautam Budh Nagar</option>
                                                            <option value="ghaziabad">Ghaziabad</option>
                                                            <option value="gurgaon">Gurgaon</option>
                                                            <option value="gorakhpur">Gorakhpur</option>
                                                            <option value="gwalior">Gwalior</option>
                                                            <option value="hyderabad">Hyderabad</option>
                                                            <option value="imphal">Imphal</option>
                                                            <option value="indore">Indore</option>
                                                            <option value="itanagar">Itanagar</option>
                                                            <option value="jabalpur">Jabalpur</option>
                                                            <option value="jaipur"> Jaipur</option>
                                                            <option value="jammu">Jammu</option>
                                                            <option value="jodhpur">Jodhpur</option>
                                                            <option value="kochi"> Kochi</option>
                                                            <option value="kohima">Kohima</option>
                                                            <option value="kolkata"> Kolkata</option>
                                                            <option value="kozhikode">Kozhikode</option>
                                                            <option value="leh">Leh</option>
                                                            <option value="lucknow">Lucknow</option>
                                                            <option value="ludhiana">Ludhiana</option>
                                                            <option value="madhurai">Madhurai</option>
                                                            <option value="mysuru">Mysuru</option>
                                                            <option value="mumbai">Mumbai</option>
                                                            <option value="nagpur">Nagpur</option>
                                                            <option value="sambalpur">Sambalpur</option>
                                                            <option value="navi mumbai">Navi Mumbai</option>
                                                            <option value="shillong">Shillong</option>
                                                            <option value="panaji">Panaji (Goa)</option>
                                                            <option value="shimla">Shimla</option>
                                                            <option value="patna">Patna</option>
                                                            <option value="port blair">Port Blair</option>
                                                            <option value="srinagar">Srinagar</option>
                                                            <option value="prayagraj">Prayagraj (Allahabad)</option>
                                                            <option value="thane">Thane</option>
                                                            <option value="puducherry">Puducherry</option>
                                                            <option value="thiruvananthapuram">Thiruvananthapuram</option>
                                                            <option value="pune">Pune</option>
                                                            <option value="tiruchirapalli">Tiruchirapalli</option>
                                                            <option value="raipur">Raipur</option>
                                                            <option value="tirupati">Tirupati</option>
                                                            <option value="rajkot">Rajkot</option>
                                                            <option value="udaipur">Udaipur</option>
                                                            <option value="ranchi">Ranchi</option>
                                                            <option value="varanasi">Varanasi</option>
                                                            <option value="vellore">Vellore</option>
                                                            <option value="agartala">Vijayawada</option>
                                                            <option value="vishakhapatnam">Vishakhapatnam</option>
                                                            <option value="warangal">Warangal</option>
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label >Exam Center Selection II / परीक्षा केंद्र चयन II <span style="color: red">*</span></label>
                                                        <select name="center2" id="" class="form-control">
                                                            <option value="0" class="selInstruct"> Select</option>
                                                            <option value="agartala">Agartala</option>
                                                            <option value="bilaspur">Bilaspur</option>
                                                            <option value="agra">Agra</option>
                                                            <option value="chandigarh"> Chandigarh</option>
                                                            <option value="ahmedabad"> Ahmedabad</option>
                                                            <option value="chennai"> Chennai</option>
                                                            <option value="aizwal">Aizwal</option>
                                                            <option value="coimbatore">Coimbatore</option>
                                                            <option value="aligarh">Aligarh</option>
                                                            <option value="cuttack"> Cuttack</option>
                                                            <option value="almora"> Almora</option>
                                                            <option value="delhi"> Delhi</option>
                                                            <option value="ananthapur"> Ananthapur</option>
                                                            <option value="agartala">Dharwad</option>
                                                            <option value="aurangabad"> Aurangabad</option>
                                                            <option value="dispur"> Dispur</option>
                                                            <option value="bareilly"> Bareilly</option>
                                                            <option value="faridabad">Faridabad</option>
                                                            <option value="bengaluru"> Bengaluru</option>
                                                            <option value="gangtok">Gangtok</option>
                                                            <option value="jorhat"> Jorhat</option>
                                                            <option value="garwhal"> Garwhal (Srinagar)</option>
                                                            <option value="bhopal"> Bhopal</option>
                                                            <option value="gautam budh nagar"> Gautam Budh Nagar</option>
                                                            <option value="ghaziabad">Ghaziabad</option>
                                                            <option value="gurgaon">Gurgaon</option>
                                                            <option value="gorakhpur">Gorakhpur</option>
                                                            <option value="gwalior">Gwalior</option>
                                                            <option value="hyderabad">Hyderabad</option>
                                                            <option value="imphal">Imphal</option>
                                                            <option value="indore">Indore</option>
                                                            <option value="itanagar">Itanagar</option>
                                                            <option value="jabalpur">Jabalpur</option>
                                                            <option value="jaipur"> Jaipur</option>
                                                            <option value="jammu">Jammu</option>
                                                            <option value="jodhpur">Jodhpur</option>
                                                            <option value="kochi"> Kochi</option>
                                                            <option value="kohima">Kohima</option>
                                                            <option value="kolkata"> Kolkata</option>
                                                            <option value="kozhikode">Kozhikode</option>
                                                            <option value="leh">Leh</option>
                                                            <option value="lucknow">Lucknow</option>
                                                            <option value="ludhiana">Ludhiana</option>
                                                            <option value="madhurai">Madhurai</option>
                                                            <option value="mysuru">Mysuru</option>
                                                            <option value="mumbai">Mumbai</option>
                                                            <option value="nagpur">Nagpur</option>
                                                            <option value="sambalpur">Sambalpur</option>
                                                            <option value="navi mumbai">Navi Mumbai</option>
                                                            <option value="shillong">Shillong</option>
                                                            <option value="panaji">Panaji (Goa)</option>
                                                            <option value="shimla">Shimla</option>
                                                            <option value="patna">Patna</option>
                                                            <option value="port blair">Port Blair</option>
                                                            <option value="srinagar">Srinagar</option>
                                                            <option value="prayagraj">Prayagraj (Allahabad)</option>
                                                            <option value="thane">Thane</option>
                                                            <option value="puducherry">Puducherry</option>
                                                            <option value="thiruvananthapuram">Thiruvananthapuram</option>
                                                            <option value="pune">Pune</option>
                                                            <option value="tiruchirapalli">Tiruchirapalli</option>
                                                            <option value="raipur">Raipur</option>
                                                            <option value="tirupati">Tirupati</option>
                                                            <option value="rajkot">Rajkot</option>
                                                            <option value="udaipur">Udaipur</option>
                                                            <option value="ranchi">Ranchi</option>
                                                            <option value="varanasi">Varanasi</option>
                                                            <option value="vellore">Vellore</option>
                                                            <option value="agartala">Vijayawada</option>
                                                            <option value="vishakhapatnam">Vishakhapatnam</option>
                                                            <option value="warangal">Warangal</option>
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label >Exam Center Selection III / परीक्षा केंद्र चयन III <span style="color: red">*</span></label>
                                                        <select name="center3" id="" class="form-control">
                                                            <option value="0" class="selInstruct"> Select</option>
                                                            <option value="agartala">Agartala</option>
                                                            <option value="bilaspur">Bilaspur</option>
                                                            <option value="agra">Agra</option>
                                                            <option value="chandigarh"> Chandigarh</option>
                                                            <option value="ahmedabad"> Ahmedabad</option>
                                                            <option value="chennai"> Chennai</option>
                                                            <option value="aizwal">Aizwal</option>
                                                            <option value="coimbatore">Coimbatore</option>
                                                            <option value="aligarh">Aligarh</option>
                                                            <option value="cuttack"> Cuttack</option>
                                                            <option value="almora"> Almora</option>
                                                            <option value="delhi"> Delhi</option>
                                                            <option value="ananthapur"> Ananthapur</option>
                                                            <option value="agartala">Dharwad</option>
                                                            <option value="aurangabad"> Aurangabad</option>
                                                            <option value="dispur"> Dispur</option>
                                                            <option value="bareilly"> Bareilly</option>
                                                            <option value="faridabad">Faridabad</option>
                                                            <option value="bengaluru"> Bengaluru</option>
                                                            <option value="gangtok">Gangtok</option>
                                                            <option value="jorhat"> Jorhat</option>
                                                            <option value="garwhal"> Garwhal (Srinagar)</option>
                                                            <option value="bhopal"> Bhopal</option>
                                                            <option value="gautam budh nagar"> Gautam Budh Nagar</option>
                                                            <option value="ghaziabad">Ghaziabad</option>
                                                            <option value="gurgaon">Gurgaon</option>
                                                            <option value="gorakhpur">Gorakhpur</option>
                                                            <option value="gwalior">Gwalior</option>
                                                            <option value="hyderabad">Hyderabad</option>
                                                            <option value="imphal">Imphal</option>
                                                            <option value="indore">Indore</option>
                                                            <option value="itanagar">Itanagar</option>
                                                            <option value="jabalpur">Jabalpur</option>
                                                            <option value="jaipur"> Jaipur</option>
                                                            <option value="jammu">Jammu</option>
                                                            <option value="jodhpur">Jodhpur</option>
                                                            <option value="kochi"> Kochi</option>
                                                            <option value="kohima">Kohima</option>
                                                            <option value="kolkata"> Kolkata</option>
                                                            <option value="kozhikode">Kozhikode</option>
                                                            <option value="leh">Leh</option>
                                                            <option value="lucknow">Lucknow</option>
                                                            <option value="ludhiana">Ludhiana</option>
                                                            <option value="madhurai">Madhurai</option>
                                                            <option value="mysuru">Mysuru</option>
                                                            <option value="mumbai">Mumbai</option>
                                                            <option value="nagpur">Nagpur</option>
                                                            <option value="sambalpur">Sambalpur</option>
                                                            <option value="navi mumbai">Navi Mumbai</option>
                                                            <option value="shillong">Shillong</option>
                                                            <option value="panaji">Panaji (Goa)</option>
                                                            <option value="shimla">Shimla</option>
                                                            <option value="patna">Patna</option>
                                                            <option value="port blair">Port Blair</option>
                                                            <option value="srinagar">Srinagar</option>
                                                            <option value="prayagraj">Prayagraj (Allahabad)</option>
                                                            <option value="thane">Thane</option>
                                                            <option value="puducherry">Puducherry</option>
                                                            <option value="thiruvananthapuram">Thiruvananthapuram</option>
                                                            <option value="pune">Pune</option>
                                                            <option value="tiruchirapalli">Tiruchirapalli</option>
                                                            <option value="raipur">Raipur</option>
                                                            <option value="tirupati">Tirupati</option>
                                                            <option value="rajkot">Rajkot</option>
                                                            <option value="udaipur">Udaipur</option>
                                                            <option value="ranchi">Ranchi</option>
                                                            <option value="varanasi">Varanasi</option>
                                                            <option value="vellore">Vellore</option>
                                                            <option value="agartala">Vijayawada</option>
                                                            <option value="vishakhapatnam">Vishakhapatnam</option>
                                                            <option value="warangal">Warangal</option>
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="text-center">
                                                        <button name="submit" type=submit" class="btn btn-primary" style="width: 30%;">Continue / आगे बढ़ें</button>
                                                    </div>
                                                </form><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center"><br>
                                    <font color="red"><strong>All entries in the page are mandatory / पेज में सभी प्रविष्टियां अनिवार्य हैं</strong></font>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>

    <?php include "../footer.php"; ?>
