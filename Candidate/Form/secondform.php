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
                                            <h1 class="h4 text-gray-900 mb-4">PART-I REGISTRATION / भाग-I पंजीकरण</h1>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="text-justify" style="border: 1px solid black;">
                                    <div class="col-xl-12 col-lg-12 col-md-12" style="padding-left: 10px;">
                                        <div class="col-12"><br>
                                            <div class="text-center">

                                            </div><br>
                                            <div class="col-xl-12 col-lg-12 col-md-12" style="padding-left: 4%;padding-right: 4%;"><br>
                                            <form class="form-group" action="addsecform.php" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <input type="hidden" name="cad_reg_id" class="form-control" value="<?php echo $cad_id; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label >Photo Identity Card / फोटो पहचान पत्र <span style="color: red">*</span></label>
                                                    <select name="proof" id="" class="form-control">
                                                        <option value="NULL" class="selInstruct"> Select Photo Identity Card </option>
                                                        <option value="School ID Card">School ID Card</option>
                                                        <option value="Aadhaar Card">Aadhaar Card / VID of Aadhaar Card</option>
                                                        <option value="Driving Licence">Driving Licence</option>
                                                        <option value="PAN Card">PAN Card</option>
                                                        <option value="Passport">Passport</option>
                                                        <option value="Photo ID issued by Central">Photo ID issued by Central / State Government </option>
                                                        <option value="Voter ID">Voter ID</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label >Photo Identity Card Number / फोटो पहचान पत्र संख्या <span style="color: red"> *</span></label>
                                                    <input type="text" name="proof_id" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label >Confirm Photo Identity Card Number / फोटो पहचान पत्र संख्या की पुष्टि करें <span style="color: red"> *</span> </label>
                                                    <input type="text" name="c_proof_id"  class="form-control"><br>
                                                    <p style="color:#E74C3C;">Note 1 : Please provide the photo identity card number in Online Application Form and remember to carry the same at the time of Personality Test/Examination venue.</p>
                                                </div><br><br>
                                                <div class="col-xl-12 col-lg-12 col-md-12 d-inline-flex">
                                                <div class="form-group">
                                                    <label >Photo Identity  /  फोटो पहचान <span style="color: red"> *</span> </label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"  style="width:200px;" name="photo"
                                                               id="exampleInputFile" accept="image/jpeg" required>
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                </div><span style="width: 20%;"></span>
                                                <div class="form-group">
                                                    <label >signature / हस्ताक्षरं <span style="color: red"> *</span> </label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" style="width:250px;" name="sign"
                                                               id="exampleInputFile" accept="image/jpeg" required>
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                                </div><br><br>
                                                <div class="form-group">
                                                    <label >Whether Student of Sainik/Military School / क्या आप सैनिक / मिलिटरी स्कूल के विद्यार्थी हैं<span style="color: red"> *</span> </label>
                                                    <select name="military_school_student" id="ndasonjco" class="form-control"><option value="no">No / नहीं</option><option value="yes">Yes / हां   </option></select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Whether Son of JCO / NCO / Other Rank officers and studying in Sainik / Military School / क्या आप जेसीओ / एनसीओ / अन्य‍ रैंक के अधिकारियों के पुत्र हैं और सैनिक/मिलिटरी स्कूल के विद्यार्थी हैं <span style="color: red">*</span> </label>
                                                    <select name="son_military_staff" id="ndasonjco" class="form-control"><option value="no">No / नहीं</option><option value="yes">Yes / हां   </option></select>
                                                </div>
                                                <div class="form-group">
                                                    <label >Whether a student is National Cadet Corps (NCC) candidate  / क्या कोई छात्र राष्ट्रीय कैडेट कोर (एनसीसी) का उम्मीदवार हैा <span style="color: red">*</span> </label>
                                                    <select name="ncc_cad" id="ndasonjco" class="form-control">
                                                        <option value="no">No / नहीं</option>
                                                        <option value="yes">Yes / हां   </option>
                                                    </select>
                                                </div>
                                                <br>
                                                <div class="text-center">
                                                    <button type="submit" name="submit" class="btn btn-primary" style="width: 30%;">Continue / आगे बढ़ें</button>
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
<?php session_destroy(); ?>
<?php include "../footer.php"; ?>