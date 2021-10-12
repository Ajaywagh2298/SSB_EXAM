<?php include "connection.php"; ?>
<?php session_start(); ?>
<?php

 ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .txt-center {
            text-align: center;
        }
        .border- {
            border: 1px solid #000 !important;
        }
        .padding {
            padding: 15px;
        }
        .mar-bot {
            margin-bottom: 15px;
        }
        .admit-card {
            border: 2px solid #000;
            padding: 15px;
            margin: 20px 0;
        }
        .BoxA h5, .BoxA p {
            margin: 0;
        }
        h5 {
            text-transform: uppercase;
        }
        table img {
            width: 100%;
            margin: 0 auto;
        }
        .table-bordered td, .table-bordered th, .table thead th {
            border: 1px solid #000000 !important;
        }
    </style>



</head>
<body>

<section>
    <div class="container">
        <div class="admit-card">
            <div class="BoxA border- padding mar-bot">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="Form/img/logo1.png" width="100px;" />
                    </div>
                    <div class="col-sm-4 txt-center" style="font-family: Times New Roman;">
                        <p style="font-size: 26px;"><b>National Defence Academy</b></p>
                        <p style="font-size: 17px;"><b>Union Public Service Commission</b></p>
                        <p style="font-size:35px;"> Admit Card</p>

                    </div>
                    <div class="col-sm-4 text-right">
                        <img src="Form/img/img3.png" width="140px;" style="padding-top: 10px;" />
                    </div>
                </div>
            </div>
            <div class="BoxC border- padding mar-bot">
                <div class="row">
                    <div class="col-sm-6">
                        <h5>Hall Ticket No : 9910101</h5>
                    </div>
                </div>
            </div>
            <div class="BoxD border- padding mar-bot">
                <div class="row">
                    <div class="col-sm-10">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td><b>Registration No: 9910101</b></td>
                                <td><b>Exam Code: </b> NDA I</td>
                            </tr>
                            <tr>
                                <td><b>Student Name: </b>Vinod Sharma</td>
                                <td><b>Sex: </b>M</td>
                            </tr>
                            <tr>
                                <td><b>Father/Husband Name: </b>SS Sharma</td>
                                <td><b>DOB: </b>02 Jul 2019</td>
                            </tr>
                            <tr>
                                <td colspan="2" style="height: 125px;"><b>Address: </b>moh hasnxgxums , moh hasnxgxums, moh hasnxgxums</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-2 txt-center">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row txt-center"><img src="Form/img/boy.png" width="123px" height="165px" /></th>
                            </tr>
                            <tr>
                                <th scope="row txt-center"><img src="Form/img/img4.png" /></th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="BoxE border- padding mar-bot txt-center">
                <div class="row">
                    <div class="col-sm-12">
                        <h5>EXAMINATION VENUE</h5>
                        <p>NH - 79 Gangrar Chittorgarh - 312901 <br> RAJASTHAN, INDIA</p>
                    </div>
                </div>
            </div>
            <div class="BoxF border- padding mar-bot txt-center">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Subject/Paper</th>
                                <th>Exam Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>English</td>
                                <td>5 July 2019</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>English</td>
                                <td>5 July 2019</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>English</td>
                                <td>5 July 2019</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <footer class="">
                <div class="text-center"><h3>Instructions to the Candidates</h3></div>
                <div class="text-justify">
                <p style="padding-left: 10px;padding-right: 10px;font-family: Times New Roman;color:#515151;font-size: 18px;">
                    1.A printed copy of this Admit Card must be presented for verification along with an original valid photo identification proof (not a photocopy or a
                    scanned copy) mentioned in the admit card. In case of poor quality of photo on ID proof, the candidate must bring an alternative valid photo ID (for
                    example, Passport, PAN card, Voter ID card, Aadhaar card, College ID, Employee ID, Driver’s License).<br>
                    2.Print the Admit Card on an A4-size paper using a laser printer, preferably in colour. The Admit Card is considered to be valid only if both photograph
                    and signature are clearly visible.<br>
                    3.Candidates will be permitted to appear for the examination ONLY after verification of their credentials by the examination centre personnel.<br>
                    4.Candidates are advised to locate the examination centre at least a day in advance, so as to ensure that they can reach the centre on time on the day
                    of the exam. There may be multiple iDZ centres in a city. Candidates are advised to double-check the address on the Admit Card and reach
                    the right centre.<br>
                    5.To facilitate verification of their identity, candidates must report at the examination venue at least an hour before the scheduled commencement of the
                    examination.<br>
                    6.Candidates will be permitted to occupy their seats 40 minutes before the scheduled start of the examination. They can login and start reading the
                    instructions 20 minutes before the start of the examination.<br>
                    7.CANDIDATES WILL NOT BE ALLOWED TO login 30 minutes after the start of the exam.<br>
                    8.Candidates will NOT be permitted to leave the examination hall before the end of the exam.<br>
                    9.During the examination, a virtual scientific calculator will be available on the computer screen. Charts, tables, papers, books, bags, calculators,
                    watches, wallets, mobile phones, and any other electronic/communication devices are STRICTLY PROHIBITED inside the examination hall.<br>
                    10.Scribble pad will be provided for rough work. The candidates must write their name and registration number before using it. A candidate can possess
                    ONLY one scribble pad at any point of time. A new scribble pad will be given only after returning the first one. At the end of the examination, the
                    scribble pad must be returned to the invigilator.<br>
                    11.JAM authorities are not responsible for the safekeep of the candidate’s personal belongings.<br>
                    12.A candidate found to possess any prohibited item during the examination will be debarred from the examination and may be subjected to further
                    disciplinary action, which may include a ban from appearing in future examinations.<br>
                    13.In case there is a restriction on movement in the city of the examination, the candidates can use the Admit Card as a pass.<br>
                    I hereby acknowledge that I have read, understood and agree to follow the above mentioned Instructions. I also declare that I DO NOT have any
                    COVID symptoms, I am NOT in quarantine and I was NOT in close contact with any COVID patient in the past 14 days.<br>
                </p></div>
            </footer>

        </div>
    </div>

</section>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>