@extends('emails.layouts.master')

@section('content')
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
                                    <p>Hi {{ $agent->first_name }}!</p>
                                    <p>You are receiving this email because we received a password reset request for your account.</p>

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
                                                    <a class="button" href="{{ $token }}">Reset Password</a>
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
                                    <p>Note: This link is going to expire after 60 minutes</p>
                                    <br>
                                    <p>Please ignore if you did not request a password reset, no further action is required. </p>
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
@stop