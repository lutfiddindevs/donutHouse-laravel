
@extends('layouts.layout')
        @section('content')
        
                            	<h2 class="display-4 text-center">This is the Donuts page!</h2> <br />

                    
                               <img src="../images/donuts.jpg" class="rounded mx-auto d-block" alt="...">
                            	<!-- @for($i = 0; $i < 5; $i++)
                                <p>The value of i is {{ $i }}</p>
                                @endfor -->
                                
                                @foreach($donuts as $donut)
                                  
                                      <h5 class="text-center my-4">{{ $donut->name }} - {{ $donut->base }} - {{ $donut->type }} - {{ $donut->price }}</h5> <br />
                                  
                                @endforeach 
                               <p class="lead text-center my-4">{{ session('msg') }}</p>    
                               
              
    
        @endsection
        