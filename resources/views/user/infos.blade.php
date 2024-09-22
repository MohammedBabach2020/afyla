@extends('app')

@section('style')
<style>
    .active{
        color: white !important;
        background-color: #bdb7af !important
    }
    .nav-pills .btn:hover{
        color: white !important;
        background-color: #bdb7af !important
    }
</style>
@endsection

@section('title','Cange password')

@section('content')

@include('nav')

<div class="container-fluid">

    <div class="row align-items-start">
        <div class="col-md-3 nav-pills me-3 border-end border-1 border-secondary pt-5 pb-5 pe-0 ps-0" style="background-color: #ECE7DF" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a href="/myprofil" class="text-uppercase text-secondary w-100 fw-bold btn border-0 pt-3 pb-3 text-start ps-4 rounded-0 fs-6" type="button">PROFILE</a>
          <a href="/user/change_password" class="text-uppercase text-secondary active w-100 fw-bold btn border-0 pt-3 pb-3 text-start ps-4 rounded-0 fs-6" type="button">CHANGE YOUR PASSWORD</a>
          <a href="/user/orders" class="text-uppercase text-secondary w-100 fw-bold btn border-0 pt-3 pb-3 text-start ps-4 rounded-0 fs-6" type="button">ORDERS</a>
          <a href="/user/address" class="text-uppercase text-secondary w-100 fw-bold btn border-0 pt-3 pb-3 text-start ps-4 rounded-0 fs-6" type="button">ADDRESS BOOK</a>
        </div>
        <div class="tab-content col-md-8 pt-5 pb-5" id="v-pills-tabContent">

              <div class="container-lfuid text-start p-3">
                <h5 class="fw-bold col-6 text-start text-secondary">CHANGE PASSWORD
                </h5>

                <form class="mt-3" method="POST" action="{{ route('editpassword.users') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{$aut->id}}">
                    <div class="mb-3">
                      <input style="background-color: #ECE7DF" type="password" name="pass" placeholder="CURRENT PASSWORD" class="@error('email') is-invalid @enderror p-3 form-control border-1 border-secondary rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <input style="background-color: #ECE7DF" type="password" name="newpass" placeholder="NEW PASSWORD" class="@error('password') is-invalid @enderror p-3 form-control border-1 border-secondary rounded-0" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                      <input style="background-color: #ECE7DF" type="password" name="confpass" placeholder="CONFIRM PASSWORD" class="@error('password') is-invalid @enderror p-3 form-control border-1 border-secondary rounded-0" id="exampleInputPassword1">
                    </div>
                    <div class="w-100 text-end"><button type="submit" class="btn btn-light border-0 rounded-0 pt-2 pe-5 pb-2 ps-5" style="background:#bdb7af !important"><b>SAVE</b></button></div>
                </form>
              </div>


         
        </div>
      </div>
        
    </div>
    <div class="pt-2 pb-2">
        <hr>
      </div>
    @endsection