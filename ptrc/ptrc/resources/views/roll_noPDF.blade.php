<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RollNo Slip</title>
</head>

<body>
    <style>
        /*@font-face {*/
        /*src: url('/../fonts/BRLNSB.TTF');*/
        /*font-family: "brlnsb";*/
    
        /*}*/
         @font-face {
        font-family: 'Berlin';
        font-style: normal;
        font-weight: normal;
        src: local('Berlin Sans FB'), url('/../fonts/BRLNSR.woff') format('woff');
        }
        table {
             margin: auto;
        }
        .pdf-table tr td {
            border: 1px solid rgb(0, 0, 0);
            padding: 10px;
            font-size: 13px;
        }

        .pdf-col-logo {
            padding: 0px;
            text-align: center;
            border-right: 1px solid black;
        }

        .pdf-col {
            padding: 0px;
            text-align: center;
        }

        .company-logo img {
            width: 60px;
        }
        .company-name{
            
            text-align: center;
            font-family: 'Berlin';
             /*font-family: "Muli",sans-serif;*/
            font-size: 24px;
            /* line-height: 30px; */
            /*margin-top: 15px;*/
            
            /*padding: 13px;*/
            color: #000;
            margin-top: 25px;
            margin-bottom:0px;
            line-height:24px;
        }
        .company-des{
             text-align: center;
             font-family: brlnsb;
            font-size: 18px;
            color: #000;
            margin-top:-2px;
             padding: 0px 65px 0px 65px;
        }
        .title{
            text-align: center;
            padding:15px;
        }

    </style>
{{-- {{dd($job[0]->pic)}} --}}
    <div class="container">
       
                            <div class="">
                                <img src="{{ $logochallan }}" alt="" >
                           <!--    <p class="logo-text company-name">Punjab Testing And Recruitment Council<br>-->
                           <!--<span class="logo-slogan sloganbor company-des">-->
                           <!--Creating Difference In Testing Society</span>-->
                           <!-- </p>-->
                            </div>
       
        <div class="row mt-5">
            <div class="col-12">
                <p><strong>Note:</strong> In written examination, the candidate must fill the roll number, CNIC number,
                    Answer Book Color on the Bubble sheet properly, otherwise his/her paper will be cancelled.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="caution">
                    <strong>Caution: </strong>
                </div>
                <div class="list">
                    <ul>
                        <li>Be in the Examination Centre, at least 30 mints before exam starting time.</li>
                        <li>Wear Facemasks, and sanitize your hands properly.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <table class="" style="width: 100%">
                <tbody>
                    <tr>
                        <td> <strong> Roll Number: </strong> </td>
                        <td>{{$job[0]->roll_no}}</td>
                        <td rowspan="5"><img style="width: 100px; height:100px" src="{{ $logouser }}" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td> <strong> Post Name: </strong> </td>
                        <td>{{$job[0]->post_name}}</td>

                    </tr>
                    <tr>
                        <td> <strong> Candidate Name: </strong> </td>
                        <td>{{$job[0]->name}}</td>

                    </tr>
                    <tr>
                        <td> <strong> Date of Birth: </strong> </td>
                        <td> {{ date('d/m/Y',strtotime($job[0]->dob))}}</td>

                    </tr>
                    <tr>
                        <td> <strong> Domicile: </strong> </td>
                        <td>{{$job[0]->div_domicel}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row my-5">
            <table class="pdf-table" style="width: 100%">
                <thead>
                    <tr>
                        <td colspan="2"><strong>Examination Centre:{{$job[0]->c_name}}</strong></td>
                        <td colspan="2"><strong>Examination Adrress:{{$job[0]->address}}</strong></td>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong> Roll Number:{{$job[0]->roll_no}} </strong></td>
                        <td><strong>Date:{{  date('d/m/Y',strtotime($job[0]->date_time)) }}</strong></td>
                        <td><strong> Start Time:{{$job[0]->start_time}} </strong></td>
                        <td><strong>  End Time:{{$job[0]->end_time}} </strong></td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row my-5">
            <div class="col-12">
                <div class="caution">
                    <strong>Instructions: </strong>
                </div>
                <div class="list">
                    <ul>
                        <li>Please read all the instruction carefully and follow them.</li>
                        <li>Bring your Roll number slip along with original CNIC card for exam, without roll number slip
                            and CNIC card you will not be allowed to sit in the exam. </li>
                        <li>Please bring black or blue ballpoint/pointer, with you for your exam.</li>
                        <li>Make sure you have filled the bubbles according to your personal details such as CNIC
                            Number, Roll Number, if not properly filled, your exam will be cancelled.</li>
                        <li>Please fill the bubble sheet carefully, if any bubble remained unfilled not filled properly,
                            that answer will not be marked.</li>
                        <li>Please note that if any one founds to be appeared in the exam, at your place, such person
                            will be liable to prosecution, and the employer along with other regulatory authorities will
                            be informed immediately.</li>
                        <li>In case of copying from any helping material, your paper will be cancelled immediately.</li>
                        <li>Employer and recruitment organization has rights to verify your academic certificates.</li>
                        <li>In case of any wrong information provided to the employer, employer has right to cancel your
                            exam.</li>
                        <li>Mobile phones, electronic Gadgets, knife, gun or cameras are strictly prohibited, in the
                            exam center.</li>
                        <li>PTRC has all rights to cancel or change the time, date and examination center, for any of
                            the advertised posts.</li>
                        <li>After exam, keep visiting<a href="https://ptrc.com.pk"> PTRC website </a>to further updates and results.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
