@include("inc.header")
<br><br><br><br><br><br><br><br><br><br><br>
@extends('layouts.app')
@section('content')

    <style>
            body {

              background-color: #D3DAFE;
              -webkit-animation-name: background;  
              -webkit-animation-duration: 4s; 
              animation-name: background;
              animation-duration: 4s;
            }
            
             
            @-webkit-keyframes background {
              0%   {background-color: #3950C6;}
              25%  {background-color: #5B76FE;}
              50%  {background-color: #D3DAFE;}
              100% {background-color: #E0E5FE;}
            }
            
             
            @keyframes background {
              0%   {background-color: #3950C6;}
              25%  {background-color: #5B76FE;}
              50%  {background-color: #D3DAFE;}
              100% {background-color: #E0E5FE;}
            }
            </style>
    <h1 style="font-size:50px;font-style: italic;">votre formulaire à été envoyée avec succès</h1>
      
        @include("inc.footer")
@endsection