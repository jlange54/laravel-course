@extends('layouts.clean')


@section('childContent')
    @include('layouts.partials.header')
    @yield('content')

    <footer>
        @section('footerLinks')
            <a>Link 1</a>
            <a>Link 2</a>
        @show
    </footer>
@endsection
