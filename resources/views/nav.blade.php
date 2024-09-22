<div id="mySidenav" class="sidenav">

<ul style="direction :ltr;" >

<li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>

<div id="main">
<li class="item">  <a class="d-inline" href="#">About</a>  <i class="fas fa-chevron-right"></i>
 </li>
 
<li class="item">  <a  class="d-inline" href="#">COLLECTIONS</a><i class="fas fa-chevron-right"></i></li>

<li class="item"> <a  class="d-inline" href="#" onclick="opensub()">SHOP</a><i class="fas fa-chevron-right"></i></li>

<li class="item">  <a  class="d-inline" href="#">LOGIN</a><i class="fas fa-chevron-right"></i></li>
<li class="item">  <a  class="d-inline" href="#">ABOUT AFYLA</a><i class="fas fa-chevron-right"></i></li>
<li class="item">  <a  class="d-inline" href="#">CONTACT AFYLA</a><i class="fas fa-chevron-right"></i></li>
</div>

<div id="mainsub" style="display: none">
  <li class="item"> <a  class="d-inline" href="#" onclick="closesub()">BACK</a> <i class="fas fa-chevron-left"></i>
   </li>
   <?php $categories = \App\Category::all(); ?>
   @foreach ($categories as $item)
   <li class="item">  <a  class="d-inline" href="/shop/{{$item->name}}">{{$item->name}}</a><i class="fas fa-chevron-right"></i></li>
   @endforeach
  </div>

</ul>
 



</div>



<!-- ---------------------------------- ------------------------------- ----------------------------------------wishlist -->


<div id="myrightSidenav" class="rightsidenav" style="margin:0; padding:0;">

<ul style="direction :ltr;" >
<li class="w-100">  <i class="far fa-heart" style="font-size:15pt;" > </i> <b style="font-size:18pt;" >Your wishlist</b> <a href="javascript:void(0)" class="closebtn" onclick="closerightNav()" style="float:right !important;">&times;</a></li>
<li>
<div class="d-flex flex-block" style="border-bottom:3px solid black;">
<div class="img w-25">
<img src="{{asset('4.png')}}" alt="" style="max-height: 200px; max-width:135px;">
</div>
<div class="w-25 d-flex justify-content-center align-items-left" style="flex-direction:column;">
<h5>BLACK COAT</h5>
<div class="w-100" >
<label for="">Size:</label>
<select style="border:none; border-bottom:2px solid black;" class="w-100" name="" id="" >

<option value="">1</option>
<option value="">2</option>

</select>
</div>

</div>

<div class="w-50 d-flex justify-content-center align-items-center" style="flex-direction:column;">


<p>€ 3,000.00</p>
<button class="pt-3 pb-3 px-3" style="background:#D8D4CF !important; border:none; font-size:15pt; font-family:sans-serif !important;"  >
  ADD TO BAG
</button>
</div>
</div>
</li>
<li>
<div class="d-flex flex-block" style="border-bottom:3px solid black;">
<div class="img w-25">
<img src="{{asset('5.png')}}" alt="" style="max-height: 200px; max-width:135px;">
</div>
<div class="w-25 d-flex justify-content-center align-items-left" style="flex-direction:column;">
<h5>BLACK COAT</h5>
<div class="w-100" >
<label for="">Size:</label>
<select style="border:none; border-bottom:2px solid black;" class="w-100" name="" id="" >

<option value="">1</option>
<option value="">2</option>

</select>
</div>

</div>

<div class="w-50 d-flex justify-content-center align-items-center" style="flex-direction:column;">


<p>€ 3,000.00</p>
<button class="pt-3 pb-3 px-3" style="background:#D8D4CF !important; border:none; font-size:15pt; font-family:sans-serif !important;"  >
  ADD TO BAG
</button>


</div>





</div>

</li>

<li>
<div class="d-flex flex-block" style="border-bottom:3px solid black;">
<div class="img w-25">
<img src="{{asset('3.png')}}" alt="" style="height: 200px; max-width:135px;">
</div>
<div class="w-25 d-flex justify-content-center align-items-left" style="flex-direction:column;">
<h5>BLACK COAT</h5>
<div class="w-100" >
<label for="">Size:</label>
<select style="border:none; border-bottom:2px solid black;" class="w-100" name="" id="" >

<option value="">1</option>
<option value="">2</option>

</select>
</div>

</div>

<div class="w-50 d-flex justify-content-center align-items-center" style="flex-direction:column;">


<p>€ 3,000.00</p>
<button class="pt-3 pb-3 px-3" style="background:#D8D4CF !important; border:none; font-size:15pt; font-family:sans-serif !important;"  >
  ADD TO BAG
</button>


</div>





</div>

</li>

<li>
<button class="pt-3 pb-3 px-3 mt-5 d-block mx-auto" style="background:#D8D4CF !important; border:none; font-size:15pt; font-family:sans-serif !important;"  >
   <a href="/wish"> Manage your wishlist</a>
</button>
</li>

</ul>
</div>

<!-- ---------------------------------- ------------------------------- ----------------------------------------wishlist -->



<!-- ---------------------------------- ------------------------------- ----------------------------------------login -->


<div id="loginnav" class="rightsidenav text-start" style="direction: ltr">

  
<a href="javascript:void(0)" class="text-dark closebtn ps-4" onclick="closelogNav()" >&times;</a>

@if(session()->has('logged'))
<div class="p-2 text-center">
  <?php  $auth = \App\User::where('id',session()->get('logged'))->first(); ?>
                      
                     <p><b>HELLO, {{$auth->name}} {{$auth->lastname}}! </b></p> 
                     <p><b>WE HOPE YOU'RE DOING WELL.</b></p> 

                     <ul class="list-group mt-5 text-start">
                      <li class="list-group-item border-0 pt-0"><a href="/myprofil"><b>MY AFYLA ACCOUNT</b></a></li>
                      <li class="list-group-item border-0 pt-0 text-secondary"><a href="/myprofil"><b>PROFILE</b></a></li>
                      <li class="list-group-item border-0 pt-0 text-secondary"><b>ORDERS</b></li>
                      <li class="list-group-item border-0 pt-0 text-secondary"><b>ADDRESS BOOK</b></li>
                    </ul>
<div class="text-start ps-3 mt-5 pt-5">
                    <p class="text-secondary">If you have any queries or need further 
                      assistance, please Contact Us .</p>
<form action="{{route('logout')}}" method="post">
  @csrf
                      <button type="submit" class="btn btn-light pt-3 pb-3 mt-3" style="background:#ebe2d7 !important"><b>SIGN OUT</b></button>
                    </div>
                  </form>
</div>

@else
<div id="sign" class="p-4" >
  <div class="row">
    <div class="col-5 text-star" onclick="signin()" role="button"><b>SIGN IN</b></div>
    <div class="col-7 text-end from-text text-secondary" onclick="signup()" role="button"><b>CREATE AN ACCOUNT</b></div>
  </div>

  <form class="mt-5" method="POST" action="{{ route('confirm.login') }}">
    @csrf
    <div class="mb-5">
      <input type="email" name="email" placeholder="Email" class="@error('email') is-invalid @enderror ps-1 pb-2 form-control border-top-0 border-start-0 border-end-0 border-2 border-dark rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-4">
      <input type="password" name="password" placeholder="Password" class="@error('password') is-invalid @enderror ps-1 pb-2 form-control border-top-0 border-start-0 border-end-0 border-2 border-dark rounded-0" id="exampleInputPassword1">
    </div>
    <div>
    <div class="mb-3 form-check float-start">
      <input type="checkbox" class="form-check-input rounded-0 border-3 border-dark" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">REMEMBER ME</label>
    </div>
    <div class="mb-3 form-check float-end">
      <label class="form-check-label form-text" for="exampleCheck1">FORGOT PASSWORD</label>
    </div>
  </div>
    <div class="text-center mt-5 pt-5">
    <button type="submit" class="btn btn-light w-100 pt-3 pb-3 mt-3" style="background:#ebe2d7 !important"><b>SIGN IN</b></button>
    <label class="form-check-label text-secondary mt-2 form-text"><b>SIGN IN WITH <a>FACEBOOK</a> OR <a>GOOGLE</a></b></label>
  </div>
  </form>

</div>

<!------------------>

<div id="signup" class="p-4" style="display: none">
  <div class="row">
    <div class="col-5 text-star from-text text-secondary" onclick="signin()" role="button"><b>SIGN IN</b></div>
    <div class="col-7 text-end" onclick="signup()" role="button"><b>CREATE AN ACCOUNT</b></div>
  </div>

  <form class="mt-3" action="{{route('confirm.register')}}" method="POST">
    @csrf
    <div class="mb-2">
      <input type="email" name="email" placeholder="Email" class="ps-1 pb-2 form-control border-top-0 border-start-0 border-end-0 border-2 border-dark rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
      <input type="password" name="password" placeholder="Password" class="ps-1 pb-2 form-control border-top-0 border-start-0 border-end-0 border-2 border-dark rounded-0" id="exampleInputPassword1">
    </div>
    <div class="mb-2">
      <input type="password" name="conpassword" placeholder="Confirm password" class="ps-1 pb-2 form-control border-top-0 border-start-0 border-end-0 border-2 border-dark rounded-0" id="exampleInputPassword1">
    </div>
    <div class="mb-2">
      <input type="text" name="name" placeholder="First name" class="ps-1 pb-2 form-control border-top-0 border-start-0 border-end-0 border-2 border-dark rounded-0" id="exampleInputPassword1">
    </div>
    <div class="mb-2">
      <input type="text" name="lastname" placeholder="Last name" class="ps-1 pb-2 form-control border-top-0 border-start-0 border-end-0 border-2 border-dark rounded-0" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <input type="text" name="country" placeholder="Country" class="ps-1 pb-2 form-control border-top-0 border-start-0 border-end-0 border-2 border-dark rounded-0" id="exampleInputPassword1">
    </div>
<?php $dates = \DB::table('dates')->get(); ?>
    <div class="mb-3 text-center">
      <label class="form-check-label form-text text-dark" for="exampleCheck1"><b>WE WOULD LOVE TO KNOW YOUR BIRTHDAY</b></label>
      <div class="row mt-1">
        <div class="col-4 text-center">
          <select name="day" class="form-select w-100 border-3 rounded-0 border-secondary text-center" aria-label="Default select example">
  <option selected>Day</option>
  @foreach($dates as $item)
  @if(!empty($item->days))
  <option value="{{$item->days}}">{{$item->days}}</option>
  @endif
  @endforeach
</select>
        </div>
        <div class="col-4 text-center">
          <select name="mounth" class="form-select w-100 border-3 rounded-0 border-secondary text-center" aria-label="Default select example">
  <option selected>Month</option>
  @foreach($dates as $item)
  @if(!empty($item->mounths))
  <option value="{{$item->mounths}}">{{$item->mounths}}</option>
  @endif
  @endforeach
</select>
        </div>
        <div class="col-4 text-center">
          <select name="year" class="form-select w-100 border-3 rounded-0 border-secondary text-center" aria-label="Default select example">
  <option selected>Year</option>
  @foreach($dates as $item)
  @if(!empty($item->years))
  <option value="{{$item->years}}">{{$item->years}}</option>
  @endif
  @endforeach
</select>
        </div>
      </div>
    </div>

    <div class="mb-1 form-check">
      <input type="checkbox" class="form-check-input rounded-0 border-3 border-dark" id="exampleCheck1">
      <label class="form-check-label text-secondary" for="exampleCheck1">I SUBSCRIBE FOR EXCLUSIVE UPDATES</label>
    </div>
    <div class="mb-1 form-check">
      <input type="checkbox" class="form-check-input rounded-0 border-3 border-dark" id="exampleCheck1">
      <label class="form-check-label text-secondary" for="exampleCheck1">I AGREE TO TERMS & CONDITIONS</label>
    </div>
  
    <div class="text-center mt-2">
    <button type="submit" class="btn btn-light w-100 pt-3 pb-3 mt-3" style="background:#ebe2d7 !important"><b>CREATE AN ACCOUNT</b></button>
    <label class="form-check-label text-secondary mt-2 form-text"><b>SIGN IN WITH <a>FACEBOOK</a> OR <a>GOOGLE</a></b></label>
  </div>
  </form>

</div>
    
@endif
  
  </div>
  
  <!-- ---------------------------------- ------------------------------- ----------------------------------------login -->


  <nav class="navbar navbar-light " id="nosearch" style=" direction :ltr; background-color: #ECE7DF;">
    <div class="container-fluid">
      <div>
      <span style="font-size:30px;cursor:pointer;" class="navbar-brand ps-3" onclick="openNav()"><i class="fas fa-equals"></i> </span>
      <a href="/" class="text-dark fs-2"><b>AFYLA</b></a>      
    </div>


    <i class="fas fa-truck"  style=" color:grey;"> <p class="d-inline" style="font-family: 'Nunito Sans', sans-serif; color:black;  font-size:14px;" >Free shipping</p></i>
      <i class="fas fa-mobile-alt" style=" color:grey; font-size:15px;" >  <p class="d-inline" style="font-family: 'Nunito Sans', sans-serif; color:black;  font-size:14px;" >+212660000000</p> </i>
      <i class="fas fa-seedling"  style=" color:grey;"> <p class="d-inline" style="font-family: 'Nunito Sans', sans-serif; color:black;  font-size:14px;" >Sustainability</p></i>
      

      <div class="d-flex text-end" >

        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchmodal">
          <button type="button" class="btn position-relative pb-0">
          <i class="fas fa-search fs-5" aria-hidden="true"></i>
          </button>
      </a>

        <a class="nav-link" onclick="openlogNav()">
          <button type="button" class="btn position-relative pb-0">
          @if(session()->has('logged'))
            <?php  $auth = \App\User::where('id',session()->get('logged'))->first(); ?>
            <i class="far fa-user fs-5" aria-hidden="true">{{$auth->name}}</i>
            @else 
            <i class="far fa-user fs-5" aria-hidden="true"></i>
            @endif
          </button>
      </a>

          <a class="nav-link" onclick="openrightNav()">
              <button type="button" class="btn position-relative pb-0">
              <i class="far fa-heart fs-5" aria-hidden="true"></i> <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background-color: black !important">3</span>
              </button>
          </a>

          <a class="nav-link" href="/cart">
            <button type="button" class="btn position-relative pb-0">
            <i class="fas fa-shopping-bag fs-5" aria-hidden="true"></i> <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background-color: black !important">{{Cart::count()}}</span>
            </button>
        </a>

         
      </div>
    </div>
  </nav>

@include('search')
 

  <script>
function openNav() {

  if (screen.width > 760 ){
    document.getElementById("mySidenav").style.width = "30%";

  }
else
{

  document.getElementById("mySidenav").style.width = "100%";
}
  
}

function openrightNav() {

if (screen.width > 760 ){
  document.getElementById("myrightSidenav").style.width = "30%";

}
else
{

document.getElementById("myrightSidenav").style.width = "100%";
}

}


function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function signin() {
  document.getElementById("sign").style.display = "block";
  document.getElementById("signup").style.display = "none";
}

function opensub() {
  document.getElementById("mainsub").style.display = "block";
  document.getElementById("main").style.display = "none";
}

function signup() {
  document.getElementById("sign").style.display = "none";
  document.getElementById("signup").style.display = "block";
}

function closesub() {
  document.getElementById("mainsub").style.display = "none";
  document.getElementById("main").style.display = "block";
}


function closerightNav() {
  document.getElementById("myrightSidenav").style.width = "0";
}


function openlogNav() {

if (screen.width > 760 ){
  document.getElementById("loginnav").style.width = "30%";

}
else
{

document.getElementById("loginnav").style.width = "100%";
}

}

function closelogNav() {
  document.getElementById("loginnav").style.width = "0";
}



</script>