@extends('app')
@section('title','Categories')
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
<div class="col-md-10 col-sm-6 col-xs-12 p-2">
<button class="btn btn-success mb-2" type="button" data-bs-toggle="modal" data-bs-target="#add"><i class="fas fa-plus"></i> NEW CATEGORY</button>

       <input class="form-control mr-sm-2 col-md-6 float-right" type="text" placeholder="Search..." id="query">
       <div class="table-responsive">
    <table class="table table-bordered mt-2 ">
        <thead class="thead-inverse table-dark text-white">
            <tr>
                <th>NAME</th>
                <th>PICTURE</th>
                <th></th>

            </tr>
        </thead>
            <tbody id="myTable">
                @foreach($categories as $item)
                <tr>
                <td>{{$item->name}}</td>
                    <td scope="row"><img src="{{ asset('storage/'. $item->image)}}" alt="" height="100" width="100"></td>
                
                    <td class="d-flex">          
                            <button type="button" class="btn btn-primary btn-sm m-2" data-bs-toggle="modal" data-bs-target="#edit{{$item->id}}"><i class="fa fa-edit"></i></button>
                    
                    <!-- Modal Edit -->
<div class="modal fade" id="edit{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">EDIT {{$item->name}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('edit.categories')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$item->id}}">
                
                <div class="form-group">
                  <label for="nom">NAME</label>
                  <input name="nom" id="nom" class="form-control" value="{{$item->name}}" type="text">
                        
                </div>
               
                <div class="form-group">
                    <label for="image">PICTURE</label>
                    <input type="file" name="image" id="image" class="form-control" >
                </div>

                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-success btn-block">EDIT</button>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
        </div>
      </div>
    </div>
  </div>
                    
                            <form action="{{route('delete.categories')}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" value="{{$item->id}}" name="id">
                            <button type="submit" onclick="return confirm('Do you really want to delete this category !!')" class="btn btn-danger btn-sm m-2"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
              @endforeach
                
            </tbody>

    </table>
  </div>
</div>

</div>
    
</div>

<!-- Modal Add -->
<div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">NEW CATEGORY</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('add.categories')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                  <label for="nom">NAME</label>
                  <input name="nom" id="nom" class="form-control" type="text">
                        
                </div>
                <div class="form-group">
                    <label for="image">PICTURE</label>
                    <input type="file" name="image" id="image" class="form-control" required>
                </div>
               
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-success btn-block">ADD</button>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
        </div>
      </div>
    </div>
  </div>


  <div class="pt-2 pb-2">
    <hr>
  </div>

@endsection