@extends('app')

@section('title','Wish List')

@section('content')

@include('nav')

<nav id="lognav" class="wishlog " style="direction:ltr;" >

<div class=" d-flex flex-nav">

<div style="height:100% !important;" class=" w-50  part1">
<p class="px-5 mt-3" >
Register or log in to save your wish list and manage your orders 
</p>

<button class=" pt-3 pb-3 mx-5 mb-2" style=" font-weight:bold;background:#D8D4CF !important; border:none; font-size:12pt; font-family:sans-serif !important; width:150px;"  >
Login
</button>
<button class="  d-inline-block pt-3 pb-3 mx-5 mb-2" style="font-weight:bold; background:#D8D4CF !important; border:none; font-size:12pt; font-family:sans-serif !important; width:150px;"  >
 Register
</button>


</div>
<div style="height:100% !important;" class="w-50 part2">
<a href="javascript:void(0)" onclick="closethis()" class="closebtn px-3" style="float:right !important;" > &times; </a>

</div>


</div>

</nav>





<div class="row justify-content-center align-items-center px-5 " style="direction: ltr">

    <div class="row">
        <div class="col-6 text-start p-2">3 items</div>
        <div class="col-6 text-end p-2 row">
            <div class="col w-75 text-end">
                <i class="fas fa-share-alt mx-2"></i>
                 | Sort by</div>
            <div class="col w-25">
            <select name="year" class="form-select border-2 rounded-0 border-secondary text-center" style="background-color: #ECE7DF" aria-label="Default select example">
                <option selected>Date</option>
                <option>Name A-Z</option>
                <option>Name Z-A</option>
                <option>Highest to lowest price</option>
                <option>Lowest to highest price</option>
                
              </select>
            </div>
        </div>
    </div>

<div class="col-md-3  p-2 " style="height:600px;" >
<div class="col-12 h-25 text-end bg-light px-3 pt-3">
    
    <i style="font-size:2em;" class="fas fa-share-alt mx-2"></i>
    <a ><i style="font-size:2em;" class="fas fa-times mx-2"></i></a>
</div>
<div class="col-12 h-50 bg-light ">
    <img src="{{asset('5.png')}}" alt="" style="height: 100%; width:100%;">

</div>
<div class="col-12 h-25 bg-light">
    <div class="row h-50">

    </div>
  <div class="row h-50 ">
    <div class="col-6 text-start px-3 ">
        <p class="fw-bold ">BLACK COAT</p>
        <p class="fw-bold"> <sub>€ 3,000.00</sub></p>
        </div>
        
        <div class="col-6 text-end pe-4 ">
            <i style="font-size:2em;"   class="fas fa-plus px-2"></i>
        </div>
  </div>

</div>

    
</div>


{{-- ---------------------------------------- --}}

<div class="col-md-3  p-2 " style="height:600px;" >
    <div class="col-12 h-25 text-end bg-light px-3 pt-3">
        
        <i style="font-size:2em;" class="fas fa-share-alt mx-2"></i>
        <a ><i style="font-size:2em;" class="fas fa-times mx-2"></i></a>
    </div>
    <div class="col-12 h-50 bg-light ">
        <img src="{{asset('5.png')}}" alt="" style="height: 100%; width:100%;">
    
    </div>
    <div class="col-12 h-25 bg-light">
        <div class="row h-50">
    
        </div>
      <div class="row h-50 ">
        <div class="col-6 text-start px-3 ">
            <p class="fw-bold ">BLACK COAT</p>
            <p class="fw-bold"> <sub>€ 3,000.00</sub></p>
            </div>
            
            <div class="col-6 text-end pe-4 ">
                <i style="font-size:2em;"   class="fas fa-plus px-2"></i>
            </div>
      </div>
    
    </div>
    
        
    </div>
{{-- ---------------------------------------- --}}

</div>






<script>


function closethis() {
document.getElementById("lognav").style.display = "none";

}
</script>
@endsection





