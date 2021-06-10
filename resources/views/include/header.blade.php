<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/css_user/style.css') }}"/>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:1,100,300,500,600,700" rel="stylesheet"
          type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('/css_user/bootstrap.min.css')}}">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="{{ url('/js_user/bootstrap.min.js')}}"></script>
    <script src="{{ url('/js_user/custom.js')}}"></script>
    <!--fontawesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"
            integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/functions.js') }}"></script>

    <title>CODE MOBILE SITE</title>
    <style type="text/css">
     
     /*   h1, h2, h3, h4, h5, h6,span {
                
              font-family: 'nexa bold';
     
                 @font-face {
                   font-family: 'Proxima Nova';
                  src: url({{asset('css/FontsFree.ttf') }});
                }
                
                  
            }
            */
            p{
                 font-family: 'Proxima Nova', sans-serif; 
               /* @font-face {
                  font-family: 'Proxima Nova Rg', sans-serif;
                  src: url({{asset('css/NEXA-LIGHT.OTF') }});
                } */
            }
            @font-face {
              font-family: 'nexabold';
              src: url('fonts/lovely_font.eot'); 
              src: 
                local('Nexa Bold'),
                local('Nexa-Bold'),
                url({{asset('css/NEXA-LIGHT.OTF') }}) 
                format('opentype');

            }
            h1, h2, h3, h4, h5, h6,span { font-family: 'nexabold', sans-serif; }
 
    </style>
</head>
<body>
@include('include.navbar')
