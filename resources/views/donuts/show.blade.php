
@extends('layouts.layout')
        @section('content')
        
       <div class="wrapper donut-details">
         <h1 class="display-4 text-center my-4">Order for {{ $donut->name }}</h1> 
         <h4 class="text-center">Type - {{ $donut->type }}</h4>
         <h4 class="text-center">Base - {{ $donut->base }} - Price - {{ $donut->price }}</h4> 
         <h4 class="text-center">Extra toppings:</h4>
         <ul class="list-group">
         	@foreach($donut->toppings as $topping)
         	<li class="list-group-item text-center">{{ $topping }}</li>
         	@endforeach
         </ul> 
         <form action="/donuts/{{ $donut->id }}" method="post">
         	@csrf
         	@method('DELETE')
            <div class="text-center">
         	<button class="btn-secondary rounded-pill my-4">Complete Order</button>
         </div>
         </form>  
             
       </div>
       <a href="/donuts" class="badge badge-secondary pill-rounded ml-4 my-4">Back to donuts page</a>
        @endsection

        