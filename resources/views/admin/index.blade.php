@extends('app')
@section('title','Dashboard')
@section('content')
@include('nav')
<div class="container-fluid" style="direction: ltr">

<div class="row p-2">

<div class="col-md-2 col-sm-6 col-xs-12 p-1">
    <div class="list-group">
    <a href="{{route('admin.index')}}" class="list-group-item list-group-item-action">
            <i class="fas fa-tachometer-alt"></i>
          HOME
        </a>
        <a href="{{route('admin.orders')}}" class="list-group-item list-group-item-action">
            <i class="fas fa-shopping-bag"></i>
            ORDERS</a>
        <a href="{{route('admin.products')}}" class="list-group-item list-group-item-action">
            <i class="fas fa-store"></i>
            PRODUCTS</a>
        <a href="{{route('admin.categories')}}" class="list-group-item list-group-item-action">
            <i class="fas fa-clipboard-list"></i>
            CATEGORIES</a>
            <a href="{{route('admin.infos')}}" class="list-group-item list-group-item-action">
                <i class="fas fa-cogs"></i>
                INFORMATIONS</a>
            
        
      </div>
</div>
<div class="col-md-10 col-sm-6 col-xs-12 p-2">
<div class="row justify-content-center">
    <div class="col-md-3 col-sm-6 col-xs-12 m-3 p-1 text-center bg-white rounded shadow text-white" style="background-color: #dd2c00 !important">
        <i class="fas fa-shopping-bag"></i>
        <br>
        ORDERS
        <hr>
        
        {{$orders}}
    </div>
    <?php $populars = \App\OrderDetail::select('product')->groupBy('product')->orderByRaw('COUNT(*) DESC')->limit(1)->get();  ?>
    <div class="col-md-3 col-sm-6 col-xs-12 m-3 p-1 text-center bg-white rounded shadow text-white" style="background-color: #dd2c00 !important">
        <i class="fas fa-store"></i>
        <br>
POPULAR SELL        <hr>
        @foreach ($populars as $pop)
        
         <h6>{{$pop->product}}</h6>
         
         <?php $totalat = \App\OrderDetail::where('product', $pop->product)->sum('montant');   ?>
         <?php $qty = \App\OrderDetail::where('product', $pop->product)->sum('qty');   ?>
        - <b>QTY :</b> {{$qty}} <br>
        - <b>AMOUNT :</b> {{$totalat}} $
       @endforeach
    </div>
</div>
<?php $price = DB::table('ship')->where('id',1)->value('shipping'); ?>
{{-- <form action="{{route('shipping')}}" method="post">
    @csrf
  <div class="form-group col-3">
    <label for="exampleInputEmail1">Shipping price</label>
    <input type="number" name="price" value="{{$price}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <button type="submit" class="btn btn-primary mt-2">Edit</button>
  </div>
  
</form> --}}
</div>

</div>
    
</div>

<div class="pt-2 pb-2">
    <hr>
  </div>
@endsection