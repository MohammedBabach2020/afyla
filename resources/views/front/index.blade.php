@extends('app')

@section('title')
AFYLA - ACCEUIL
@endsection

@section('content')

<!-- Button trigger modal -->

<!-- Modal -->
@if(session()->has('Registred'))
@else 
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-0 border-0">
      <div class="modal-header pt-3 pe-3 pb-0 border-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5 pt-0 mt-0">
        <h4 class="modal-title" id="exampleModalLabel"><b>JOIN OUR <br> COMMUNITY</b></h4>
<div class="row mt-3">
  <div class="col-md-6">
    <p class="lh-lg mb-3">
        GET 25% OFF YOUR FIRST ORDER. 
        RECEIVE EARLY ACCESS TO PRE-SALE. 
        EXCLUSIVE SERVICES, SHOP FASTER
        CHECK YOUR ORDERS AND RETURNS
        SAVE YOUR FAVORITE ITEMS
      </p>
      <form method="POST" action="{{route('subscribe')}}">
@csrf
        <input type="email" name="mail" placeholder="Enter your email" class="@error('email') is-invalid @enderror ps-1 pb-2 form-control border-top-0 border-start-0 border-end-0 border-2 border-dark rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
        <button type="submit" class="btn btn-dark w-100 pt-2 pb-2 mt-3 rounded-0">SUBSCRIBE</button>

      </form>
      </div>
      <div class="col-md-6 text-center">
        <img src="{{asset('/pop.png')}}" alt="" class="img-fluid">
      </div>
      </div>
      </div>
    </div>
  </div>
</div>
@endif

@include('nav')

{{-- carousel --}}

<div id="carouselExampleControls" class="carousel slide p-4" data-bs-ride="carousel" style="background-color: #ECE7DF;" >


<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('3.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <button class="mx-auto"  type="button" style=" outline:0; background-color:red; width:250px; height:60px; background:none; border: 4px solid white ; " >
    <h6 style="color:white;">DISCOVER MORE </h6>

        </button>
  </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('2.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <button class="mx-auto"  type="button" style=" outline:0;  background-color:red; width:250px; height:60px; background:none; border: 4px solid white ; " >     
    <h6  style="color:white;" >DISCOVER MORE </h6>
        </button>
  </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('1.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <button class="mx-auto"  type="button" style="  outline:0; background-color:red; width:250px; height:60px; background:none; border: 4px solid white ; " >
    <h6 style="color:white;" >DISCOVER MORE </h6>
        </button>
  </div>
    </div>

    


   
  </div>



  
  <button class="carousel-control-prev btn border-0" type="button"  style="outline:none !important;" data-bs-target="#carouselExampleControls" data-bs-slide="prev" >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next btn border-0" type="button"style="outline:none !important;" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

{{-- carousel --}}

{{-- Catégories --}}

<div class="w-100 px-4 text-center" style="background-color: #ECE7DF;">
  <div class="row justify-content-center d-flex">
    @foreach($categories as $item)
    <div class="col-md-5 col-sm-6 col-xs-12 item people ">
      <a class="namcat" href="/category/{{$item->name}}"> 
      <div class="box" >
          <img style="max-height: 600px;max-width: 600px;" src="{{asset('storage/'.$item->image)}}" class="img-fluid w-100 cb">
         
          <div class="centered"><h5 class="text-white mt-2"  > <b>DISCOVER OUR {{$item->name}}</b></h5></div>
           
      </div>
    </a> 
  </div>
  @endforeach
  </div>
</div>

{{-- Catégories --}}
@if(session()->has('cookied'))
@else 
<div class="fixed-bottom container-fluid w-100 pt-4 pb-4 pe-3 ps-3 text-white" style="background-color: black">
  <p>
  AFYLA uses cookies to give you the best experience. Cookies allows you shop our collections and use any personalized features available on our
website. click here to view our privacy and cookie policy to learn more about this.
</p>
<a href="{{route('setCookie')}}"><button class="btn btn-light rounded-0 pt-1 pb-1 pe-3 ps-3">ACCEPT</button></a>
</div>
@endif
@endsection

@section('js')
    <script>
        $(document).ready(function(){
        $("#exampleModal").modal('show');
    });

    </script>
@endsection