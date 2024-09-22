@extends('app')

@section('title')
{{$products->name}}
@endsection

@section('content')

@include('navdetails')


<div class="container-fluid pt-5 pb-5 mb-5" style=" background:white !important; direction :ltr;">

  @if(session()->has('add') && session()->get('add') == $products->id )
  <div class="alert alert-success d-flex align-items-center" role="alert">
    <div>
   Item was added to your cart successfully . <a href="/cart" ><b>Check your cart</b></a>  </div>
  </div>
  @endif
  <div class="row">

<div class="col-md-4">
  <div id="carouselExampleControls" class="carousel slide h-100 " data-bs-ride="carousel" style="background-color:white; " >


    <div class="carousel-inner  w-100">
        <div class="carousel-item active">
          <img   src="{{asset('4.png')}}" class=" img-fluid " alt="..." style="max-height:500px;" >
        </div>
        <div class="carousel-item">
          <img src="{{asset('4.png')}}" class="img-fluid " alt="..." style="max-height:500px;"   >
        </div>
        <div class="carousel-item ">
          <img src="{{asset('4.png')}}" class="img-fluid " alt="..."  style="max-height:500px;" >
        </div>
      </div>
    
    
    
      
      <button style="color:black !important;" class="carousel-control-prev btn border-0" type="button"  style="outline:none !important;" data-bs-target="#carouselExampleControls" data-bs-slide="prev" >
        <span style="color:black !important;"  class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span style="color:black !important;" class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next btn border-0" type="button"style="outline:none !important;" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

</div>

<div class="col-md-8 text-left  p-2 mt-5 pt-5 rounded">
    <div class="row">
      <div class="col-md-11">
    <div class="d-flex w-100" style="border-bottom:3px solid black;">
    <div class="w-50">
    <h3 style=" display:inline; color:black">{{$products->name}} 
    <!--<button type="button" class="btn btn-success shar btn-sm"><i class="fas fa-share-alt"></i> مشاركة</button>-->
    </h3>
    </div>
    
    <div class="w-50"></div>
    <p class="text-right" style=" display:inline-block; color:black"> <sub> REf:5566dd88</sub>
    </p>
    
    </div>
    </div>
    
    <div class="col-md-1 text-start">
    @livewire('wishlist')
    </div>
    
    </div>
    <p class="text-left w-100" style=" display:inline-block; color:black"> <sub> REf:5566dd88</sub>
    </p>
    <!--<button type="button" class="btn btn-success shar btn-sm"><i class="fas fa-share-alt"></i> مشاركة</button>-->
    
    
    
    <div class="w-100 mt-4 mb-5">
    
    
        <?php $sizat = \App\Size::where('prod_id',$products->id)->orderBy('size', 'ASC')->get(); ?>
        <div class="radios">
          <label class="form-check-label mt-1" for="flexRadioDefault1">
            Size:
            </label>
            @foreach($sizat as $sizes)
            <input type="radio" value="{{$sizes->price}}" class="btn-check mx-5" alt="{{$sizes->id}}" name="sizy" id="option{{$sizes->id}}" >
            <label value="{{$sizes->price}}" class="mx-3 btn btn-outline-dark border-0" for="option{{$sizes->id}}" onclick="cpt()" > {{$sizes->size}}</label>
              @endforeach
              <label class="form-check-label text-right " for="flexRadioDefault1">
                <a class="text-right" href="#">
              Find your size
                </a>
                </label>
            </div>
            
            
            <div class="row mt-4">
              <div class="col-md-10">
                
    
                <p class="mx-3 " style="font-size:13px; color:grey;"> <b class="text-dark" id="prix"></b> Enjoy free shipping and return</p>
              </div>
              <div class="col-md-2">
             <p style="font-size:13px; color:grey;"><i class="fas fa-circle text-danger"></i> Sold out</p>
    
              </div>
              <div class="col-12 text-center mt-4">
                @if(session()->has('add') && session()->get('add') == $products->id )
                <form action="/cart/add" method="post">
                  @csrf
                  <input id="goid" type="hidden" name="goid">
                <button disabled type="submit" class="pt-2 pb-2 px-5" style="background:#D8D4CF !important; border:none; font-size:18pt; font-family:sans-serif !important;"  >
                  ADD TO BAG
                </button>
                </form>
                @else
                <form action="/cart/add" method="post">
                  @csrf
                  <input id="goid" type="hidden" name="goid">
                <button type="submit" class="pt-2 pb-2 px-5" style="background:#D8D4CF !important; border:none; font-size:18pt; font-family:sans-serif !important;"  >
                  ADD TO BAG
                </button>
                </form>
                @endif
              </div>
            </div>
          </div>
          
</div>

  </div>


</div>


@endsection

@section('js')



<script>
  function cpt() {
    document.addEventListener('input',(e)=>{ 
      var pr;  
       pr  = e.target.value;
       id  = e.target.alt;
    document.getElementById('prix').innerHTML = pr + " MAD";
    document.getElementById('goid').value = id;
})
    
  }

</script>

@endsection