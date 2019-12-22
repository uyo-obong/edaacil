@extends('errors.layout')

@section('title', 'Page Not Found')
@section('message')
    <div class="container">
        <div class="row center">
            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <img src="{{ URL::to('assets/images/404.svg') }}" alt="404" />
                </div>
                <div class="col-sm-4 mx-auto">
                    <a href="/" class="btn btn-primary btn-block waves-effect waves-light">GO TO HOMEPAGE</a>
                </div>
                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                    <span><a href="/" target="_blank">Edaacil.com</a></span>
                </div>
            </div>
        </div>
    </div>
@stop
