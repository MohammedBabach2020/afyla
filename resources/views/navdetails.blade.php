<div id="mySidenav" class="sidenav"  >

<ul style="direction :ltr;" >
<li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
<li class="item">  <a class="d-inline" href="#">About</a>  <i class="fas fa-chevron-right"></i>
 </li>
 
<li class="item">  <a  class="d-inline" href="#">COLLECTIONS</a><i class="fas fa-chevron-right"></i></li>

<li class="item"> <a  class="d-inline" href="#">SHOP</a><i class="fas fa-chevron-right"></i></li>

<li class="item">  <a  class="d-inline" href="#">LOGIN</a><i class="fas fa-chevron-right"></i></li>
<li class="item">  <a  class="d-inline" href="#">ABOUT AFYLA</a><i class="fas fa-chevron-right"></i></li>
<li class="item">  <a  class="d-inline" href="#">CONTACT AFYLA</a><i class="fas fa-chevron-right"></i></li>

</ul>
</div>
<nav class="navbar menu  navbar-expand-lg "  style=" direction :ltr; background-color: white;" >
<div class="frst ps-4" style="width:20%;"><span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;  <h2 class="d-inline"  style="color:black !important; " ><b>AFYLA</b></h2> </span></div>
<div class="mid"  style="width:60%; text-align:center;">

<i class="fas fa-mobile-alt mx-2" style=" color:grey; font-size:15px;" >  <p class="d-inline mx-1" style="font-family: 'Nunito Sans', sans-serif; color:black;  font-size:14px;" >+212660000000</p> </i>
<i class="fas fa-truck mx-2"  style=" color:grey;"> <p class="d-inline mx-1" style="font-family: 'Nunito Sans', sans-serif; color:black;  font-size:14px;" >Free shipping</p></i>
<i class="fas fa-seedling mx-2"  style=" color:grey;"> <p class="d-inline mx-1" style="font-family: 'Nunito Sans', sans-serif; color:black;  font-size:14px;" >Sustainability</p></i>


</div>
<div class="scnd"  style="width:20%;">
    <div class="container-fluid">
      <div class="collapse navbar-collapse float-right" id="navbarSupportedContent" > 
        <ul class="navbar-nav" style="direction:rtl;" >
            <li class="nav-item dropdown"  >
                <a class="nav-link" href="/cart">
                    <button type="button" class="btn" >
                    <i class="fas fa-shopping-bag text-center">{{Cart::count()}}</i>
                    </button>
                </a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link" href="/cart">
                    <button type="button" class="btn">
                    <i class="far fa-heart"> {{Cart::count()}}</i>
                    </button>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="/cart">
                    <button type="button" class="btn ">
                    <i class="fas fa-search"></i> 
                    </button>
                </a>
              </li>
            </ul>
        
        <!-- <form action="{{route('search')}}" method="POST" class="d-flex">
          @csrf
          <input required name="label" class="form-control me-2 text-dark border border-1 rounded-0" type="search" placeholder="بحث..." aria-label="Search" style="background: none !important;">
          <button class="btn btn-outline-light border border-1 rounded-0" type="submit" style="color: #eea012 !important"><i class="fas fa-search"></i></button>
        </form> -->

       
      </div>
    </div>
    </div>
  </nav>
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

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>