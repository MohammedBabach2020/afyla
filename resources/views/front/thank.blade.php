@extends('app')

@section('title')
Order Confirmed
@endsection

@section('content')

@include('nav')

<div class="container-fluid mt-5 pb-5 ps-4" style="direction: ltr">
<div class="row pt-4 ps-4">
<div class="col-md-8">
<h3 class="text-secondary"><i class="fas fa-check-circle fs-1 text-success"></i> <b> YOUR ORDER HAS BEEN SUCCESSFUL, THANK YOU FOR TRUSTING US !
    ORDER NUMBER: FW220817729763863</b></h3>
    <br>
    <p>YOU WILL RECEIVE AN EMAIL CONFIRMATION SHORTLY </p>
</div>
<div class="col-md-4 text-center pt-4">
<h3 class="text-secondary"><b>QUESTIONS? </b>
    </h3>
    <h5>
        Call: +212678901234 
    or email us
    </h5>
</div>
<p class="text-primary">print receipt</p>
<br>
<h5><b>Save your information for next time !</b></h5>

<form class="row" method="POST" action="{{ route('confirm.login') }}">
    @csrf
    <div class="col-md-4 pt-1">
      <input type="password" name="email" placeholder="Create password" class=" bg-none @error('email') is-invalid @enderror ps-1 pb-2 form-control border-top-0 border-start-0 border-end-0 border-2 border-dark rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color: #ECE7DF">
    </div>
    <div class="col-md-4 pt-1">
      <input type="password" name="password" placeholder="Verify Password" class=" bg-none @error('password') is-invalid @enderror ps-1 pb-2 form-control border-top-0 border-start-0 border-end-0 border-2 border-dark rounded-0" id="exampleInputPassword1" style="background-color: #ECE7DF">
    </div>

    <div class="col-md-4">
    <button type="submit" class="btn btn-light pt-2 pb-2 pe-3 ps-3 border-dark rounded-0 border-2" style="background:white !important"><b>CREATE ACCOUNT</b></button>
  </div>
  </form>

</div>

</div>

</div>

<div class="container mb-5">
    <hr>
</div>


@endsection