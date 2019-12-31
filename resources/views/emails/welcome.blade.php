<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <style>
        /* Basics */
        body {
            margin: 0 !important;
            padding: 0;
            background-color: #ffffff;
        }
        .button {
            font: bold 11px Arial;
            text-decoration: none;
            background-color: rgb(34, 126, 231);
            color: #ffffff;
            margin-left: 34%;
            padding: 12px 20px 12px 20px;
            border-radius: 7px;
            border-top: 1px solid #CCCCCC;
            border-right: 1px solid #333333;
            border-bottom: 1px solid #333333;
            border-left: 1px solid #CCCCCC;
        }
        table {
            border-spacing: 0;
            font-family: sans-serif;
            color: #333333;
        }
        td {
            padding: 0;
        }
        img {
            border: 0;
        }
        div[style*="margin: 16px 0"] {
            margin:0 !important;
        }
        .wrapper {
            width: 100%;
            table-layout: fixed;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }
        .webkit {
            max-width: 600px;
            margin: 0 auto;
        }
        .outer {
            Margin: 0 auto;
            width: 100%;
            max-width: 600px;
        }
        .inner {
            padding: 10px;
        }
        .contents {
            width: 100%;
        }
        p {
            Margin: 0;
        }
        a {
            color: #ee6a56;
            text-decoration: underline;
        }
        .h1 {
            font-size: 21px;
            font-weight: bold;
            Margin-bottom: 18px;
        }
        .h2 {
            font-size: 18px;
            font-weight: bold;
            Margin-bottom: 12px;
        }
        .full-width-image img {
            width: 100%;
            max-width: 600px;
            height: auto;
        }

        /* One column layout */
        .one-column .contents {
            text-align: left;
        }
        .one-column p {
            font-size: 14px;
            Margin-bottom: 10px;
        }

        /*Two column layout*/
        .two-column {
            text-align: center;
            font-size: 0;
        }
        .two-column .column {
            width: 100%;
            max-width: 300px;
            display: inline-block;
            vertical-align: top;
        }
        .two-column .contents {
            font-size: 14px;
            text-align: left;
        }
        .two-column img {
            width: 100%;
            max-width: 280px;
            height: auto;
        }
        .two-column .text {
            padding-top: 10px;
        }

        /*Three column layout*/
        .three-column {
            text-align: center;
            font-size: 0;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .three-column .column {
            width: 100%;
            max-width: 200px;
            display: inline-block;
            vertical-align: top;
        }
        .three-column img {
            width: 100%;
            max-width: 180px;
            height: auto;
        }
        .three-column .contents {
            font-size: 14px;
            text-align: center;
        }
        .three-column .text {
            padding-top: 10px;
        }

        /* Left sidebar layout */
        .left-sidebar {
            text-align: center;
            font-size: 0;
        }
        .left-sidebar .column {
            width: 100%;
            display: inline-block;
            vertical-align: middle;
        }
        .left-sidebar .left {
            max-width: 100px;
        }
        .left-sidebar .right {
            max-width: 500px;
        }
        .left-sidebar .img {
            width: 100%;
            max-width: 80px;
            height: auto;
        }
        .left-sidebar .contents {
            font-size: 14px;
            text-align: center;
        }
        .left-sidebar a {
            color: #85ab70;
        }

        /* Right sidebar layout */
        .right-sidebar {
            text-align: center;
            font-size: 0;
        }
        .right-sidebar .column {
            width: 100%;
            display: inline-block;
            vertical-align: middle;
        }
        .right-sidebar .left {
            max-width: 100px;
        }
        .right-sidebar .right {
            max-width: 500px;
        }
        .right-sidebar .img {
            width: 100%;
            max-width: 80px;
            height: auto;
        }
        .right-sidebar .contents {
            font-size: 14px;
            text-align: center;
        }
        .right-sidebar a {
            color: #70bbd9;
        }

        /*Media Queries*/
        @media screen and (max-width: 400px) {
            .two-column .column,
            .three-column .column {
                max-width: 100% !important;
            }
            .two-column img {
                max-width: 100% !important;
            }
            .three-column img {
                max-width: 50% !important;
            }
        }
    </style>
</head>
<body>
<center class="wrapper">
    <div class="webkit">
        <!--[if (gte mso 9)|(IE)]>
        <table width="600" align="center">
            <tr>
                <td>
        <![endif]-->
        <table class="outer" align="center">
            <tr>
                <td class="one-column">
                    <table width="100%">
                        <tr>
                            <td class="inner contents">
                                <p>{{$manager->fullName()}}</p>
                                <p>
                                    We are pleased to welcome you as an Agent of Edaacil Cooperative Insurance Limited. We feel honored that you have choosen us to work with us, and we are eager to work with you.

                                </p>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="two-column">
                    <div class="column">
                        <table width="100%">
                            <tr>
                                <td class="inner">
                                    <table class="contents">
                                        <tr>
                                            <td>
                                                <a class="button" href="{{route('agent.auth.login')}}">Login Here</a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>

                </td>
            </tr>
            <tr>
                <td class="one-column">
                    <table width="100%">
                        <tr>
                            <td class="inner contents">
                                <br>
                                <p>We look forward to a long and successful association. Kindly use the details below to login to your account:- </p>
                                <p>{{$manager['email']}}</p>
                                <p> {{$password}}</p>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>

            <tr>
                <td class="one-column">
                    <table width="100%">
                        <tr>
                            <td class="inner contents">
                                <br>
                                <p>Edaacil Team</p>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>

        </table>

    </div>
</center>
</body>
</html>