
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Challan</title>
</head>
<body>
    <style>
    @font-face {
        /*src: url({{ storage_path('fonts/BRLNSB.TTF') }})*/
        /*{{ storage_path('fonts\your-custom-font.ttf') }}*/
        src: url({{url('/public/assets/fonts/BRLNSB.TTF')}});
       /*src: {{ URL::asset('fonts/BRLNSB.TTF') }}*/
        font-family: "brlnsb";
    
        }
    .main-pdf{
    padding: 50px 15px;
}
.pdf-top{
    border-top: 1px solid black;
    border-left: 1px solid black;
    border-right: 1px solid black;
}
.company-logo img {
    width: 60px;
}
.company-name{
    font-family: brlnsb;
    /*text-transform: uppercase;*/
    font-size: 12px;
    font-weight: 800;
    margin: 0px;
    /* height: 15px; */
    margin-top: 8px;
}
.logoimg{
    width:100%;
}
.company-des{
    font-family: brlnsb;
    /*text-transform: uppercase;*/
    font-size: 08px;
    font-weight: 600;
    margin: 0px;
}
.pdf-col-logo{
    padding: 0px;
    text-align: center;
    
}
.pdf-col{
    padding: 0px;
    text-align: center;
}
.pdf-table tr td{
    border: 1px solid rgb(0, 0, 0);
    padding: 10px;
    font-size: 13px;
}
.pdf-copy{
    text-align: center;
    text-transform: uppercase;
    
    font-weight: 800;
}
  </style>
    

<table width="100%;border:0;">
    <tr>
        <td>
            <table class="pdf-table" style="width: 100%"> 
                <thead>
                    <tr>   
                        <td colspan="3">
                            <div class="">
                                <div class="">
                                    <img src="{{ $logochallan }}" alt=""  class="logoimg">
                                </div>
                            </div>
                        </td>
                        <!--<td colspan="2">-->
                        <!--    <div class="pdf-col">-->
                        <!--        <p class="company-name">PUNJAB TESTING & RECRUITMENT COUNCIL - PAKISTAN</p>-->
                        <!--        <p class="company-des">Creating Difference in Testing Society</p>-->
                        <!--    </div>-->
                        <!--</td>-->
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Challan #: </strong><br>{{$job[0]->challan_no}}</td>
                        <td><strong> Date:</strong><br> {{$job[0]->close_date}}</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3"> <strong> Candidate Name: </strong> {{$job[0]->name}} </td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>Father Name:</strong> {{$job[0]->f_name}}</td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>Post Applied Name:</strong> {{$job[0]->post_name}}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Payable Amount on or before due date:</strong></td>
                        <td>{{$job[0]->job_fee}}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Bank Name:</strong></td>
                        <td>{{$bank[0]->b_name}}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Account Title:</strong></td>
                        <td>{{$bank[0]->owner}}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Account #:</strong></td>
                        <td>{{$bank[0]->account_no}}</td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>Note:</strong> Deposited Amounts will be non Refundable.</td>
                    </tr>
                    <tr>
                        <td class="pdf-copy" colspan="3"><strong>Candidate Copy</strong></td>
                    </tr>

                </tbody>
            </table>
        </td>
        <td>
            <table class="pdf-table" style="width: 100%">
                <thead>
                    <tr>  
                     <td colspan="3">
                            <div class="">
                                <div class="">
                                    <img src="{{ $logochallan }}" alt=""  class="logoimg">
                                </div>
                            </div>
                        </td>
                        <!--<td>-->
                        <!--    <div class="pdf-col-logo">-->
                        <!--        <div class="company-logo">-->
                                  
                        <!--            <img src="{{ $logo }}" alt="">-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</td>-->
                        <!--<td colspan="2">-->
                        <!--    <div class="pdf-col">-->
                        <!--        <p class="company-name">PUNJAB TESTING & RECRUITMENT COUNCIL - PAKISTAN</p>-->
                        <!--        <p class="company-des">Creating Difference in Testing Society</p>-->
                        <!--    </div>-->
                        <!--</td>-->
                    </tr>
                    <tr>
                         <td colspan="2"><strong>Challan #: </strong><br>{{$job[0]->challan_no}}</td>
                        <td><strong> Date:</strong><br> {{$job[0]->close_date}}</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3"> <strong> Candidate Name: </strong> {{$job[0]->name}} </td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>Father Name:</strong> {{$job[0]->f_name}} </td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>Post Applied Name:</strong>{{$job[0]->post_name}}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Payable Amount on or before due date:</strong></td>
                        <td>{{$job[0]->job_fee}}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Bank Name:</strong></td>
                        <td>{{$bank[0]->b_name}}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Account Title:</strong></td>
                        <td>{{$bank[0]->owner}}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Account #:</strong></td>
                        <td>{{$bank[0]->account_no}}</td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>Note:</strong> Deposited Amounts will be non Refundable.</td>
                    </tr>
                    <tr>
                        <td class="pdf-copy" colspan="3"><strong>Bank Copy</strong></td>
                    </tr>

                </tbody>
            </table>
        </td>
        <td>
            <table class="pdf-table" style="width: 100%">
                
                <thead>
                    <tr> 
                     <td colspan="3">
                            <div class="">
                                <div class="">
                                    <img src="{{ $logochallan }}" alt="" class="logoimg">
                                </div>
                            </div>
                        </td>
                        <!--<td>-->
                        <!--    <div class="pdf-col-logo">-->
                        <!--        <div class="company-logo">-->
                        <!--            <img src="{{ $logo }}" alt="">-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</td>-->
                        <!--<td colspan="2">-->
                        <!--    <div class="pdf-col">-->
                        <!--        <p class="company-name">PUNJAB TESTING & RECRUITMENT COUNCIL - PAKISTAN</p>-->
                        <!--        <p class="company-des">Creating Difference in Testing Society</p>-->
                        <!--    </div>-->
                        <!--</td>-->
                    </tr>
                    <tr>
                         <td colspan="2"><strong>Challan #: </strong><br>{{$job[0]->challan_no}}</td>
                        <td><strong> Date:</strong><br> {{$job[0]->close_date}}</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3"> <strong> Candidate Name: </strong> {{$job[0]->name}} </td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>Father Name:</strong> {{$job[0]->f_name}} </td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>Post Applied Name:</strong>{{$job[0]->post_name}}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Payable Amount on or before due date:</strong></td>
                        <td>{{$job[0]->job_fee}}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Bank Name:</strong></td>
                        <td>{{$bank[0]->b_name}}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Account Title:</strong></td>
                        <td>{{$bank[0]->owner}}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Account #:</strong></td>
                        <td>{{$bank[0]->account_no}}</td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>Note:</strong> Deposited Amounts will be non Refundable.</td>
                    </tr>
                    <tr>
                        <td class="pdf-copy" colspan="3"><strong>PTRC Copy</strong></td>
                    </tr>

                </tbody>
            </table>
        </td>
    </tr>
</table>

{{-- <table style="width: 100%">
<div class="container main-pdf">
    <div class="row pdf-row">
        <div class="col-4 pdf-column-1">
            <div class="row pdf-top">
                <div class="col-3 pdf-col-logo">
                    <div class="company-logo">
                        <img src="{{URL::asset('img/logo/logo.png')}}" alt="">
                    </div>
                </div>
                <div class="col-9 pdf-col">
                    <p class="company-name">PUNJAB TESTING & RECRUITMENT COUNCIL - PAKISTAN</p>
                    <p class="company-des">Creating Difference in Testing Society</p>
                </div>
            </div>
            <div class="row">
                <table class="pdf-table" style="width: 33%>
                    <head>
                        <tr>
                            <td colspan="2">Challan #: </td>
                            <td>Due Date: </td>
                        </tr>
                    </head>
                    <body>
                        <tr>
                            <td colspan="3"> <strong> Candidate Name: </strong> Muhammad Mubashir </td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Father Name:</strong> Umar Farooq </td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Post Applied Name:</strong> Junior Clerk</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Payable Amount on or before due date:</strong></td>
                            <td>700</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Bank Name:</strong></td>
                            <td>UBL</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Account Title:</strong></td>
                            <td>Muhammad Mubashir</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Branch Code:</strong></td>
                            <td>1218</td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Note:</strong> Deposited Amounts will be non Refundable.</td>
                        </tr>
                        <tr>
                            <td class="pdf-copy" colspan="3"><strong>Candidate Copy</strong></td>
                        </tr>

                    </body>
                </table>
            </div>           
        </div>
        <div class="col-4 pdf-column-1">
            <div class="row pdf-top">
                <div class="col-3 pdf-col-logo">
                    <div class="company-logo">
                        <img src="{{URL::asset('img/logo/logo.png')}}" alt="">
                    </div>
                </div>
                <div class="col-9 pdf-col">
                    <p class="company-name">PUNJAB TESTING & RECRUITMENT COUNCIL - PAKISTAN</p>
                    <p class="company-des">Creating Difference in Testing Society</p>
                </div>
            </div>
            <div class="row">
                <table class="pdf-table" style="width: 33%">
                    <head>
                        <tr>
                            <td colspan="2">Challan #: </td>
                            <td>Due Date: </td>
                        </tr>
                    </head>
                    <body>
                        <tr>
                            <td colspan="3"> <strong> Candidate Name: </strong> Muhammad Mubashir </td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Father Name:</strong> Umar Farooq </td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Post Applied Name:</strong> Junior Clerk</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Payable Amount on or before due date:</strong></td>
                            <td>700</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Bank Name:</strong></td>
                            <td>UBL</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Account Title:</strong></td>
                            <td>Muhammad Mubashir</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Branch Code:</strong></td>
                            <td>1218</td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Note:</strong> Deposited Amounts will be non Refundable.</td>
                        </tr>
                        <tr>
                            <td class="pdf-copy" colspan="3"><strong>PTRS-PK Copy</strong></td>
                        </tr>

                    </body>
                </table>
            </div>           
        </div>
        <div class="col-4 pdf-column-1">
            <div class="row pdf-top">
                <div class="col-3 pdf-col-logo">
                    <div class="company-logo">
                        <img src="{{URL::asset('img/logo/logo.png')}}" alt="">
                    </div>
                </div>
                <div class="col-9 pdf-col">
                    <p class="company-name">PUNJAB TESTING & RECRUITMENT COUNCIL - PAKISTAN</p>
                    <p class="company-des">Creating Difference in Testing Society</p>
                </div>
            </div>
            <div class="row">
                <table class="pdf-table " style="width: 33%>
                    <head>
                        <tr>
                            <td colspan="2">Challan #: </td>
                            <td>Due Date: </td>
                        </tr>
                    </head>
                    <body>
                        <tr>
                            <td colspan="3"> <strong> Candidate Name: </strong> Muhammad Mubashir </td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Father Name:</strong> Umar Farooq </td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Post Applied Name:</strong> Junior Clerk</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Payable Amount on or before due date:</strong></td>
                            <td>700</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Bank Name:</strong></td>
                            <td>UBL</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Account Title:</strong></td>
                            <td>Muhammad Mubashir</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Branch Code:</strong></td>
                            <td>1218</td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Note:</strong> Deposited Amounts will be non Refundable.</td>
                        </tr>
                        <tr>
                            <td class="pdf-copy" colspan="3"><strong>Bank Copy</strong></td>
                        </tr>

                    </body>
                </table>
            </div>           
        </div>
    </div>
</div>
</table>   --}}
</body>
</html>
