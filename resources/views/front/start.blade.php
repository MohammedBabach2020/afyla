@extends('app')

@section('title')
Acceuil
@endsection

@section('content')

<div class="container-fluid bg-white pt-5 pb-4">
    <div class="container text-start">
    <h2><b>AFYLA</b></h2>
</div>
</div>
<div class="container text-start mt-4">
    <h6><b>CHOOSE YOUR COUNTRY OR REGION</b></h6>
    <div class="accordion mt-1" id="accordionExample">
        @foreach($continent as $item)
        <div class="accordion-item">
            <h2 class="accordion-header border-bottom border-1 border-secondary pb-1" id="headingTwo">
              <button class=" text-secondary pb-1 ps-1 border-0 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo{{$item->id}}" aria-expanded="false" aria-controls="collapseTwo">
                <b>{{$item->continent}}</b>
              </button>
            </h2>
            <div id="collapseTwo{{$item->id}}" class="accordion-collapse collapse border-0" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body border-0">
                <ul class="list-group text-start border-0" style="background-color: #ECE7DF !important">
                    <?php $countries = \DB::table('countries')->where('continent', $item->continent)->orderBy('country', 'asc')->get(); ?>
                    @foreach($countries as $country)
                    <li class="list-group-item border-top-0 border-start-0 border-end-0 p-0 m-1" style="background-color: #ECE7DF !important"><a href="/currency/{{$country->id}}/{{$country->currency}}"><i class="fas fa-shopping-bag me-1"></i> {{$country->country}}</a></li>
                    @endforeach
                  </ul>              
                </div>
            </div>
          </div>
        @endforeach

      </div> 
</div>
<div class="continer mt-5 mb-5 pb-5">
</div>
@endsection