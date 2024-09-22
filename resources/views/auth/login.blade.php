<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
@if(session()->has('fr'))
    <title>Mon compte</title>
    @else
    <title>My account</title>
     @endif

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style.css')}}">
<link rel="stylesheet" href="{{asset('stylecat.css')}}">
<link rel="stylesheet" href="{{asset('stylecart.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/55307fcc40.js" crossorigin="anonymous"></script>
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all" rel="stylesheet" id="font-awesome-5-kit-css">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all" rel="stylesheet" id="font-awesome-5-kit-css">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet" id="font-awesome-5-kit-css">
    <script src="https://kit.fontawesome.com/2354fa9528.js" crossorigin="anonymous"></script>
    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '828682327659842');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=828682327659842&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Almarai:wght@400&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
  body{
        text-align: center;
        font-family: cairo;
      background-color: white;
      font-family: 'Jost', sans-serif;
    }
        .DodgerBlue{
            color: white;
            border-radius: 5px;
        padding: 12px 24px !important;
            border: none;
            background-color: #4267b2 !important;
            cursor : pointer;
            margin:0px 10px !important
        }
        .Crimson {
            color: white;
            border-radius: 5px;
        padding: 12px 24px !important;
            border: none;
            background-color: #db4437 !important;
            cursor : pointer;
            margin:0px 10px !important
        }
        .btn {
            border:1px solid!important;
            border-radius: 5px !important; 
            color: white !important;
            background: #efbe7c !important;
            padding: 10px 30px !important;
            font-size: 18px !important;
            cursor: pointer
        }
  @media screen and (max-width: 650px) {
        .popform{
  padding: 10px !important;
 width:90% !important;}
 #reven{
     
 }
}
        .popform label{
            font-size: 18px;
            font-weight: 600;
            
            
        }
        
        .popform button:hover{
            border: 2px solid white;
background: #001a13;
            color: white;
        }
        .form-control{
        padding: 10px 3px !important;
        border-radius: 3px;
        border: 1px solid rgba(0,0,0,.5);
        width: 100%;
        margin-bottom: 8px !important;
    }
    .popform select{
        width: 50%;
        padding: 3px 3px !important;
        border-radius: 3px;
        border: 1px solid rgba(0,0,0,.5);
        width: 50%;
        margin-bottom: 8px !important;
        
    }

        
    }
    #form{
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4) !important; /* Black w/ opacity */
    }
    
    .popform{

        background-color: white;
  margin: 1% auto; /* 15% from the top and centered */
  padding: 20px 50px;
  border: 1px solid #888;
        width:40%;
        text-align: center;
        border-radius: 5px;
        position: relative;
    }
    .form-control{
        padding: 5px 5px;
        border-radius: 3px;
        border: 1px solid rgba(0,0,0,.5);
        width: 100%;
        margin-bottom: 15px;
    }
    .popform select{
        width: 50%;
        padding: 5px 5px;
        border-radius: 3px;
        border: 1px solid rgba(0,0,0,.5);
        width: 50%;
        margin-bottom: 15px;
        
    }
        img {
            margin: 10px
        }
   
    </style>
</head>
<body>
    {{-- <a href="/" style="color:white !important;"> <img class="m-3"  src="{{asset('/logo.png')}}" width="100px;"> </a> --}}
    <a href="/"> <h2  style="color:black !important; " ><b>AFYLA</b></h2></a>
    <div class="moda" id="form">
       
<div class="popform">
        <h2 id="login">SING IN ADMIN</h2>
        {{-- @if (Session::has('conflogin'))
                                <p style="color: rgb(223, 30, 30)"><i class="fas fa-exclamation-circle"></i> {{Session::get('conflogin')}} !</p>
                                @endif --}}
                    <form method="POST" action="{{ route('confirm.login') }}">
                        @csrf

                        <div class="form-group row">
                            


                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" style="margin-top:10px">

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" style="margin-top:10px">

                               
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-5 ">
                                <button type="submit" class="btn btn-primary">
                                    SING IN
                                </button>

                            </div>
                            <div class="col-md-5">
                                <a href="/lv/register">
                                <button type="button" class="btn btn-primary">
                                    SING UP
                                </button>
                            </a>
                            </div>
                        </div>
                        
                    </form>
                    
                </div>
</div>   
    
</body>
</html>