<?php include "../connection.php"; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

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
                                                <form class="form-group" action="adduploaddoc.php" method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label style="font-size: 24px;">10<sup>th</sup> Marksheet  /  10वीं की मार्कशीट <span style="color: red"> *</span> </label>
                                                        <div class="d-inline-flex">
                                                        <div class="form-group col-5">
                                                            <label style="font-size: 14px;">10<sup>th</sup> Marksheet Number / 10वीं की मार्कशीट नंबर</label>
                                                                 <input type="text" name="mark_num_10" class="form-control" style="width: 300px;"></div>
                                                        <div class="col-12 d-inline-flex" style="padding-top: 4%;">
                                                            <div class="custom-file pmd-custom-file-filled"   style="width: 400px;">
                                                                <input type="file"  class="pmd-custom-file-filled" name="10_mark" id="exampleInputFile" accept="application/pdf" >
                                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>&nbsp;
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <button type="button" class="btn btn-info" style="width: 15%;height:40px;border-radius: 70px;"><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</button>
                                                        </div></div>
                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <label style="font-size: 24px;">12<sup>th</sup> Marksheet  / 12वीं की मार्कशीट <span style="color: red"> *</span> </label>
                                                        <div class="d-inline-flex">
                                                            <div class="form-group col-5">
                                                                <label style="font-size: 14px;">12<sup>th</sup> Marksheet Number / 12वीं की मार्कशीट नंबर</label>
                                                                <input type="text" name="mark_num_12" class="form-control" style="width: 300px;"></div>
                                                            <div class="col-12 d-inline-flex" style="padding-top: 4%;">
                                                                <div class="custom-file pmd-custom-file-filled"   style="width: 400px;">
                                                                    <input type="file"  class="pmd-custom-file-filled" name="12_mark" id="exampleInputFile" accept="application/pdf" >
                                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>&nbsp;
                                                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <button type="button" class="btn btn-info" style="width: 15%;height:40px;border-radius: 70px;"><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</button>
                                                            </div></div>
                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <label style="font-size: 24px;">Domicile Certificate / डोमिसाइल सर्टिफिकेट<span style="color: red"> *</span> </label>
                                                        <div class="d-inline-flex">
                                                            <div class="form-group col-5">
                                                                <label>Domicile Number / डोमिसाइल नंबर</label>
                                                                <input type="text" name="domicile_num" class="form-control" style="width: 300px;"></div>
                                                            <div class="col-12 d-inline-flex"  style="padding-top: 4%;">
                                                                <div class="custom-file pmd-custom-file-filled"   style="width: 400px;">
                                                                    <input type="file"  class="pmd-custom-file-filled" name="domicile_certificate" id="exampleInputFile" accept="application/pdf">
                                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>&nbsp;
                                                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <button type="button" class="btn btn-info" style="width: 15%;height:40px;border-radius: 70px;"><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</button>
                                                            </div></div>
                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <label style="font-size: 24px;">Nationality Certificate  /  राष्ट्रीयता प्रमाणपत्र <span style="color: red"> *</span> </label>
                                                        <div class="d-inline-flex">
                                                            <div class="form-group col-5">
                                                                <label>Nationality Certificate No / राष्ट्रीयता प्रमाणपत्र नंबर</label>
                                                                <input type="text" name="nationality_num" class="form-control" style="width: 300px;"></div>
                                                            <div class="col-12 d-inline-flex" style="padding-top: 4%;">
                                                                <div class="custom-file pmd-custom-file-filled"   style="width: 400px;">
                                                                    <input type="file"  class="pmd-custom-file-filled" name="nationality_certificate" id="exampleInputFile" accept="application/pdf" >
                                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>&nbsp;
                                                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <button type="button" class="btn btn-info" style="width: 15%;height:40px;border-radius: 70px;"><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</button>
                                                            </div></div>
                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <label style="font-size: 24px;">Birth Certificate / जन्म प्रमाणपत्र<span style="color: red"> *</span> </label>
                                                        <div class="col-12 d-inline-flex">
                                                            <div class="custom-file pmd-custom-file-filled" style="width: 758px;">
                                                                <input type="file"  class="pmd-custom-file-filled"   name="birth_certificate" id="exampleInputFile" accept="application/pdf" >
                                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>&nbsp;
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <button type="button" class="btn btn-info" style="width: 13%;height:40px;border-radius: 70px;"><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</button>
                                                            </div>
                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <label style="font-size: 24px;">Adhar Card  / आधार कार्ड<span style="color: red"> *</span> </label>
                                                        <div class="col-12 d-inline-flex">
                                                            <div class="custom-file pmd-custom-file-filled" style="width: 760px;">
                                                                <input type="file"  class="pmd-custom-file-filled"   name="aadhar_card" id="exampleInputFile" accept="application/pdf" >
                                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>&nbsp;
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <button type="button" class="btn btn-info" style="width: 13%;height:40px;border-radius: 70px;"><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</button>
                                                            </div></div>

                                                    <br>

                                                    <div class="form-group">
                                                <label style="font-size: 24px;">PAN Card / पैन कार्ड<span style="color: red"> *</span> </label>
                                                <div class="d-inline-flex">
                                                    <div class="form-group col-5">
                                                        <label>PAN Card Number / पैन कार्ड नंबर</label>
                                                        <input type="text" name="pan_num" class="form-control" style="width: 300px;"></div>
                                                    <div class="col-12 d-inline-flex" style="padding-top: 4%;">
                                                        <div class="custom-file pmd-custom-file-filled"   style="width: 400px;">
                                                            <input type="file"  class="pmd-custom-file-filled" name="pan_card" id="exampleInputFile" accept="application/pdf" >
                                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>&nbsp;
                                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <button type="button" class="btn btn-info" style="width: 15%;height:40px;border-radius: 70px;"><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</button>
                                                    </div></div>
                                            </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <label style="font-size: 24px;">College Bonafide / Letter / कॉलेज बोनाफाइड / पत्र<span style="color: red"> *</span> </label>
                                                        <div class="col-12 d-inline-flex">
                                                            <div class="custom-file pmd-custom-file-filled" style="width: 758px;">
                                                                <input type="file"  class="pmd-custom-file-filled"   name="clg_letter" id="exampleInputFile" accept="application/pdf" >
                                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>&nbsp;
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <button type="button" class="btn btn-info" style="width: 13%;height:40px;border-radius: 70px;"><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</button>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <label style="font-size: 24px;">Risk Certificate / जोखिम प्रमाणपत्र<span style="color: red"> *</span> </label>
                                                        <div class="col-12 d-inline-flex">
                                                            <div class="custom-file pmd-custom-file-filled" style="width: 758px;">
                                                                <input type="file"  class="pmd-custom-file-filled"   name="risk_certificate" id="exampleInputFile" accept="application/pdf" >
                                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>&nbsp;
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <button type="button" class="btn btn-info" style="width: 13%;height:40px;border-radius: 70px;"><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</button>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <label style="font-size: 24px;">Appendix ‘A’ / परिशिष्ट 'अ'<span style="color: red"> *</span> </label>
                                                        <div class="col-12 d-inline-flex">
                                                            <div class="custom-file pmd-custom-file-filled" style="width: 758px;">
                                                                <input type="file"  class="pmd-custom-file-filled"   name="app_a" id="exampleInputFile" accept="application/pdf" >
                                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>&nbsp;
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <button type="button" class="btn btn-info" style="width: 13%;height:40px;border-radius: 70px;"><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</button>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <label style="font-size: 24px;">Appendix ‘C’ / परिशिष्ट 'क'<span style="color: red"> *</span> </label>
                                                        <div class="col-12 d-inline-flex">
                                                            <div class="custom-file pmd-custom-file-filled" style="width: 758px;">
                                                                <input type="file"  class="pmd-custom-file-filled"   name="app_c" id="exampleInputFile" accept="application/pdf">
                                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>&nbsp;
                                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <button type="button" class="btn btn-info" style="width: 13%;height:40px;border-radius: 70px;"><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</button>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <label style="font-size: 24px;">Creamy Layer Certificate / क्रीमी लेयर प्रमाण पत्र<span style="color: red"></span> </label>
                                                        <div class="d-inline-flex">
                                                            <div class="form-group col-5">
                                                                <label>Certificate Number / सर्टिफिकेट नंबर</label>
                                                                <input type="text" name="creamy_layer_num" class="form-control" style="width: 300px;"></div>
                                                            <div class="col-12 d-inline-flex" style="padding-top: 4%;">
                                                                <div class="custom-file pmd-custom-file-filled"   style="width: 400px;">
                                                                    <input type="file"  class="pmd-custom-file-filled" name="creamy_layer_certificate" id="exampleInputFile" accept="application/pdf">
                                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>&nbsp;
                                                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <button type="button" class="btn btn-info" style="width: 15%;height:40px;border-radius: 70px;"><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</button>
                                                            </div>
                                                        </div>
                                                        <p style="color: #E74C3C;">Note : Candidates belonging to OBCs but coming in the ' Creamy Layer ' their uploading their creamy layer certificate if they do not upload their certificate, the form will be rejected.<br>
                                                            ओबीसी से संबंधित लेकिन 'क्रीमी लेयर' में आने वाले उम्मीदवार अपना क्रीमी लेयर प्रमाणपत्र अपलोड कर रहे हैं यदि वे अपना प्रमाणपत्र अपलोड नहीं करते हैं, तो फॉर्म को अस्वीकार कर दिया जाएगा।</p>
                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <label style="font-size: 24px;">Caste Certificate / जाति प्रमाण पत्र<span style="color: red"></span> </label>
                                                        <div class="d-inline-flex">
                                                            <div class="form-group col-5">
                                                                <label>Certificate Number / सर्टिफिकेट नंबर</label>
                                                                <input type="text" name="caste_num" class="form-control" style="width: 300px;"></div>
                                                            <div class="col-12 d-inline-flex" style="padding-top: 4%;">
                                                                <div class="custom-file pmd-custom-file-filled"   style="width: 400px;">
                                                                    <input type="file"  class="pmd-custom-file-filled" name="caste_certificate" id="exampleInputFile" accept="application/pdf" >
                                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>&nbsp;
                                                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <button type="button" class="btn btn-info" style="width: 15%;height:40px;border-radius: 70px;"><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</button>
                                                            </div>
                                                        </div>
                                                        <p style="color: #E74C3C;">Note : Candidates belonging to the SC, ST  category their uploading their caste certificate if they do not upload their certificate, the form will be rejected or considered as a general category.<br>
                                                            एससी, एसटी वर्ग से संबंधित उम्मीदवार अपना जाति प्रमाण पत्र अपलोड कर रहे हैं यदि वे अपना प्रमाण पत्र अपलोड नहीं करते हैं, तो फॉर्म को अस्वीकार कर दिया जाएगा या सामान्य श्रेणी के रूप में माना जाएगा।</p>
                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <label style="font-size: 24px;">National Cadet Corps ( NCC ) Certificate / राष्ट्रीय कैडेट कोर (एनसीसी) प्रमाणपत्र<span style="color: red"> </span> </label>
                                                        <div class="d-inline-flex">
                                                            <div class="form-group col-5">
                                                                <label>Certificate Number / सर्टिफिकेट नंबर</label>
                                                                <input type="text" class="form-control" style="width: 300px;"></div>
                                                            <div class="col-12 d-inline-flex" style="padding-top: 4%;">
                                                                <div class="custom-file pmd-custom-file-filled"   style="width: 400px;">
                                                                    <input type="file"  class="pmd-custom-file-filled" name="photoid" id="exampleInputFile" accept="application/pdf" >
                                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>&nbsp;
                                                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <button type="button" class="btn btn-info" style="width: 15%;height:40px;border-radius: 70px;"><i class="far fa-eye"></i>&nbsp;&nbsp;&nbsp;View</button>
                                                            </div></div>
                                                    </div>
                                                    <br>
                                            </div><br><div class="text-center">
                                                        <button name="submit" class="btn btn-primary" style="width: 30%;">Continue / आगे बढ़ें</button>
                                                    </div>
                                                </form><br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>

<?php include "../footer.php"; ?>