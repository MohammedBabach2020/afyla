@extends('app')
@section('title','Informations')
@section('content')
@include('nav')
<div class="container-fluid ">

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
<form action="{{route('edit.infos')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                  <label for="nom">ADDRESS</label>
                  <input name="address" value="{{$infos->address}}" id="nom" class="form-control" type="text">
                        
                </div>
                
                <div class="form-group">
                    <label for="prix">PHONE</label>
                    <input type="text" value="{{$infos->phone}}" name="phone" id="prix" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="qty">EMAIL</label>
                    <input type="text" value="{{$infos->email}}" name="email" id="qty" class="form-control" >
                </div>
                
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-success btn-block">EDIT</button>
                </div>
            </form>
</div>

</div>
    
</div>

<div class="pt-2 pb-2">
    <hr>
  </div>
@endsection