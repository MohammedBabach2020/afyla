<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/55307fcc40.js" crossorigin="anonymous"></script>
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all" rel="stylesheet" id="font-awesome-5-kit-css">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all" rel="stylesheet" id="font-awesome-5-kit-css">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet" id="font-awesome-5-kit-css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easyzoom@2.5.3/css/easyzoom.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

<link rel="stylesheet" href="{{asset('style.css')}}">
<link rel="stylesheet" href="{{asset('stylecat.css')}}">
<link rel="stylesheet" href="{{asset('stylecart.css')}}">
@toastr_css
@yield('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easyzoom@2.5.3/css/easyzoom.css">
<script src="https://cdn.jsdelivr.net/npm/easyzoom@2.5.3/dist/easyzoom.js"></script>
    <title>
        @yield('title')
    </title>
<!-- <link rel="shortcut icon" type="image/jpg" href="{{asset('favicon.ico')}}"/> -->

<!-- Facebook Pixel Code -->
<!-- <script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '185769296976734');
fbq('track', 'PageView');
</script> -->
<!-- <noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=185769296976734&ev=PageView&noscript=1"
/></noscript> -->
<!-- End Facebook Pixel Code -->

<!-- <meta name="facebook-domain-verification" content="2y3764dpgc93a5mm2qyyewlypufpxj" /> -->
@livewireStyles
</head>

<body class="">
    <!-- <a class="gotop text-center" href="#"><i class="rounded-circle fas fa-arrow-circle-up bg-white shadow" aria-hidden="true"></i></a> -->
    @yield('content')

{{-- Footer --}}

<footer class="footer d-block" >
<div class="container-fluid pb-2 pt-5 infos" id="infos">
    <div class="row mx-auto  content-justify-center">

<div class="mb-5 pb-5 row">
<div class="col-md-6">
    <p style="color:#5E5E5E !important; font-weight:lighter !important;" >Newsletter</p>

    <form>
                    <input class="form-control w-100 text-white " type="search" placeholder="Email" aria-label="Search" style="background: none !important;">
                    <!-- <button class="btn btn-outline-light border border-1 rounded-0" type="submit" style="color: #eea012 !important"><i class="fas fa-paper-plane"></i></button> -->
                  </form>
</div>
<div class="col-md-6">
    <p  style="color: #5E5E5E !important ; font-weight:lighter !important;" >Customer service</p>
<br>
    <p  style="color: #5E5E5E !important ; font-weight:bolder !important;">+212 5 39 99 99 99  &nbsp customer@afyla.com</p>
    
    <p  style="color: #5E5E5E !important ; font-weight:bolder !important;">Shop Assistant via <a href="#" class="text-dark">WhatsApp</a> |<a href="#" class="text-dark"> WeChat</a></p>
    
</div>
</div>
<div class="col-md-3">
    <ul style="list-style:none;">
<li><h3>ABOUT AFYLA</h3></li>
<li style="margin-top:10px;" ><a href="#" style="color:#5E5E5E;  text-decoration:underline;" > AFYLA WORLD </a></li>
<li style="margin-top:10px;"><a href="#" style="color:#5E5E5E;  text-decoration:underline;"> SUSTAINABILITY </a></li>

</ul>
</div>
<div class="col-md-3">
    <ul style="list-style:none;">
<li><h3>NEED HELP ?</h3></li>
<li style="margin-top:10px;" ><a href="#" style="color:#5E5E5E;  text-decoration:underline;" > FAQ</a></li>
<li style="margin-top:10px;"><a href="#" style="color:#5E5E5E;  text-decoration:underline;"> CONTACT US </a></li>
<li style="margin-top:10px;"><a href="#" style="color:#5E5E5E;  text-decoration:underline;"> CUSTOMER CARE </a></li>
<li style="margin-top:10px;"><a href="#" style="color:#5E5E5E;  text-decoration:underline;"> SHIPPING</a></li>
<li style="margin-top:10px;"><a href="#" style="color:#5E5E5E;  text-decoration:underline;"> RETURNS & EXCHANGE </a></li>

</ul>
</div>
<div class="col-md-3">
    <ul style="list-style:none;">
<li><h3>LEGAL</h3></li>
<li style="margin-top:10px;" ><a href="#" style="color:#5E5E5E;  text-decoration:underline;" > TERMS & CONDITIONS OF USE </a></li>
<li style="margin-top:10px;"><a href="#" style="color:#5E5E5E;  text-decoration:underline;"> TERMS & CONDITIONS OF SALE </a></li>
<li style="margin-top:10px;"><a href="#" style="color:#5E5E5E;  text-decoration:underline;">MY ACCOUNT TERMS & CONDITIONS OF USE </a></li>
<li style="margin-top:10px;"><a href="#" style="color:#5E5E5E;  text-decoration:underline;">RETURN POLICY </a></li>
<li style="margin-top:10px;"><a href="#" style="color:#5E5E5E;  text-decoration:underline;">PRIVACY POLICY </a></li>

</ul>
</div>
<div class="col-md-3">
    <ul style="list-style:none;">
<li><h3>FOLLOW US</h3></li>
<li style="margin-top:10px;" ><a href="#" style="color:#5E5E5E;  text-decoration:underline;" > INSTAGRAM </a></li>
<li style="margin-top:10px;"><a href="#" style="color:#5E5E5E;  text-decoration:underline;"> FACEBOOK </a></li>
<li style="margin-top:10px;"><a href="#" style="color:#5E5E5E;  text-decoration:underline;"> TWITTER </a></li>
<li style="margin-top:10px;"><a href="#" style="color:#5E5E5E;  text-decoration:underline;"> YOURUBE </a></li>

</ul>
</div>

    </div> 
    </div>

              <!-- <br>
              <a href="/about"><i class="fab fa-facebook fs-4 me-2 ms-2"></i></a>
            <a href="/about"><i class="fab fa-instagram fs-4 me-2 ms-2"></i></a> -->
    
      

</footer>
{{-- Footer --}}
@yield('js')
@livewireScripts
<script>


function addline() { 
    text = document.getElementById('typin2').value; 
    // text = text.replace(/\r?\n/g, ' <br />'); 
    document.getElementById('description2').value = text; 
    
}

    $("#query").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });


    // Instantiate EasyZoom instances
    var $easyzoom = $('.easyzoom').easyZoom();

    // Setup thumbnails example
    var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

    $('.thumbnails').on('click', 'a', function(e) {
        var $this = $(this);

        e.preventDefault();

        // Use EasyZoom's `swap` method
        api1.swap($this.data('standard'), $this.attr('href'));
    });

    // Setup toggles example
    var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

    $('.toggle').on('click', function() {
        var $this = $(this);

        if ($this.data("active") === true) {
            $this.text("Switch on").data("active", false);
            api2.teardown();
        } else {
            $this.text("Switch off").data("active", true);
            api2._init();
        }
    });

    
</script>
</body>
@jquery
    @toastr_js
    @toastr_render
</html>