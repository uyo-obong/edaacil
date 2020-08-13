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
                                    <p>You have successfully reset your password, if you did not carry out this action kindly contact <a href="{{ $url }}/#contact"> Edaacil </a> to restrict your access.</p>

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