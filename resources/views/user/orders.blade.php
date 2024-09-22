@extends('app')

@section('style')
<style>
    .active{
        color: white !important;
        background-color: #bdb7af !important
    }
    .nav-pills .btn:hover{
        color: white !important;
        background-color: #bdb7af !important
    }
</style>
@endsection

@section('title','Orders')

@section('content')

@include('nav')

<div class="container-fluid">

    <div class="row align-items-start">
        <div class="col-md-3 nav-pills me-3 border-end border-1 border-secondary pt-5 pb-5 pe-0 ps-0" style="background-color: #ECE7DF" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a href="/myprofil" class="text-uppercase text-secondary w-100 fw-bold btn border-0 pt-3 pb-3 text-start ps-4 rounded-0 fs-6" type="button">PROFILE</a>
          <a href="/user/change_password" class="text-uppercase text-secondary w-100 fw-bold btn border-0 pt-3 pb-3 text-start ps-4 rounded-0 fs-6" type="button">CHANGE YOUR PASSWORD</a>
          <a href="/user/orders" class="text-uppercase text-secondary w-100 active fw-bold btn border-0 pt-3 pb-3 text-start ps-4 rounded-0 fs-6" type="button">ORDERS</a>
          <a href="/user/address" class="text-uppercase text-secondary w-100 fw-bold btn border-0 pt-3 pb-3 text-start ps-4 rounded-0 fs-6" type="button">ADDRESS BOOK</a>
        </div>
        <div class="tab-content col-md-8 pt-5 pb-5" id="v-pills-tabContent">

            <div class="container-lfuid text-center">
                <p class="text-uppercase fw-bold fs-4">WELCOME BACK, {{$aut->name}}</p>
            </div>
            <div class="container-fluid p-2 text-start">

                <input class="form-control mr-sm-2 col-md-6 float-right mb-2" type="text" placeholder="Search..." id="query">
                <div class="table-responsive">
                <table class="table table-bordered  ">
                    <thead class="thead-inverse table text-white" style="background-color: #bdb7af !important">
                        <tr>
                            <th>Order ID</th>
                            <th>Amount</th>
                            <th>Costumer</th>
                            <th>Address</th>
                            <th>Phone number</th>
                            <th>State</th>
                            <th></th>
            
                        
                        </tr>
                    </thead>
                        <tbody id="myTable">
                                
                            
                            <tr>
                            <td>1</td>
                                <td>
                                   
                                    500 mad
                 
                               
                            </td>
                                <td>
                                   
                                    mohammed
                 
                               
                            </td>
                                <td>address</td>
                                <td>0615272049</td>
                                <td>
                                    
                                    <span class="text-primary">in delivering</span>
                                   
                                    {{-- <span class="text-success">Shipped</span> --}}
                                    
                                </td>
                                    <td><a  href="#myModal1" class="btn btn-success btn-sm  m-2" data-bs-toggle="modal">Details</a>
            
                                        <!-- Modal -->
            <div class="modal fade" id="myModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                {{-- <?php $details = \App\OrderDetail::where('order_id', $order->id)->get();  ?> --}}
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Order ID : 1</h5>
                      <button class="btn" type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <table class="table  table-responsive ">
                            <thead class="thead-inverse table-dark text-white">
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                    </tr>
                            </thead>
                                <tbody>
                                    
                                        
                                    
                    <tr>
                                    <td>
                                        {{-- <?php  $prod = \App\Product::where('id',$item->product)->first();  ?> --}}
                                        Product
                                    </td>
                                        <td>500 dh</td>
                                        <td>2</td>
                                        <td>
                                            
                                           
                                            1000 MAD
                      
            
                                        </td>
                    </tr>
                    </tbody>
                    </table>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
                                </td>
                            </tr>
                            
                           
                        </tbody>
            
                </table>
            </div>

</div>


         
        </div>
      </div>
        
    </div>
    <div class="pt-2 pb-2">
        <hr>
      </div>
    @endsection