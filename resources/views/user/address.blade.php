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

@section('title','ADDRESS BOOK')

@section('content')

@include('nav')

<div class="container-fluid">

    <div class="row align-items-start">
        <div class="col-md-3 nav-pills me-3 border-end border-1 border-secondary pt-5 pb-5 pe-0 ps-0" style="background-color: #ECE7DF" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a href="/myprofil" class="text-uppercase text-secondary w-100 fw-bold btn border-0 pt-3 pb-3 text-start ps-4 rounded-0 fs-6" type="button">PROFILE</a>
          <a href="/user/change_password" class="text-uppercase text-secondary w-100 fw-bold btn border-0 pt-3 pb-3 text-start ps-4 rounded-0 fs-6" type="button">CHANGE YOUR PASSWORD</a>
          <a href="/user/orders" class="text-uppercase text-secondary w-100 fw-bold btn border-0 pt-3 pb-3 text-start ps-4 rounded-0 fs-6" type="button">ORDERS</a>
          <a href="/user/address" class="text-uppercase text-secondary active w-100 fw-bold btn border-0 pt-3 pb-3 text-start ps-4 rounded-0 fs-6" type="button">ADDRESS BOOK</a>
        </div>
        <div class="tab-content col-md-8 pt-5 pb-5" id="v-pills-tabContent">

              <div class="container-lfuid text-start p-3">
                <div class="row pb-2">
                  <p class="fw-bold col-6 text-start text-secondary fs-6">ADDRESS BOOK</p>
                  <div class="col-6 text-end"><button type="submit" onclick="addaddress()" class="btn btn-light border-0 rounded-0 pt-1 pe-3 pb-1 ps-3" style="background:#bdb7af !important"><b>ADD A NEW ADDRESS</b></button></div>
                </div>
                <div id="addaddress" style="display: none">
                  <form class="mt-3 row" method="POST" action="{{ route('user.store') }}">
                      @csrf
                      <input type="hidden" name="id" value="{{$aut->id}}">
                      <input type="hidden" name="type" value="add">
                      <div class="mb-2 col-md-6">
                        <input style="background-color: #ECE7DF" type="text" name="name" placeholder="FIRST NAME" class="@error('email') is-invalid @enderror p-3 form-control border-1 border-secondary rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-2 col-md-6">
                        <input style="background-color: #ECE7DF" type="text" name="lastname" placeholder="LAST NAME" class="@error('password') is-invalid @enderror p-3 form-control border-1 border-secondary rounded-0" id="exampleInputPassword1">
                      </div>
                      <div class="mb-2 col-md-12">
                        <input style="background-color: #ECE7DF" type="text" name="address" placeholder="YOUR ADDRESS" class="@error('password') is-invalid @enderror p-3 form-control border-1 border-secondary rounded-0" id="exampleInputPassword1">
                      </div>
                      <div class="mb-2 col-md-4">
                        <input style="background-color: #ECE7DF" type="text" name="city" placeholder="CITY" class="@error('email') is-invalid @enderror p-3 form-control border-1 border-secondary rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-2 col-md-3">
                        <input style="background-color: #ECE7DF" type="number" name="zip" placeholder="ZIP CODE" class="@error('password') is-invalid @enderror p-3 form-control border-1 border-secondary rounded-0" id="exampleInputPassword1">
                      </div>
                      <div class="mb-2 col-md-5">
                        <input style="background-color: #ECE7DF" type="text" name="state" placeholder="STATE/ PROVINCE" class="@error('password') is-invalid @enderror p-3 form-control border-1 border-secondary rounded-0" id="exampleInputPassword1">
                      </div>
                      <div class="mb-2 col-md-5">
                        <input style="background-color: #ECE7DF" type="text" name="country" placeholder="COUNTRY" class="@error('password') is-invalid @enderror p-3 form-control border-1 border-secondary rounded-0" id="exampleInputPassword1">
                      </div>
                      <div class="mb-2 col-md-7">
                        <input style="background-color: #ECE7DF" type="number" name="phone" placeholder="TELEPHONE 1" class="@error('password') is-invalid @enderror p-3 form-control border-1 border-secondary rounded-0" id="exampleInputPassword1">
                      </div>
                      <div class="form-check float-start">
                        <input type="checkbox" name="defaulte" class="form-check-input rounded-0 border-3 border-dark" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1"> THIS MY DEFAULT ADDRESS .</label>
                      </div>
                      <div class="w-100 text-end">
                        <button type="button" onclick="canceladdress()" class="btn btn-light border-0 rounded-0 pt-2 pe-5 pb-2 ps-5" style="background:#d5cdc5 !important"><b>CANCEL</b></button>
                        <button type="submit" class="btn btn-light border-0 rounded-0 pt-2 pe-5 pb-2 ps-5" style="background:#bdb7af !important"><b>SAVE</b></button>
                      </div>
                  </form>
                </div>


                @if(session()->has('editaddress'))
                <?php $adrs = \App\Address::where('id',session()->get('editaddress'))->first(); ?>
                <div id="editaddress">
                  <form class="mt-3 row" method="POST" action="{{ route('user.store') }}">
                      @csrf
                      <input type="hidden" name="id" value="{{$aut->id}}">
                      <input type="hidden" name="idad" value="{{$adrs->id}}">
                      <input type="hidden" name="type" value="edit">
                      <div class="mb-2 col-md-6">
                        <input style="background-color: #ECE7DF" value="{{$adrs->name}}" type="text" name="name" placeholder="FIRST NAME" class="@error('email') is-invalid @enderror p-3 form-control border-1 border-secondary rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-2 col-md-6">
                        <input style="background-color: #ECE7DF" value="{{$adrs->lastname}}" type="text" name="lastname" placeholder="LAST NAME" class="@error('password') is-invalid @enderror p-3 form-control border-1 border-secondary rounded-0" id="exampleInputPassword1">
                      </div>
                      <div class="mb-2 col-md-12">
                        <input style="background-color: #ECE7DF" value="{{$adrs->address}}" type="text" name="address" placeholder="YOUR ADDRESS" class="@error('password') is-invalid @enderror p-3 form-control border-1 border-secondary rounded-0" id="exampleInputPassword1">
                      </div>
                      <div class="mb-2 col-md-4">
                        <input style="background-color: #ECE7DF" value="{{$adrs->city}}" type="text" name="city" placeholder="CITY" class="@error('email') is-invalid @enderror p-3 form-control border-1 border-secondary rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-2 col-md-3">
                        <input style="background-color: #ECE7DF" value="{{$adrs->zip}}" type="number" name="zip" placeholder="ZIP CODE" class="@error('password') is-invalid @enderror p-3 form-control border-1 border-secondary rounded-0" id="exampleInputPassword1">
                      </div>
                      <div class="mb-2 col-md-5">
                        <input style="background-color: #ECE7DF" value="{{$adrs->state}}" type="text" name="state" placeholder="STATE/ PROVINCE" class="@error('password') is-invalid @enderror p-3 form-control border-1 border-secondary rounded-0" id="exampleInputPassword1">
                      </div>
                      <div class="mb-2 col-md-5">
                        <input style="background-color: #ECE7DF" value="{{$adrs->country}}" type="text" name="country" placeholder="COUNTRY" class="@error('password') is-invalid @enderror p-3 form-control border-1 border-secondary rounded-0" id="exampleInputPassword1">
                      </div>
                      <div class="mb-2 col-md-7">
                        <input style="background-color: #ECE7DF" value="{{$adrs->phone}}" type="number" name="phone" placeholder="TELEPHONE 1" class="@error('password') is-invalid @enderror p-3 form-control border-1 border-secondary rounded-0" id="exampleInputPassword1">
                      </div>
                      <div class="form-check float-start">
                        <input type="checkbox" 
                        @if($adrs->defaulte == 1) 
                        checked 
                        @else
                        @endif 
                        name="defaulte" class="form-check-input rounded-0 border-3 border-dark" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1"> THIS MY DEFAULT ADDRESS .</label>
                      </div>
                      <div class="w-100 text-end">
                        <a href="" class="btn btn-light border-0 rounded-0 pt-2 pe-5 pb-2 ps-5" style="background:#d5cdc5 !important"><b>CANCEL</b></a>
                        <button type="submit" class="btn btn-light border-0 rounded-0 pt-2 pe-5 pb-2 ps-5" style="background:#bdb7af !important"><b>SAVE</b></button>
                      </div>
                  </form>
                </div>
  
  @endif


<hr>

@if(!empty($address))
@foreach($address as $item)
<div class="row ps-2">
  <div class="col-md-8 row">
    @if($item->defaulte == 1)
    <p class="fw-bold col-md-12 text-start text-dark fs-6">DEFAULT</p>
    @endif
  <div class="col-md-5 pb-2 text-uppercase">{{$item->name}} {{$item->lastname}}</div>
  <div class="col-md-7 pb-2 text-uppercase">{{$item->address}}</div>
  <div class="col-md-5 pb-2 text-uppercase">{{$item->phone}}</div>
  <div class="col-md-7 pb-2 text-uppercase">{{$item->city}}, {{$item->zip}}, {{$item->country}}</div>
</div>
<div class="col-md-4 row pt-4">
<a href="/edit/address/{{$item->id}}" class="text-dark col-6 text-decoration-underline"><b>EDIT</b></a>
<a href="/delete/address/{{$item->id}}" class="text-dark col-6 text-decoration-underline"><b>REMOVE</b></a>
</div>
             
</div>

<hr>
@endforeach
@else
<p class="fw-bold col-6 text-start text-secondary fs-6">NO SAVED ADDRESSES</p>
@endif

              </div>


         
        </div>
      </div>
        
    </div>
    <div class="pt-2 pb-2">
        <hr>
      </div>
    @endsection

    @section('js')
        <script>
          function addaddress() {
  document.getElementById("addaddress").style.display = "block";
}
function canceladdress() {
  document.getElementById("addaddress").style.display = "none";
}
          </script>
    @endsection