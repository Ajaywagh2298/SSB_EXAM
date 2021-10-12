<?php include "../connection.php"; ?>
<?php session_start(); ?>
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
<div class="container py-5">
    <!-- For demo purpose -->
    <div class="row mb-4">
        <div class="col-lg-10 mx-auto text-center">
            <p class="display-6" style="font-family: Times New Roman;font-size: 30px;color: #1E32FF;"> Payment Windows / भुगतान खिड़की</p>
        </div>
    </div> <!-- End -->
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit Card / क्रेडिट कार्ड</a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#challen" class="nav-link "><i class="fas fa-money-check-alt"></i></i> Challan </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking / नेट बैंकिंग </a> </li>
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form role="form" onsubmit="event.preventDefault()" action="" method="post">
                                <div class="form-group"> <label for="username">
                                        <h6>Card Holder Name / कार्डधारक का नाम <span style="color: red;">*</span></h6>
                                    </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div>
                                <div class="form-group"> <label for="cardNumber">
                                        <h6>Card Number / कार्ड नंबर <span style="color: red;">*</span></h6>
                                    </label>
                                    <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                                        <div class="input-group-append"> <span class="input-group-text text-muted" > <i class="fab fa-cc-visa mx-1" style="color: white;">
                                        </i> <i class="fab fa-cc-mastercard mx-1" style="color: white;"></i>
                                                <i class="fab fa-cc-amex mx-1" style="color: white;"></i> </span> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>Expiration Date / समाप्ति तिथि <span style="color: red;">*</span> </h6>
                                                </span></label>
                                            <div class="input-group"> <input type="tel" placeholder="MM" name="" class="form-control" required>&nbsp;<input type="tel" placeholder="YYYY" name="" class="form-control" required> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4">
                                            <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV <i style="color: #dda20a;" class="fa fa-question-circle d-inline"></i></h6></label>
                                            <input type="password" required class="form-control" maxlength="3"> </div>

                                    </div>
                                </div><p style="color: red;">NOTE: Three digit CV code on the back of your card / नोट: आपके कार्ड के पीछे तीन अंकों का सीवी कोड</p>
                                <div class="card-footer text-center"> <button type="button" class="subscribe btn btn-success"> Confirm Payment / भुगतान की पुष्टि करें </button>
                            </form>
                        </div>
                    </div> <!-- End -->
                    <!-- Paypal info -->
                    <div id="challen" class="tab-pane fade pt-3">
                        <div class="form-group "> <label class="radio-inline">Challan Number / चालान संख्या</label><input type="text" class="form-control"> </div>
                        <div class="form-group "> <label class="radio-inline">Mother Name / मां का नाम</label><input type="text" class="form-control"> </div>
                        <div class="form-group "> <label class="radio-inline">Birth Date / जन्म तिथि </label><input type="date" class="form-control"> </div>
                        <p class="text-center"> <button type="button" class="btn btn-success"><i class="fas fa-check-circle"></i> Submit / प्रस्तुत करे</button> </p>
                        <p class="text-muted">  </p>
                    </div> <!-- End -->
                    <!-- bank transfer info -->
                    <div id="net-banking" class="tab-pane fade pt-3">
                        <div class="form-group "> <label for="Select Your Bank">
                                <h6>Select your Bank / अपना बैंक चुनें</h6>
                            </label> <select class="form-control" id="ccmonth">
                                <option value="" selected disabled> Please select your Bank </option>
                                <option>Allahabad Bank</option>
                                <option>Andhra Bank</option>
                                <option>Bank of Baroda</option>
                                <option>Bank of India</option>
                                <option>Bank of Maharashtra</option>
                                <option>Canara Bank</option>
                                <option>Central Bank of India</option>
                                <option>Corporation Bank</option>
                                <option>Dena Bank</option>
                                <option>Indian Bank</option>
                                <option>Punjab & Sind Bank</option>
                                <option>Punjab National Bank</option>
                                <option>Union Bank of India</option>
                                <option>IDBI Bank Limited</option>
                                <option>State Bank of India</option>
                            </select> </div>
                        <div class="form-group">
                            <p class="text-center"> <button type="button" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment / भुगतान आगे बढ़ें</button> </p>
                        </div>
                        <p class="text-muted"> </p>
                    </div> <!-- End -->
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>


    <?php session_destroy(); ?>
<?php include "../footer.php"; ?>
