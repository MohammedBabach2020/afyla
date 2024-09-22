@extends('app')

@section('content')

@include('nav')

<div class="container mt-5 p-3 mb-5 rounded shadow bg-light">
    <div class="row justify-content-center mb-3">
        <div class="col-md-7 text-start">
<h2>About us</h2>
            <p>
                ARABICRAFT is more than an e-commerce company, it regroups of multi cooperatives of handmade artisanal craft by Arab women. We work together to inspire and to be inspired, we help each to evolve and to be evolved. Our company can make you able to have a piece of the Arabic culture, history and design in your own space wherever you are. Our mission is to present the Arabic artisanal art to the world.        </p>
        <img src="{{asset('logo.png')}}" alt="" width="80px">
        </div>
        <div class="col-md-5 text-center">
<img src="{{asset('about.png')}}" width="100%" alt="">
        </div>
    </div>
    <iframe class="w-100 rounded shadow-lg mx-auto" height="360px" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>

</div>

@endsection