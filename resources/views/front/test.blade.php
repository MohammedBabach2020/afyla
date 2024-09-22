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

@toastr_css
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easyzoom@2.5.3/css/easyzoom.css">
<script src="https://cdn.jsdelivr.net/npm/easyzoom@2.5.3/dist/easyzoom.js"></script>
    <title>
        @yield('title')
    </title>


    @livewireStyles
    <style>
        @media screen and (max-width: 425px) {

#deskt{
    display: none;
}

#phone{
    display: block;
}

}

@media screen and (min-width: 430px) {

#deskt{
    display: block;
}

#phone{
    display: none;
}

}

    </style>
</head>

<body>
<div class="container-fluid text-center" id="deskt" style="height:100vh;background-image:url('{{asset('storage/post.png')}}');background-size:cover;background-repeat:no-repeat;background-position:center;box-sizing: border-box;">
    @if(session()->has('Registred'))
    <div class="alert alert-light alert-dismissible fade show" role="alert">
  <strong>Great!</strong> You have been registred successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <div class="container-fluid" style="height:50vh;"></div>
    <div class="container-fluid mt-5  px-4" style="height:30vh;">
        <br><br> <br><br><br><br><br><br> 
        <form class="row justify-content-center  g-2" method="POST" action="{{route('subscribe')}}">
            @csrf
             <div class="col-auto">
      
               <input type="email" name="mail" class="form-control rounded-0  " id="inputPassword2" placeholder="Your email address">
             </div>
             <div class="col-auto ">
               <button type="submit" style="background-color: #FFFFFF;" class="btn btn-primary rounded-0 mb-4 text-dark border-0">SUBSCRIBE</button>
             </div>
           </form>
     </div>
</div>

<div class="container-fluid text-center" id="phone" style="height:100vh;background-image:url('{{asset('storage/post2.png')}}');background-size:cover;background-repeat:no-repeat;background-position:center;">
    @if(session()->has('Registred'))
    <div class="alert alert-light alert-dismissible fade show" role="alert">
        <strong>Great!</strong> You have been registred successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <div class="container-fluid text-white pt-5" style="height:80vh;">
    <br>
    <br>
        <h5 class="mt-5 pt-5" ><span style="font-size: 53pt">AFYLA</span>
        <br>
        COMING SOON
        </h5>
    </div>
    <div class="container-fluid mt-3 px-4" style="height:20vh;">
        <form class="row justify-content-center  g-2" method="POST" action="{{route('subscribe')}}">
            @csrf
             <div class="col-auto">
      
               <input type="email" name="mail" class="form-control rounded-0  " id="inputPassword2" placeholder="Your email address">
             </div>
             <div class="col-auto ">
               <button type="submit" style="background-color: #FFFFFF;" class="btn btn-primary rounded-0 mb-4 text-dark border-0">SUBSCRIBE</button>
             </div>
           </form>
     </div>
</div>

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