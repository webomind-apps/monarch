{{-- <strong>Patient type: </strong>{{ $data->patient_type }} <br><br>
<strong>Full name: </strong>{{ $data->first_name }} <br>
<strong>Your phone: </strong>{{ $data->phone_number }} <br>
<strong>Your email: </strong>{{ $data->email }} <br>
<strong>Preferred time: </strong>{{ $data->preferred_time }} <br>
<strong>Preferred date: </strong>{{ $data->preferred_date }} <br>
<strong>Message: </strong>{{ $data->message }} <br> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="0">
    <title>Monarch - Email template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.2/css/bootstrap.min.css"
        referrerpolicy="no-referrer" />
    <link rel="icon" href="assets/image/favicon.png" sizes="192x192" />
    <link rel="stylesheet" href="./assets/css/homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.min.css"
        referrerpolicy="no-referrer" />
    <style>
        .address-sec {
            display: flex;
            justify-content: end;
        }

        .location-sec {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <table cellspacing="0" border="0" cellpadding="30px" width="800" style="margin: 0 auto">
                        <tr>
                            <td>
                                <table style="margin:0 auto;" width="100%" border="0" align="center"
                                    cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td style="text-align:center;">
                                            <a href="https://testcadomain.com/monarch/public/monarch-frontend/image/logo.png"
                                                title="logo" target="_blank">
                                                <img width="auto"
                                                    src="https://testcadomain.com/monarch/public/monarch-frontend/image/logo.png"
                                                    title="logo" alt="logo">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:20px;">&nbsp;</td>
                                    </tr>
                                    <!-- Email Content -->
                                    <tr>
                                        <td>
                                            <table width="95%" border="0" align="center" cellpadding="0"
                                                cellspacing="0" style=" background:#fff; border-radius:3px;"
                                                class="shadow-sm">
                                                <!-- Title -->

                                                @php
                                                    $country_codes = ['403', '587', '780', '825', '236', '778', '604', '250', '204', '431', '506', '709', '867', '902', '782', '437', '519', '647', '905', '249', '343', '416', '548', '705', '365', '613', '807', '226', '289', '902', '782', '514', '581', '819', '438', '450', '418', '579', '873', '367', '639', '306', '867'];
                                                @endphp
                                                <tr style="background-color: #1C6FAD">
                                                    <td style="padding: 30px 30px; ">
                                                        {{-- <h1
                                                            style="color:#fff; font-weight:400; margin:0;font-size:28px;font-family: 'Muli', sans-serif;">
                                                            Appointments</h1> --}}

                                                        <h1
                                                            style="color:#fff; font-weight:400; margin:0;font-size:28px;font-family: 'Muli', sans-serif;">
                                                            @if (in_array(substr($data->phone_number, 0, 3), $country_codes)) Appointments @else Spam Appointments @endif</h1>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 30px 30px 0 30px;">
                                                        <p style="color: #646464; font-weight: 400;"> Hi Admin.</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 0px 30px 30px 30px;">
                                                        <p style="color: #646464; font-weight: 400;">
                                                            Query from patient.</p>
                                                    </td>
                                                </tr>
                                                <!-- Details Table -->
                                                <tr>
                                                    <td>
                                                        <table cellpadding="0" cellspacing="0"
                                                            style="width: 90%; margin: 0 auto; border: 1px solid #ededed">
                                                            <tbody>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Patient type:</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                                        {{ $data->patient_type }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Full name:</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                                        {{ $data->full_name }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Your email:</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                                        {{ $data->email }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Your Phone:</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                                        {{ $data->phone_number }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed;border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Preferred time:</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                                        {{ $data->preferred_time }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px;  border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Preffered date:</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                                        {{ $data->preferred_date }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Message:</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; ">
                                                                        {{ $data->message }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Clinic name:</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; ">
                                                                        {{ $data->clinic->name }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="height:40px;">&nbsp;</td>
                                                </tr>
                                                <tr style="background-color: #185d93">
                                                    <td style="padding: 15px 20px 15px 20px;" class="location-sec">
                                                        <table width="49%" cellpadding="2" cellspacing="0"
                                                            border="0">
                                                            <tr>
                                                                <td style="font-size: 13px;color:#fff">
                                                                    Location : {{ $data->clinic->name }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: 13px;color:#fff">
                                                                    Email :
                                                                    <a href="mailto:{{ $data->clinic->email }}"
                                                                        style="text-decoration: none;color: rgb(255, 255, 255); font-size: 13px; word-break: break-all;">{{ $data->clinic->email }}</a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table width="49%" cellpadding="2" cellspacing="0"
                                                            border="0" class="address-sec">
                                                            <tr>
                                                                <td style="font-size: 13px;color:#fff">
                                                                    Contact :
                                                                    <a href="tel:{{ $data->clinic->phone_numer }}"
                                                                        style="text-decoration: none;color: #fff; font-size: 13px;">
                                                                        {{ $data->clinic->phone_number }} </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size: 13px;color:#fff">
                                                                    Address :
                                                                    <a href=""
                                                                        style="text-decoration: none;color: #fff; font-size: 13px;">
                                                                        {{ $data->clinic->address }} </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:30px;">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
