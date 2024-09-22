@extends('app')

@section('title')
نتائج بحث ل " {{$query}} "
@endsection

@section('content')

@include('nav')

<div class="container-fluid mt-5 pb-5">
    <h3><i class="fas fa-search"></i> نتائج البحث ل " {{$query}} "</h3>
    <hr>
<div class="row justify-content-center">
    @if($products->count() == 0)
<div class="col-md-4 text-center">
    <img class="img-fluid" width="100%" src="{{asset('no-results.png')}}" alt="">
    <h4>لا توجد أي نتائج</h4>
    <h6>جرب كلمة أخرى</h6>
</div>
    @else

    <div class="container-fluid justify-content-center mt-5 mb-5 pb-5 text-center">
      <div class="row d-flex justify-content-center">
        @foreach($products as $item)
        <div class="col-md-3 col-sm-6 col-xs-12 p-2 text-center">
              <div class="mb-2 produ">
              <img class="w-100 produ-img img-fluid shadow-sm rounded" src="{{asset('storage/'.$item->image)}}">
              <div class="produ-btn p-1">
                  <div class="row justify-content-center">
<div class="col-md-4 m-2">
                      <?php $sizat = \DB::table('sizes')->where('prod_id',$item->id)->first(); ?>
                      <form class="mt-2" action="{{route('cart.addnow')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <input type="hidden" name="siz" value="{{$sizat->id}}">
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
              <h6>{{$item->name}}</h6>
              <?php $sizat = \DB::table('sizes')->where('prod_id',$item->id)->first(); ?>
              <p class="active">{{$sizat->price}} د.م</p>
          </div>

        @endforeach

    </div>
      </div>
    @endif
</div>

</div>

<div class="container mb-5">
    <hr>
</div>
@endsection