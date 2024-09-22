<!-- @extends('app') -->
@section('title','Products')
@section('content')
@include('nav')
<div class="container-fluid" style="direction:ltr;">

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
<button class="btn btn-success mb-2" type="button" data-bs-toggle="modal" data-bs-target="#add"><i class="fas fa-plus"></i> ADD New </button>

       <input class="form-control mr-sm-2 col-md-6 float-right" type="text" placeholder="Search..." id="query">
       <div class="table-responsive">
    <table class="table table-bordered mt-2 ">
        <thead class="thead-inverse table-dark text-white">
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Catgory</th>
                <th>Count </th>
                

                <th></th>
                <th> Most wanted</th>

            </tr>
        </thead>
            <tbody id="myTable">
                @foreach($products as $item)
                <tr>
                <td>{{$item->name}}</td>
                    <td scope="row"><img src="{{ asset('storage/'. $item->image)}}" alt="" height="100" width="100"></td>
                    <?php $sizes = \App\Size::where('prod_id',$item->id)->get(); ?>
                    <td>
                      @foreach ($sizes as $items)
                          {{$items->size}} {{$item->uni}} => {{$items->price}} $
                          <br>
                      @endforeach
                    </td>
                    <td>{{$item->category}}</td>
                    <td>null</td>

                    <td class="d-flex">          
                            <button type="button" class="btn btn-primary btn-sm m-2" data-bs-toggle="modal" data-bs-target="#edit{{$item->id}}"><i class="fa fa-edit"></i></button>
                    
                    <!-- Modal Edit -->
<div class="modal fade" id="edit{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">{{$item->name}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('edit.products')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$item->id}}">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">التصنيف</label>
                    <select name="categorie" class="form-control" id="exampleFormControlSelect1">
                        
                        <option value="{{$item->category}}">{{$item->category}}</option>

<?php $cats = \App\Category::where('name', '!=', $item->category)->get();    ?>

                        @foreach ($cats as $items)
                            
                        <option value="{{$items->name}}">{{$items->name}}</option>
                        @endforeach
                        
                        
                    </select>
                  </div>
                <div class="form-group">
                  <label for="nom">Name</label>
                  <input name="nom" id="nom" class="form-control" value="{{$item->name}}" type="text">
                        
                </div>
                <div class="form-group mb-2">
                  <label for="exampleFormControlSelect1">Unit</label>
                  <select name="uni" class="form-control" id="exampleFormControlSelect1">
                    <option selected value="{{$item->uni}}">{{$item->uni}}</option>
                      <option value="ل">ل</option>
                      <option value="كغ">كغ</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="qty">QTY</label>
                    <input type="number" step="any" name="stock" id="qty" value="{{$item->stock}}" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="5" rows="5" class="form-control">{{$item->description}}</textarea>
                </div>
                
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-success btn-block">Edit</button>
                </div>
            </form>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button> 
        </div> -->
      </div>
    </div>
  </div>
                    
                            <form action="{{route('delete.products')}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" value="{{$item->id}}" name="id">
                            <button type="submit" onclick="return confirm('Do you really want to delete this product !!')" class="btn btn-danger btn-sm m-2"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                    <td>
                        @if($item->trends == 0)
                        <form action="{{route('trend.products')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$item->id}}" name="id">
                            <input type="hidden" value="0" name="trend">
                            <button type="submit" class="btn btn-outline-light btn-sm m-2" style="background-color: gray !important">Active</button>
                        </form>
                        @endif
                        @if($item->trends == 1)
                        <form action="{{route('trend.products')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$item->id}}" name="id">
                            <input type="hidden" value="1" name="trend">
                            <button type="submit" class="btn btn-wraning btn-sm m-2" style="background-color: rgb(213, 170, 0) !important">Cancel</button>
                        </form>
                        @endif
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
<div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="direction:ltr;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">New product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('add.products')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Category</label>
                    <select name="categorie" class="form-control" id="exampleFormControlSelect1">
                        @foreach ($categories as $item)
                            
                        <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                        
                        
                    </select>
                  </div>
                <div class="form-group">
                  <label for="nom">Name</label>
                  <input name="nom" id="nom" class="form-control" type="text">
                        
                </div>
                <!-- <div class="form-group mb-2">
                  <label for="exampleFormControlSelect1">Unit</label>
                  <select name="uni" class="form-control" id="exampleFormControlSelect1">
                    <option selected disabled >اختيار الوحدة</option>
                      <option value="ل">ل</option>
                      <option value="مل">مل</option>
                      <option value="كغ">كغ</option>
                      <option value="غ">غ</option>
                  </select>
                </div> -->
                <div class="row bg-light">
                  <hr>
                  <div class="col-6">
                    <label for="prix">Size</label>
                  <input type="text" id="siza4" oninput="typesize4()" step="any" name="size[]" class="form-control" >
                  </div>
                  <div class="col-6">
                    <label for="prix">Price</label>
                    <input type="number" step="any" name="prix" id="prix4" class="form-control" >
                  </div>
                  
                  
                </div>
                <div class="row bg-light mt-2">
                <div class="col-6">
                  <input type="text" id="siza2" oninput="typesize2()" step="any" name="size[]" class="form-control" >
                  </div>
                  <div class="col-6">
                    <input type="number" step="any" name="prix" id="prix2" class="form-control">
                  </div>
                  
                  
                </div>
                <div class="row bg-light mt-2">
                <div class="col-6">
                  <input type="text" id="siza3" oninput="typesize3()" step="any" name="size[]" class="form-control" >
                  </div>
                  <div class="col-6">
                    <input type="number" step="any" name="prix" id="prix3" class="form-control" >
                  </div>
                  
                  
                </div>
                <hr>
                
                <div class="form-group">
                    <label for="qty">QTY</label>
                    <input type="number" step="any" name="stock" id="qty" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description2" cols="5" rows="5" class="form-control"></textarea>
                </div>
                
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-success btn-block">ADD</button>
                </div>
            </form>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
        </div> -->
      </div>
    </div>
  </div>


  <div class="pt-2 pb-2">
    <hr>
  </div>

@endsection


@section('js')

<script>
  function typesize4() {
  var x = document.getElementById("siza4").value;
  var res4 = x.replace(".", "n");
  document.getElementById("prix4").setAttribute("name", res4);
}

function typesize2() {
  var y = document.getElementById("siza2").value;
  var res2 = y.replace(".", "n");
  document.getElementById("prix2").setAttribute("name", res2);

}

function typesize3() {
  var z = document.getElementById("siza3").value;
  var res3 = z.replace(".", "n");
  document.getElementById("prix3").setAttribute("name", res3);

}
</script>
  
@endsection