@extends('app')
@section('title','Orders')
@section('content')
@include('nav')
<div class="container-fluid">

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
<div class="col-md-10 col-sm-6 col-xs-12 p-2 ">
    <input class="form-control mr-sm-2 col-md-6 float-right mb-2" type="text" placeholder="Search..." id="query">
    <div class="table-responsive">
    <table class="table table-bordered">
        <thead class="thead-inverse table-dark text-white">
            <tr>
                <th>ID</th>
                <th>AMOUNT</th>
                <th>COSTUMER</th>
                <th>ADDRESS</th>
                <th>PHONE NUMBER</th>
                <th>STATE</th>
                <th></th>

            
            </tr>
        </thead>
            <tbody id="myTable">
                @foreach ($orders as $order)
                    
                
                <tr>
                <td>{{ $order->id }}</td>
                    <td>
                       
                        {{ $order->montant}} 
     
                   
                </td>
                    <td>{{ $order->client_name }}</td>
                    <td>{{ $order->address }}, {{ $order->city }}, {{ $order->state }}</td>
                    <td>{{ $order->client_phone }}</td>
                    <td>
                        @if($order->etat == 0)
                        <form action="{{route('confirm.orders')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$order->id}}" name="id">
                            <input type="hidden" value="{{$order->etat}}" name="confirm">
                            <button type="submit" class="btn btn-danger btn-sm m-2">Confirm</button>
                        </form>
                        @endif
                        @if($order->etat == 1)
                        <form action="{{route('confirm.orders')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$order->id}}" name="id">
                            <input type="hidden" value="{{$order->etat}}" name="confirm">
                            <button type="submit" class="btn btn-dark btn-sm m-2"  style="background-color: rgb(0, 150, 0) !important">Confirmed</button>
                        </form>
                        @endif
                    </td>
                        <td><a  href="#myModal{{$order->id}}" class="btn btn-success btn-sm  m-2" data-bs-toggle="modal">Details</a>

                            <!-- Modal -->
<div class="modal fade" id="myModal{{$order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php $details = \App\OrderDetail::where('order_id', $order->id)->get();  ?>
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ID : {{$order->id}}</h5>
          <button class="btn" type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table class="table  table-responsive ">
                <thead class="thead-inverse table-dark text-white">
                    <tr>
                        <th>PORDUCT</th>
                        <th>PRICE</th>
                        <th>QTY</th>
                        <th>AMOUNT</th>
        </tr>
                </thead>
                    <tbody>
                        @foreach ($details as $item)
                            
                        
        <tr>
                        <td>
                            {{$item->product}}
                        </td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->qty }}</td>
                            <td>
                                
                               
                                {{ $item->montant}} $
          

                            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
        </div>
      </div>
    </div>
  </div>
                    </td>
                </tr>
                
                @endforeach
            </tbody>

    </table>
</div>
</div>

</div>
    
</div>

<div class="pt-2 pb-2">
    <hr>
  </div>

@endsection