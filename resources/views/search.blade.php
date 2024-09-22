
  <div class="modal fade" id="searchmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header pt-0 pb-0">
          <div class="col-1 text-center">
            <i class="fas fa-search fs-3" aria-hidden="true"></i>
          </div>
          <div class="w-75">
            <input placeholder="SEARCH FOR SOMETHING YOU LOVE..." class="w-100 pt-4 pb-4 border-0 rounded-0 fs-6 fw-bold" type="text" name="" id="">
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

          

        <div class="modal-body p-4" style="background-color: #ECE7DF;">
          <!-- Search 1 -->
<h6><b>Suggestions</b></h6>
<div class="row mt-4 content-justify-center">
  @foreach ($categories as $item)
  <div class="col-md-2 p-2">
    <div class="w-100 p-2 text-center">
      <h6 class="text-uppercase"><b>{{$item->name}}</b></h6>
    </div>
    <div class="w-100 bg-white">
    <img src="{{asset('storage/'.$item->image)}}" alt="" class="img-fluid">
  </div>
  </div>
  @endforeach
  
</div>
<!-- Search 1 -->
<hr>
<!-- Search 2 -->
<h6>CATEGORY</h6>
      @foreach ($categories as $item)
      <h6><b>{{$item->name}}</b></h6>
      @endforeach
      <div class="row mt-5 pt-3 content-justify-center">
          <h6>PRODUCTS</h6>
        @foreach ($categories as $item)
        <div class="col-md-3 m-2 row p-2 ">
          <div class="col-md-5 bg-white p-0">
              <img src="{{asset('storage/'.$item->image)}}" alt="" class="img-fluid">
          </div>
          <div class="col-md-7 p-3 pt-5" style="background-color: #e4d6bf">
              <h6 class="text-uppercase"><b>{{$item->name}}</b></h6>
        </div>
        </div>
        @endforeach
        
      </div>
<!-- Search 2 -->
<hr>
<!-- No result search -->
<h5><b>No results were found for the keyword “JGJJSGD”</b></h5>
<p>“Try using the navigation to find what you’re looking for or you can use another keyword”</p>
<br>
<p>You can also search here:</p>
@foreach ($categories as $item)
<h6><b>{{$item->name}}</b></h6>
@endforeach
<div class="row mt-5 justify-content-center">
  <h6 class="text-center mb-2"><b>HOW CAN WE HELP YOU?</b></h6>
<div class="col-md-3 text-center">
  <a href="#" class="btn btn-light border-0 rounded-0 pt-1 pe-3 pb-1 ps-3 bg-white" ><b>EMAIL US</b></a>
</div>
<div class="col-md-3 text-center">
  <a href="#" class="btn btn-light border-0 rounded-0 pt-1 pe-3 pb-1 ps-3 bg-white" ><b>CHAT WITH US</b></a>
</div>
<div class="col-md-3 text-center">
  <a href="#" class="btn btn-light border-0 rounded-0 pt-1 pe-3 pb-1 ps-3 bg-white" ><b>CALL US
  </b></a>
</div>

</div>
<!-- No result search -->
        </div>

          

              
        
      </div>
    </div>
  </div>
