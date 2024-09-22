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

@section('title','Dashboard')

@section('content')

@include('nav')

<div class="container-fluid">

    <div class="row align-items-start">
        <div class="col-md-3 nav-pills me-3 border-end border-1 border-secondary pt-5 pb-5 pe-0 ps-0" style="background-color: #ECE7DF" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a href="/myprofil" class="text-uppercase text-secondary w-100 fw-bold active btn border-0 pt-3 pb-3 text-start ps-4 rounded-0 fs-6" type="button">PROFILE</a>
          <a href="/user/change_password" class="text-uppercase text-secondary w-100 fw-bold btn border-0 pt-3 pb-3 text-start ps-4 rounded-0 fs-6" type="button">CHANGE YOUR PASSWORD</a>
          <a href="/user/orders" class="text-uppercase text-secondary w-100 fw-bold btn border-0 pt-3 pb-3 text-start ps-4 rounded-0 fs-6" type="button">ORDERS</a>
          <a href="/user/address" class="text-uppercase text-secondary w-100 fw-bold btn border-0 pt-3 pb-3 text-start ps-4 rounded-0 fs-6" type="button">ADDRESS BOOK</a>
        </div>
        <div class="tab-content col-md-8 pt-5 pb-5" id="v-pills-tabContent">

              <div class="container-lfuid text-center">
                  <p class="text-uppercase fw-bold fs-4">WELCOME BACK, {{$aut->name}} {{$aut->lastname}}</p>
              </div>
              <div class="container-fluid p-3 text-start">
                <div class="row pb-2">
                  <h5 class="fw-bold col-6 text-start text-secondary">PROFILE INFORMATION</h5>
                  <div class="col-6 text-end"><button onclick="editinfos()" class="btn btn-light border-0 rounded-0 pt-1 pe-3 pb-1 ps-3" style="background:#bdb7af !important"><b>EDIT</b></button></div>
                </div>
<div id="infoss">
  <div class="row ps-2">
    <div class="col-md-4 pb-3 text-uppercase"><b>{{$aut->name}} {{$aut->lastname}}</b></div>
    <div class="col-md-8 pb-3 text-uppercase">{{$aut->email}}</div>
    <div class="col-md-4 pb-3 text-uppercase">DOB : {{$aut->day}}/{{$aut->mounth}}/{{$aut->year}}</div>
    <div class="col-md-8 pb-3 text-uppercase">{{$aut->country}}</div>
    <div class="form-check float-start">
        <input type="checkbox" class="form-check-input rounded-0 border-3 border-dark" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1"> UNSUBSCRIBE TO THE NEWSLETTER .</label>
      </div>
    </div>     
</div>
<div id="editinfos" style="display: none" >


<form class="mt-3 row" method="POST" action="{{ route('edit.users') }}">
  @csrf
  <input type="hidden" name="id" value="{{$aut->id}}">
  <div class="mb-2 col-md-6">
    <input style="background-color: #ECE7DF" type="text" name="name" value="{{$aut->name}}" placeholder="FIRST NAME" class="@error('email') is-invalid @enderror p-2 form-control border-1 border-secondary rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-2 col-md-6">
    <input style="background-color: #ECE7DF" type="text" name="lastname" value="{{$aut->lastname}}" placeholder="LAST NAME" class="@error('password') is-invalid @enderror p-2 form-control border-1 border-secondary rounded-0" id="exampleInputPassword1">
  </div>
  <div class="mb-2 col-md-6">
    <input style="background-color: #ECE7DF" type="text" name="email" value="{{$aut->email}}" placeholder="EMAIL" class="@error('password') is-invalid @enderror p-2 form-control border-1 border-secondary rounded-0" id="exampleInputPassword1">
  </div>
  <div class="mb-2 col-md-6">
    <input style="background-color: #ECE7DF" type="text" name="country" value="{{$aut->country}}"  placeholder="COUNTRY" class="@error('email') is-invalid @enderror p-2 form-control border-1 border-secondary rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-2 col-md-2">
    <select name="day" class="form-select w-100 border-1 rounded-0 border-secondary text-center" style="background-color: #ECE7DF" aria-label="Default select example">
      <option selected value="{{$aut->day}}">{{$aut->day}}</option>
      <?php $dates = \DB::table('dates')->get(); ?>

      @foreach($dates as $item)
        @if(!empty($item->days))
        <option value="{{$item->days}}">{{$item->days}}</option>
        @endif
        @endforeach
      
         </select>
      </div>
      <div class="mb-2 col-md-2">
        <select name="mounth" class="form-select w-100 border-1 rounded-0 border-secondary text-center" style="background-color: #ECE7DF" aria-label="Default select example">
          <option selected value="{{$aut->mounth}}">{{$aut->mounth}}</option>
          @foreach($dates as $item)
          @if(!empty($item->mounths))
          <option value="{{$item->mounths}}">{{$item->mounths}}</option>
          @endif
          @endforeach
        </select> 
            </div>
    
  <div class="mb-2 col-md-3">
    <select name="year" class="form-select w-100 border-1 rounded-0 border-secondary text-center" style="background-color: #ECE7DF" aria-label="Default select example">
      <option selected value="{{$aut->year}}">{{$aut->year}}</option>
      @foreach($dates as $item)
        @if(!empty($item->years))
        <option value="{{$item->years}}">{{$item->years}}</option>
        @endif 
        @endforeach
    </select>
     </div>
  <div class="mb-2 col-md-5">
    <input style="background-color: #ECE7DF" type="number" value="{{$aut->phone}}" name="phone" placeholder="PHONE" class="@error('password') is-invalid @enderror p-2 form-control border-1 border-secondary rounded-0" id="exampleInputPassword1">
  </div>
  
  <div class="w-100 text-end">
    <button type="button" onclick="infoss()" class="btn btn-light border-0 rounded-0 pt-2 pe-5 pb-2 ps-5" style="background:#d5cdc5 !important"><b>CANCEL</b></button>
    <button type="submit" class="btn btn-light border-0 rounded-0 pt-2 pe-5 pb-2 ps-5" style="background:#bdb7af !important"><b>SAVE</b></button>
  </div>
</form>
</div>
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
          function editinfos() {
  document.getElementById("infoss").style.display = "none";
  document.getElementById("editinfos").style.display = "block";
}
          function infoss() {
  document.getElementById("infoss").style.display = "block";
  document.getElementById("editinfos").style.display = "none";
}
          </script>
    @endsection