{{-- <strong>Patient First name: </strong>{{ $data->first_name }} <br>
<strong>Patient Middle name: </strong>{{ $data->middle_name }} <br>
<strong>Patient Last name: </strong>{{ $data->last_name }} <br><br>
<strong>Guardian First name: </strong>{{ $data->guardian_first_name }} <br>
<strong>Guardian Middle name: </strong>{{ $data->guardian_middle_name }} <br>
<strong>Guardian Last name: </strong>{{ $data->guardian_last_name }} <br><br>
<strong>Have you or anyone you have close contact with had acute respiratory illness or travelled outside of Ontario
    within the past 14 days? </strong>{{ $data->acute_respiratory_illness ? 'Yes' : 'No' }} <br> --}}
{{-- <strong>Do you have a concern for a potential COVID-19 infections? </strong>{{ $data->covid_infections_concern }} <br> --}}
{{-- <strong>Have you or anyone you have close contact with had a confirmed case of COVID-19? --}}
{{-- </strong>{{ $data->contact_with_covid_case }} <br><br> --}}
{{-- <strong>Do you have ANY of the following symptoms: </strong><br> --}}
{{-- <strong>Fever </strong>{{ $data->fever }}<br> --}}
{{-- <strong>New onset of cough </strong>{{ $data->cough }}<br> --}}
{{-- <strong>Shortness of breath or difficulty breathing </strong>{{ $data->shortness_of_breath }}<br> --}}
{{-- <strong>Sore throat or difficulty swallowing </strong>{{ $data->sore_throat }}<br> --}}
{{-- <strong>Decrease or loss of smell or taste </strong>{{ $data->loss_of_smell_taste }}<br> --}}
{{-- <strong>Chills, headache, pink eye</strong>{{ $data->pink_eye }}<br> --}}
{{-- <strong>Unexplained fatigue, malaise, muscle aches</strong>{{ $data->fatigue }}<br> --}}
{{-- <strong>Nausea, vomiting, diarrhea, abdominal pain</strong>{{ $data->nausea }}<br> --}}
{{-- <strong>Runny nose, nasal congestion without a known case</strong>{{ $data->nasal_congestion }}<br><br> --}}
{{-- <strong>If you are 70 years of age or older, are you experiencing delirium, unexplained/increased falls, acute
    functional decline, or worsening of chronic conditions?</strong>{{ $data->seventy_plus }}<br><br> --}}
{{-- <strong>Date</strong>{{ $data->date }}<br><br> --}}


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
    </style>
</head>

<body>
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7  mx-auto">
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
                                                <tr style="background-color: #1C6FAD">
                                                    <td style="padding: 30px 30px; ">
                                                        <h1
                                                            style="color:#fff; font-weight:400; margin:0;font-size:28px;font-family: 'Muli', sans-serif;">
                                                            Registration Form</h1>
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
                                                            Patient details.</p>
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
                                                                        First name:</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                                        {{ $data->first_name }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Middle name:</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                                        {{ $data->middle_name }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Last name:</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                                        {{ $data->last_name }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Guardian First name:</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                                        {{ $data->guardian_first_name }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Guardian Middle name:</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                                        {{ $data->guardian_middle_name }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Guardian Last name:</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                                        {{ $data->guardian_last_name }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Have you or anyone you have close contact with
                                                                        had acute respiratory illness or travelled
                                                                        outside of Ontario
                                                                        within the past 14 days?</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                                        {{ $data->acute_respiratory_illness ? 'Yes' : 'No' }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px;  border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Do you have a concern for a potential COVID-19
                                                                        infections?</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                                        {{ $data->covid_infections_concern ? 'Yes' : 'No' }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Have you or anyone you have close contact with
                                                                        had a confirmed case of COVID-19?</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; ">
                                                                        {{ $data->contact_with_covid_case ? 'Yes' : 'No' }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Do you have ANY of the following symptoms:</td>
                                                                    {{-- <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; ">
                                                                        {{ $data->contact_with_covid_case ? 'Yes': 'No'}}</td> --}}
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Fever</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; ">
                                                                        {{ $data->fever ? 'Yes' : 'No' }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                                        New onset of cough </td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; ">
                                                                        {{ $data->cough ? 'Yes' : 'No' }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Shortness of breath or difficulty breathing</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; ">
                                                                        {{ $data->shortness_of_breath ? 'Yes' : 'No' }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Sore throat or difficulty swallowing</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; ">
                                                                        {{ $data->sore_throat ? 'Yes' : 'No' }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Decrease or loss of smell or taste</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; ">
                                                                        {{ $data->loss_of_smell_taste ? 'Yes' : 'No' }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Chills, headache, pink eye</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; ">
                                                                        {{ $data->pink_eye ? 'Yes' : 'No' }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Unexplained fatigue, malaise, muscle aches</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; ">
                                                                        {{ $data->fatigue ? 'Yes' : 'No' }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Nausea, vomiting, diarrhea, abdominal pain</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; ">
                                                                        {{ $data->nausea ? 'Yes' : 'No' }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Runny nose, nasal congestion without a known
                                                                        case</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; ">
                                                                        {{ $data->nasal_congestion ? 'Yes' : 'No' }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                                        If you are 70 years of age or older, are you
                                                                        experiencing delirium, unexplained/increased
                                                                        falls, acute
                                                                        functional decline, or worsening of chronic
                                                                        conditions?</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; ">
                                                                        {{ $data->seventy_plus ? 'Yes' : 'No' }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
                                                                        Date</td>
                                                                    <td
                                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056; ">
                                                                        {{ $data->date }}</td>
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
                                                    <td
                                                        style="padding: 15px 20px 15px 20px; display:flex; justify-content:space-between">
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
                                                            border="0" style="display: flex; justify-content:end">
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
