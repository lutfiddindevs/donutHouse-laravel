        @extends('layouts.layout')

        @section('content')
        <div class="container">
            <div class="row text-right">
                <div class="col-12">
                 <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="badge badge-secondary pill-rounded ">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="badge badge-secondary pill-rounded ">{{ __('lang.login') }}</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="badge badge-secondary pill-rounded">{{ __('lang.register') }}</a>
                        @endif
                    @endauth
                  </div>
                </div> 
              </div>
            </div>
            @endif
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <h2 class="display-4">{{ __('lang.title') }}</h2>
                        <img src="images/donut-icon.jpg" class="rounded mx-auto d-block rounded-pill" alt="...">
                        <a href="/donuts/create" class="badge badge-secondary pill-rounded">{{ __('lang.orderDonut') }}</a>
                    </div>           
                </div>
             </div>
            <p class="lead text-center">{{ session('msg') }}</p>
                   
        
        @endsection

