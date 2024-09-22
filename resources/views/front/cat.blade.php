@extends('app')

@section('title')
{{$cat}}
@endsection

@section('content')

@include('nav')


      <div class=" justify-content-center  pb-5 text-center" style="background-color: #ECE7DF;">

        <div class="row d-flex justify-content-center" style="background-color: #ECE7DF;">
          @foreach($products as $item)
          
          <div class="col-sm-4 col-xs-12 h-100 p-5 text-center"  >
              <div class=" h-100 produ">
              <img class="w-100 h-100 produ-img shadow-sm rounded" src="{{asset('storage/'.$item->image)}}">
              <div class="produ-btn p-1">
                  <div class="row justify-content-center">
                  <div class="col-md-4 m-2">
                      <?php $sizat = \DB::table('sizes')->where('prod_id',$item->id)->first(); ?>
                      <form class="mt-2" action="{{route('cart.addnow')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$item->id}}">
                            
                            <input type="hidden" name="qty" value="1">
                                              <button type="submit" class="btn btn-light shadow rounded-pill text-center pt-2" ><i class="fas fa-cart-plus"></i></button>

</form>
                  </div>
                  
                  <div class="col-md-4 m-2">
                  <a href="/product/{{$item->id}}/{{$item->name}}" class="btn btn-light shadow rounded-pill text-center pt-2" ><i class="fas fa-eye"></i></a>
                  </div>
                  </div>
              </div>
              </div>
             <div class="mt-3">
         
              <span style="float:right !important;" > <button style="background:none; border:2px solid black;">SHOP</button> </span>
            

              <span style="float:left !important;" >{{$item->name}}</span>
              </div>
          </div>
          @endforeach


      </div>

      </div>

  

@endsection