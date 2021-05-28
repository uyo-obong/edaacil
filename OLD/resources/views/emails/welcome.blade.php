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
                                    <p>Hi {{$manager->fullName()}}</p>
                                    <p>
                                        We are pleased to welcome you as an Agent of Edaacil Cooperative Insurance Limited. We feel honored that you have choose to work with us, and we are eager to work with you.

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
                                    <p>Email: {{$manager['email']}}</p>
                                    <p>Password: {{$password}}</p>
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