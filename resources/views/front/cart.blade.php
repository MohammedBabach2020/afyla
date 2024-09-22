@extends('app')

@section('title','Cart')

@section('content')

@include('nav')

<div class="container mb-4 mt-5" style="direction:ltr; background:#ECE7DF;" >
    <div class="row justify-content-center">
        @if(Cart::count() == 0)
        <div class="col-md-6 text-center">
            <img class="img-fluid" width="100%" src="{{asset('empty-cart.png')}}" alt="">
            <h4>Your bag is empty</h4>
            <a href="/">
                <button class="btn btn-block btn-dark m-1">Confirm</button>
            </a>
        </div>
            @else
            <!-- @if(session()->has('add'))
<div class="alert alert-success d-flex align-items-center" role="alert">
  <div>
product has been added </div>
</div>
@endif -->
            <div class="alert alert-primary d-flex align-items-center" role="alert">
  <div>
You can always shop more ... <a href="/" ><b>Continue your shopping</b></a>  </div>
</div>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped" style="direction:ltr;">
                    <thead>
                        <tr>
                            <th scope="col" style="width:50px;" >   </th>
                            <th     scope="col" class="text-left">Name</th>
                            <th   scope="col" class="text-left">Quantity</th>
                            <th    scope="col" class="text-left">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(Cart::content() as $item)
                        <?php $prod = \App\Product::where('id',$item->id)->first(); ?>
                        <tr>
                            <td><img src="{{asset('storage/'. $prod->image)}}" width="50px"/> </td>
                            <td>{{$prod->name}} | Size : {{$item->options->size}}</td>
                            <td>
                                <form action="{{route('cart.update')}}" method="post" class="row">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$item->rowId}}">
                                    <div class="col-md-8 p-1">
                                        <input  style="background:none; border:none !important; border-bottom:3px solid black !important; outline:none !important;" class="form-control" name="qty" type="number" value="{{$item->qty}}" /> 
                                    </div>
                                    <div class="col-md-4 p-1">
                                        <button type="submit" class="btn" style="background:none; "><i class="fas fa-check"></i></button> 
                                    </div>
                            </form>
                            </td>
                            <td class="text-right">{{$item->price * $item->qty}} $</td>
                            <td class="text-right">
                                <form action="{{route('cart.remove')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$item->rowId}}">
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> 
                            </form>
                        </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>                            
                            <td></td>                            
                            <td class="text-end"><h5>Amount:</h5></td>
                            <td class="text-start"><h5>{{Cart::subtotal()}} $ </h5></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <!-- <h4>الشحن :</h4>
            <p>👈🏻التوصيل مجاني فمراكش لكل طلبية فيها 150 درهم فما فوق.. 
<br>
👈🏻في حالة اقل من 150 درهم 
التوصيل 15 درهم
<br>
👈🏻التوصيل لباقي المدن 30 درهم فقط</p> -->
            <div class="row">
                <div class="col-sm-12 col-md-6 text-right" id="takid">
                    
                    <div class="col-sm-12  col-md-6">
                        @if(session()->has('logged'))
                        <a href="/address" class="btn btn-block m-1 btn-success text-uppercase" >Confirm </a>
                        @else
                        <a onclick="openlogNav()" href="#" class="btn btn-block m-1 btn-success text-uppercase" >Confirm </a> <small>SIGN IN FIRST.</small>

                        @endif
                    <a href="/">
                    <button class="btn btn-block btn-dark m-1">Continue shopping</button>
                </a>
                </div>

               
                </div>
           

            </div>
        </div>
        @endif
    </div>
</div>
<div class="container mb-5">
    <hr>
</div>
@endsection