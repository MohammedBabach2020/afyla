@extends('app')

@section('title')
{{$cat}}
@endsection

@section('content')

@include('nav')


      <div class=" container mt-4 pt-1 text-center bg-white">

        <p class="fs-2 text-secondary"><b>{{$cat}}</b></p>

      </div>

      <div class="container pt-2 pb-2 text-start">
          <div class="row">
              <div class="col-md-6 row">
            <div class="col-4 text-center">
                <select class="form-select w-100 rounded-0 border-0 text-center" aria-label="Default select example" style="background-color: #ECE7DF;">
        <option selected>CATEGORY</option>
      </select>
              </div>
            <div class="col-4 text-center">
                <select class="form-select w-100 rounded-0 border-0 text-center" aria-label="Default select example" style="background-color: #ECE7DF;">
        <option selected>FILTERS</option>
      </select>
              </div>
            <div class="col-4 text-center">
                <select class="form-select w-100 rounded-0 border-0 text-center" aria-label="Default select example" style="background-color: #ECE7DF;">
        <option selected>SORT BY</option>
      </select>
              </div>
            </div>
          </div>
      </div>

      <div class="container">
          <div class="row justify-content center">
            @foreach($products as $item)
              <div class="col-md-4 ps-1 pe-1 mt-2 mb-2">
                  <div class="col-12 text-end bg-white pe-3 pt-3 pb-2">
                    <i class="far fa-heart fs-3"></i>
                  </div>
                  <div class="produ h-100" style="direction: ltr">
                    <img class="w-100 h-100 produ-img" src="{{asset('storage/'.$item->image)}}">
                    <div class="mt-2 ps-2 pe-2">
                        <?php $sizat = \App\Size::where('prod_id',$item->id)->orderBy('size', 'ASC')->get(); ?>
                        <?php $sizatprice = \App\Size::where('prod_id',$item->id)->first(); ?>
                        
                        <span style="float:left !important;" > {{$item->name}} <br>
                            @foreach($sizat as $sizes)
                            {{$sizes->size}}
                            @endforeach
                        </span>
                      
          @if(!empty($sizatprice))
                        <span style="float:right !important;" >{{$sizatprice->price}} EUR</span>
                        @endif
                        </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>

  <div class="container mb-5 mt-5 pt-5 pb-5"></div>

@endsection