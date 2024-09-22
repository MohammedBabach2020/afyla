@extends('app')

@section('title','Choose Address')

@section('content')

@include('nav')

<div class="container mt-5 pt-4 ps-" style="direction:ltr;" >

<h4> <b>DEFAULT ADDRESS FOR SHIPPING :</b></h4>
<hr>
<div class="row">
<div class="col-md-7">
<p><b>FIRST NAME & LAST NAME</b></p>
<p>Karlsenskov 9 E, 7. sal. tv. 
    <br>
    Erslev 
    <br>
    1235
    <br>
    Bilzen 
    <br>
    Denmark 
    <br>
    +4570487965</p>
</div>
<div class="col-md-5 text-center">
    <a href="/thank-you" class="btn btn-success pt-3 pb-3 mt-3"><b>CONFIRM ORDER</b></a>

</div>
</div>
</div>

<div class="container">
    <hr>
</div>
@endsection