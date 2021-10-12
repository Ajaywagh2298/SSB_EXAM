<?php include "connection.php"; ?>
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
        .parent {display: block;position: relative;float: left;line-height: 70px;background-color: #ff3838;border-right:#CCC 1px solid;}
        .parent a{margin: 10px;color: #FFFFFF;text-decoration: none;}
        .parent:hover > ul {display:block;position:absolute;}
        .child {display: none;}
        .child li {background-color: #3e65aa;line-height: 30px;border-bottom:#CCC 1px solid;border-right:#CCC 1px solid; width:100%;}
        .child li a{color: #000000;}
        ul{list-style: none;margin: 0;padding: 0px; min-width:10em;}
        ul ul ul{left: 100%;top: 0;margin-left:1px;}
        .expand{font-size:12px;float:right;margin-right:5px;}
    </style>
</head>

<body style="background: white;">
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
<div class="row" style="padding-left: 12px; box-shadow: 10px 15px 20px 0px #EAECEE;">
    <ul id="menu" align="left">
        <li class="parent"><a href="index.php" style="text-decoration:none;"><b>Home / मुखपृष्ठ</b></a></li>
        <li class="parent"><a href="" style="text-decoration:none;"><b>Guidelines to the Candidates / उम्मीदवारों के लिए दिशा-निर्देश</b></a></li>
        <li class="parent"><a href="" style="text-decoration:none;"><b>FAQ / सामान्य प्रश्न</b></a></li>
        <li class="parent"><a href="" style="text-decoration:none;"><b>View / Print Application देखें / प्रिंट आवेदन</b></a></li>
        <li class="parent"><a href="Home/contact.php" style="text-decoration:none;"><b>Contact Us / हमसे संपर्क करें</b></a></li>
        <li class="parent"><a href="Officer/login.php" style="text-decoration:none;"><b>Officer Login / अधिकारी लॉगिन</b></a></li>
    </ul>
</div>
<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- Modal basic -->
                                        <div class="card mb-4">
                                            <div class="text-center" style="text-align: center;padding-top: 10px;">
                                                <p class="m-0 font-weight-bold text-primary" style="font-size:25px;">Notification</p>
                                            </div>
                                            <div class="card-body">


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6" >
                                        <!-- Modal with scrolling long content -->
                                        <div class="card mb-4"  style="height: 300px;">
                                            <div class="text-center" style="text-align: center;padding-top: 10px;">
                                                <p class="m-0 font-weight-bold text-primary" style="font-size:25px;">Login</p>
                                            </div><br><br>
                                            <div class="card-body"  style="text-align: center;padding-top: 10px;">
                                                <a href="Candidate/login.php"><button type="button" class="btn btn-secondary" style="width: 300px;">Login</button> </a>
                                            </div>
                                            <div class="text-center">
                                                <p style="font-size: x-large;color: #28a745;">All ready Registration complete Candidate login Here</p>
                                            </div><br><br>
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
<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                                <table class="table align-items-center">

                                    <tr class="thead-light" align="center">
                                        <td nowrap style="font-size:14px;">
                                            <strong>Examination Code <br/>
                                                परीक्षा कोड</strong>
                                        </td>
                                        <td nowrap style="font-size:14px;">
                                            <strong>Examination <br/>
                                                परीक्षा</strong>
                                        </td>
                                        <td nowrap style="font-size:14px;">
                                            <strong>Year<br/>
                                                वर्ष </strong>
                                        </td>
                                        <td nowrap style="font-size:14px;">
                                            <strong>Notice Number<br/>
                                                नोटिस संख्या</strong>
                                        </td>
                                        <td nowrap style="font-size:14px;">
                                            <strong>Notice Date<br/>
                                                नोटिस की तिथि</strong>
                                        </td >
                                        <td nowrap style="font-size:14px;">
                                            <strong>Closing Date <br/>
                                                अन्तिम तिथि
                                            </strong>    </td>
                                        <td nowrap style="font-size:14px;color:#191970;";>
                                            <strong>Part-I Registration<br/>
                                                भाग- I पंजीकरण</strong>
                                        </td>
                                        <td nowrap style="font-size:14px;color:#191970;";>
                                            <strong>Part-II Registration<br/>
                                                भाग- II पंजीकरण</strong>
                                        </td>
                                    </tr>
                                    <tr align=center style='height:60px;'><td>NDA</td>
                                        <td align=center>National Defence Academy  Examination <br/>राष्ट्रीय रक्षा अकादमी परीक्षा</td>
                                        <td>2021</td><td>&nbsp;10/2021-NDA-II</td><td><font color='green'><strong>09-06-2021</strong></font></td>
                                        <td><strong><font color='red'>29-06-2021<br/></font></strong></td>
                                        <td><a href="Candidate/Form/agree.php"><button type="button" class="btn btn-info">Click Here for PART I <br/>
                                                    भाग- I के लिए यहां क्लिक करें</button></a></td>
                                        <td><a href="Candidate/Form/login.php" ><button type="button" class="btn btn-success"> Click Here for Part II <br/>
                                                    भाग- II के लिए यहां क्लिक करें </button></a></td>
                                    </tr>
                                    <tr align=center style='height:60px;'><td>NDAII</td>
                                        <td align=center>National Defence Academy Examination (II) <br/>राष्ट्रीय रक्षा अकादमी परीक्षा (II)</td>
                                        <td>2021</td><td>&nbsp;10/2021-NDA-II</td><td><font color='green'><strong>08-11-2021</strong></font></td>
                                        <td><strong><font color='red'>6-12-2021<br/></font></strong></td>
                                        <td><a href=""><button type="submit" class="btn btn-info" disabled>Click Here for PART I <br/>
                                                भाग- I के लिए यहां क्लिक करें</button></a></td>
                                        <td><a href="#" ><button type="button" class="btn btn-success" disabled> Click Here for Part II <br/>
                                                भाग- II के लिए यहां क्लिक करें </button></a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Login Content -->
<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-10">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-22">
                            <div class="login-form">
                                <div class="text-justify">
                                    <p class="text-center" style="color: #7d5fff;font-size: 20px;"><b>NOTICE</b></p>
                                    <div  style=" margin-left:100px; margin-right:100px; margin-top:8px; color:#FF8C00;font-size:16px;">Applicants should note that there will be a ceiling on the number of candidates allotted to each of the Centres except Chennai, Dispur, Kolkata and Nagpur. Allotment of Centres will be on the 'first-apply-first allot' basis, and once the capacity of a particular Centre is attained, the same will be frozen. Applicants are, thus, advised that they may apply early so that they could get a Centre of their choice.
                                            <br><br/>आवेदकों को ध्यान देना चाहिए कि चेन्नई, दिसपुर, कोलकाता और नागपुर को छोड़कर प्रत्येक केंद्र में आवंटित उम्मीदवारों की संख्या सीमित होगी । केन्द्रों का आवंटन 'पहले आवेदन -पहले आवंटन' के आधार पर किया जाएगा, और केंद्र की निर्धारित सीटें भर जाने पर इसे रोक दिया जाएगा । आवेदकों को इस प्रकार सलाह दी जाती है, कि वे जल्दी आवेदन करे जिससे वे अपनी पसंद का केंद्र ले सके ।</div>
                                    <br/><div style=" margin-left:100px; margin-right:100px; margin-top:10px; font-size:15px; color:#FF0000;">NB : Notwithstanding the aforesaid provision, The Commission reserve the right to change the Centres at their discretion if the situation demands. विशेष टिप्पणी : उक्त प्रावधान के होते हुए भी स्थिति के अनुसार, आयोग अपने विवेक पर केन्द्रों को बदलने का अधिकार सुरक्षित रखता
                                            है।</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- helli -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/ruang-admin.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
</body>


<!-- ******THIS IS THE END OF INDEX FILE OF SSB EXAM PROJECT********** -->
</html>
