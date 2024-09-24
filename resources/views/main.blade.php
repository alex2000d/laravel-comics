
@extends('layouts.home')


@section('content')
<div class="jumbotron" style="background-image: url('{{ Vite::asset('resources/img/jumbotron.jpg') }}');">
    <span class="badge text-bg-primary rounded-0 px-4 py-2">
        <h3>CURRENT SERIES</h3>
    </span>
</div>
<div class="bg-dark">
<div class="container">
    <div class="row pt-5">
        <div class="text-center py-2">
            <button class="btn btn-primary rounded-0 px-5">LOAD MORE</button>
        </div>
    </div>
</div>
</div>
<div class="bg-primary">
<div class="container">
   <div class="row">
       <div class="col-12 p-5 text-center image z-index">
           <img src= "{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}"/>
           <span class="text-white"> digital comics</span>
           <img src="{{Vite::asset('resources/img/buy-comics-digital-merchandise.png')}}" />
           <span class="text-white"> dc merchandise</span>
           <img src="{{Vite::asset('resources/img/buy-comics-digital-subscriptions.png')}}" />
           <span class="text-white"> subscription</span>
           <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" />
           <span class="text-white"> comic shop locator</span>
           <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" />
           <span class="text-white"> dc power visa</span>
       </div>
   </div>
</div>
</div>
@endsection