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
                                                <tr style="background-color: #1C6FAD">
                                                    <td style="padding: 30px 30px; ">
                                                        <h1
                                                            style="color:#fff; font-weight:400; margin:0;font-size:28px;font-family: 'Muli', sans-serif;">
                                                            Thanks for your request</h1>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 30px 30px 0 30px;">
                                                        <p style="color: #646464; font-weight: 400;"> Hi
                                                            {{ $data->first_name }} {{ $data->last_name }}
                                                            {{ $data->full_name }},</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 0px 30px 30px 30px;">
                                                        <p style="color: #646464; font-weight: 400;">
                                                            We have received your message and would like to thank you
                                                            for filling the information. If your equiry is urgent,
                                                            please use the telephone number listed below to talk to one
                                                            of our staff members.
                                                            Otherwise, we will reply by email as soon as possible.</p>
                                                        <br><br>Thank you.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="height:40px;">&nbsp;</td>
                                                </tr>
                                                <tr style="background-color: #185d93">
                                                    <td
                                                        style="padding: 15px 20px 15px 20px;  display:flex; justify-content:space-between ">
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
                                                                    <a href="tel:{{ $data->clinic->phone_number }}"
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
