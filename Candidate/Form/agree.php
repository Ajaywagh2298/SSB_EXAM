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
        body{
            -webkit-user-select: none;  /* Chrome all / Safari all */
            -moz-user-select: none;     /* Firefox all */
            -ms-user-select: none;      /* IE 10+ */
            user-select: none;          /* Likely future */
        }
    </style>
</head>
<body>
<div class="col-xl-12 col-lg-12 col-md-12" style="padding: 10px; height: 30%;border-bottom: 0.5px solid #F4F6F6;padding-left: 0px; margin-left: 0px;width: 100%;">
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

<div class="container-login" >
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-08 col-md-08">
            <div class="card my-5">
                <div class="card p-0">
                    <div class="row">
                        <div class="col-lg-12 text-center" style="padding-bottom:5%;border-width: 2px; border-width: 5px;">
                            <div class="login-form">
                                <div class="text-center" >
                                    <p class="text-center" style="color:#284EFF;font-size: 30px;font-family: Times New Roman;" >
                                        National Defence Academy  Examination - 2021<br>
                                        राष्ट्रीय रक्षा अकादमी परीक्षा  - 2021
                                    </p>
                                    <div class="text-center" style="color:black; text-decoration: underline;"> <b>
                                            <p style="font-size: 20px;font-family: Times New Roman;">Important Instructions to fill Online Application Form<br></p>
                                            <p style="font-size: 20px;font-family: Times New Roman;">ऑनलाइन आवेदन - प्रपत्र भरने के बारे में महत्वपूर्ण अनुदेश<p>
                                        </b></p>
                                    </div>
                                <div class="text-justify"   style="color:black;padding-left: 10px;">
                                    <div class="col-xl-12 col-lg-12 col-md-12" style="border: 1px solid black;padding-right: 5%;padding-left: 2%;"><br>
                                    <p style="color:black"><ol>
                                        <li>Candidates are advised to go through the instructions carefully before filling up the application form.<br>
                                            उम्मीदवारों को सुझाव दिया जाता है कि वे आवेदन प्रपत्र भरने से पूर्व अनुदेशों को ध्यानपूर्वक पढ़ लें।
                                        </li><br>
                                            <li>Online submission of application can only be made at website<u> https://upsconline.nic.in</u>. Detailed instructions are available at the site. Candidate should read the instructions carefully before making any entry or selecting options. Candidate should supply all the required details while filling up the online form. Mandatory fields are marked with<span style="color: red;">  * ( asterisk ) </span> sign.<br>
                                            आवेदन पत्र को केवल <u>https://upsconline.nic.in</u> वेबसाइट पर ऑनलाइन जमा किया जा सकता है। विस्तृत अनुदेश वेबसाइट पर उपलब्ध हैं। उम्मीदवार को कोई भी प्रविष्टि करने अथवा विकल्पों का चुनाव करने से पूर्व अनुदेशों को ध्यानपूर्वक पढ़ लेना चाहिए। ऑनलाइन आवेदन पत्र भरते समय उम्मीदवार को सभी आवश्यक विवरण देने चाहिए। अनिवार्य विवरणों को<span style="color: red;"> * ( तारांकित ) </span> चिन्ह से अंकित किया गया है।

                                        </li><br>
                                        <li><b>Candidates may please note that changes are not allowed in the online application, once it is submitted. If you wish to make any changes, you may submit a fresh application with requisite revision by the last date for receipt of application i.e. 29-06-2021 (6:00 P.M.). Your registration-id for latest completely submitted application will be considered for processing and all earlier submitted applications will stand cancelled. It is also advised that the email-id and mobile number must be retained for future references.
                                                <br>उम्मीदवार कृपया ध्यान दें कि ऑनलाइन आवेदन जमा करने के बाद इसमें बदलाव की अनुमति नहीं है। यदि आप कोई परिवर्तन करना चाहते हैं, तो आप आवेदन की प्राप्ति के लिए अंतिम तिथि यानि 29-06-2021 (शाम 6:00 बजे) के पहले एक नया आवेदन जमा कर सकते हैं। नवीनतम पूरी तरह से प्रस्तुत आवेदन के लिए आपका पंजीकरण-आईडी प्रसंस्करण के लिए माना जाएगा और पहले प्रस्तुत किए गए सभी आवेदन रद्द हो जाएंगे। यह भी सलाह दी जाती है कि भविष्य के संदर्भों के लिए ईमेल-आईडी और मोबाइल नंबर को बरकरार रखा जाना चाहिए।
                                            </b>
                                        </li><br>
                                        <li>Online Application Form is available in English and in Hindi Language but it can only be filled in English Language.
                                            <br>ऑनलाइन आवेदन पत्र अंग्रेज़ी एवं हिंदी भाषा में उपलब्ध है, लेकिन यह केवल अंग्रेजी भाषा में भरा जा सकता है।

                                        </li><br>
                                        <li>The filling of online application contains two parts.
                                            <br>ऑनलाइन आवेदन पत्र दो भागों में भरा जाता है।

                                        </li><br>
                                        <li>In Part I registration, candidate will have to fill basic information. On submission of details, candidate will be prompted to check the details and make correction, if any, in the application.
                                            <br>पंजीकरण के भाग-I में, उम्मीदवार को सामान्य जानकारी देनी होगी। विवरण प्रस्तुत करने पर, उम्मीदवार से दिए गए विवरण की जांच करने और आवेदन में संशोधन, यदि कोई हो, करने के लिए कहा जाएगा।

                                        </li><br>
                                        <li>Part-II Registration consists of following Stages.
                                            <br>भाग- II पंजीकरण में निम्न चरण होते है।
                                            <br>filling up Payment details (except for fee exempted candidates), uploading of Photograph, Signature, Photo Identity Card Document, selection of examination centre and Agreeing to Declaration.
                                            <br>भुगतान विवरण भरना (शुल्क छूट प्राप्त अभ्यर्थियों को छोड़कर ), फोटो, हस्ताक्षर, फोटो पहचान पत्र दस्तावेज़ को अपलोड करना, परीक्षा केन्द्र का चयन और घोषणा सहमति करना।

                                        </li><br>
                                        <li>Registration of Part-I & Part-II will be treated as valid from 09-06-2021 to 29-06-2021 (6:00 P.M.).
                                            <br>भाग-I एवं भाग-II के दिनांक 09-06-2021 से 29-06-2021 के शाम 6:00 बजे तक के पंजीकरण को वैध माना जाएगा |

                                        </li><br>
                                        <li>Candidate must press “I agree” button after he finds that information supplied by him is in order and no correction is required. Thereafter no correction/modification shall be allowed.
                                            <br>जब उम्मीदवार इस बात से संतुष्ट हो जाता / जाती है कि उसके द्वारा प्रदान की गई जानकारी सही क्रम में है और कोई संशोधन करने की आवश्यकता नहीं है तो वह “मैं सहमत हूं ” बटन दबा सकता / सकती है। इसके बाद किसी प्रकार का संशोधन नहीं किया जा सकेगा।

                                        </li><br>
                                        <li>When “I agree” button is pressed, a page with Registration Number will be generated. Please note down Registration Number or take a print out of the page. The application is incomplete without payment, uploading of scanned photograph, signature, Photo Identity Card Document, selection of centre and agree to declaration.
                                            <br>“मैं सहमत हूं” बटन दबाए जाने पर एक पृष्‍ठ के साथ पंजीकरण संख्या प्राप्त होगा। कृपया पंजीकरण सं. नोट कर लें अथवा इस पृष्ठ का एक प्रिंट निकाल लें। भुगतान, स्कैन की गई फोटोग्राफ, हस्ताक्षर और फोटो पहचान पत्र दस्तावेज़ को अपलोड किए बिना, केन्द्र का चयन तथा घोषणा सहमति के बिना आवेदन को अपूर्ण माना जाएगा।

                                        </li><br>
                                        <li>Scanned photograph should be in JPG format and must be uploaded first. The digital size of file should not exceed 300 KB each and must not be less than 20 KB and resolution 350 pixels (Width) X 350 pixels (Height) minimum , 1000 pixels (Width) X 1000 pixels (Height) maximum and Bit Depth of image file should be 24 bit.
                                            <br>स्कैन की गई फोटोग्राफ जेपीजी प्रारूप में होनी चाहिए और पहले अपलोड होनी चाहिए। फाइल का डिजिटल आकार 300 KB से अधिक नहीं होना चाहिए और 20 KB से कम नहीं होना चाहिए और रिजल्यूशन 350 पिक्सेल (चौड़ाई) X 350 पिक्सल (ऊंचाई) न्यूनतम, 1000 पिक्सेल (चौड़ाई) X 1000 पिक्सल (ऊंचाई) अधिकतम तथा इमेज फाइल की बिट डेप्थ 24 बिट होनी चाहिए।

                                        </li><br>
                                        <li>After uploading your photograph then upload your scanned signature in JPG format. The digital size of each file should not exceed 300 KB and must not be less than 20 KB and resolution 350 pixels (Width) X 350 pixels (Height) minimum , 1000 pixels (Width) X 1000 pixels (Height) maximum and Bit Depth of image file should be 24 bit.
                                            <br>अपनी तस्वीर अपलोड करने के बाद अपने स्कैन किए हुए हस्ताक्षर को जेपीजी प्रारूप में अपलोड करें। प्रत्ये‍क फाइल का डिजिटल आकार 300 KB से अधिक नहीं होना चाहिए और 20 KB से कम नहीं होना चाहिए और रिजल्यूशन 350 पिक्सेल (चौड़ाई) X 350 पिक्सल (ऊंचाई) न्यूनतम, 1000 पिक्सेल (चौड़ाई) X 1000 पिक्सल (ऊंचाई) अधिकतम तथा इमेज फाइल की बिट डेप्थ 24 बिट होनी चाहिए।

                                        </li><br>
                                        <li>Next upload your photo identity card document in PDF format only. The digital size of PDF file should not exceed 300 KB and must not be less than 20 KB.

                                        </li><br>
                                        <li>If you are selecting the assistive device other than listed, upload scanned 'other assistive device' in JPG format. The digital size of file should not exceed 300 KB each and must not be less than 20 KB and resolution 350 pixels (Width) X 350 pixels (Height) minimum , 1000 pixels (Width) X 1000 pixels (Height) maximum and Bit Depth of image file should be 24 bit.
                                            <br>यदि आप सूचीबद्ध के अलावा अन्य सहायक उपकरण का चयन कर रहे हैं, तो स्कैन किए गए 'अन्य सहायक उपकरण' को JPG प्रारूप में अपलोड करें। फ़ाइल का डिजिटल आकार 300 केबी से अधिक नहीं होना चाहिए और यह 20 केबी से कम नहीं होना चाहिए और रिज़ॉल्यूशन 350 पिक्सल (चौड़ाई) एक्स 350 पिक्सल (ऊंचाई) न्यूनतम, 1000 पिक्सेल (चौड़ाई) एक्स 1000 पिक्सल (ऊंचाई) अधिकतम और बिट गहराई छवि फ़ाइल 24 बिट होनी चाहिए।

                                        </li><br>
                                        <li>Candidates can pay application fee online, through Credit/Debit Card/Net banking facility of any Banks or by cash challan in SBI bank.
                                            <br>अभ्यर्थी आवेदन शुल्क का भुगतान किसी भी बैंक के क्रेडिट / डेबिट कार्ड / नेट बैंकिंग सुविधा के माध्यम से या एसबीआई बैंक में नकद चालान के माध्यम से कर सकते हैं।

                                        </li><br>
                                        <li>To pay fee in cash, candidate should take printout of challan generated online after completion of registration. Candidate may go to nearest SBI branch for depositing fee after 24 hours of generation of challan. "Pay by cash" mode option will be deactivated at 23.59 hours of 28-06-2021 i.e. one day before the closing date. However, applicants who have generated their Pay-in-slip before it is de-activated may pay at the counter of SBI Branch during banking hours on the closing date of application.
                                            <br>शुल्क का नगद भुगतान करने के लिए, उम्मीदवार को पंजीकरण पूरा करने के उपरांत ऑनलाइन प्राप्त किए गए चालान का प्रिंटआउट निकाल लेना चाहिए। चालान प्राप्त करने के 24 घंटे बाद उम्मीदवार भारतीय स्टेट बैंक की निकटतम शाखा पर जाकर शुल्क जमा कर सकते हैं। "नकद भुगतान" विकल्प 28-06-2021 के 23.59 घंटे पर निष्क्रिय हो जाएगा हालांकि, आवेदक जिन्होंने चालान निष्क्रिय होने से पहले चालान प्राप्त किया है, वे आवेदन की अंतिम तिथि पर बैंकिंग समय के दौरान एसबीआई शाखा के काउंटर पर भुगतान कर सकते हैं।

                                        </li><br>
                                        <li>Those who want to pay online through SBI portal can do so directly during submission of online form.
                                            <br>जो उम्मीदवार भारतीय स्टेट बैंक पोर्टल के माध्यम से ऑनलाइन भुगतान करना चा‍हते हैं, वे ऑनलाइन फार्म को भरने करने के उपरान्त सीधे ही शुल्क का भुगतान कर सकते हैं।

                                        </li><br>
                                        <li>Those who are exempted from payment of fee can skip steps 14 to 16.
                                            <br>जिन उम्मीदवारों को शुल्क के भुगतान करने से छूट प्राप्त है, वे क्रम संख्या् 14 से 16 को छोड सकते हैं।

                                        </li><br>
                                        <li>Please provide the photo identity card number and upload copy of the same in Online Application Form and remember to carry it at the time of Personality Test/Examination at the venue.
                                            <br>कृपया ऑनलाइन आवेदन पत्र में फोटो पहचान पत्र संख्या और उसी की कॉपी अपलोड करें और साक्षात्कार/परीक्षा स्थल के समय भी इसे ही ले जाना आवश्यक है।

                                        </li><br>
                                        <li>On successful completion of your complete application, an auto-generated email message will be sent on your registered email-id. In case email is not received by you please check / ensure that submission of Part-II of the Application has been made by you.
                                            <br>आपके संपूर्ण आवेदन के सफलतापूर्वक जमा होने के पश्चात्, आपके पंजीकृत ई-मेल आईडी पर एक स्वचालित रूप से बनी ई-मेल संदेश भेजी जाएगी। यदि आपको ई-मेल प्राप्त नहीं होती है तो कृपया जांच/सुनिश्चित करें कि आवेदन का भाग-II आपके द्वारा जमा किया गया है।
                                        </li><br>

                                    </ol></p>
                                </div>
                                </div>
                            </div >
                            <div  class="text-center" style="color: #0da8ee;font-family: Times New Roman;font-size: 120%;">
                                <br><b>Have You Read & Understood all 'Important Instructions and Detailed Instructions'.</b>
                                <br>क्या आपने सभी ‘महत्वपूर्ण अनुदेश और विस्तृत अनुदेश’ पढ़ तथा समझ लिए हैं।<br><br>
                            </div>
                            <div class="text-center">
                                <a href="form1.php"><button type="button" class="btn btn-success" style="width: 15%;">Yes / हां </button></a>&nbsp;&nbsp;
                                <button type="button" class="btn btn-danger" style="width: 15%;"> No / नहीं </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include "../footer.php"; ?>