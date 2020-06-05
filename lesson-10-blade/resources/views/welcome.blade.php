@extends('layouts/layout')

@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md my-small-text">
                    Lesson 10 - Blade
                    <div class="">
                      {{ $name }}
                    </div>
                    <div>
                      @if( $age<18 )
                        <p> your age is under 18</p>
                      @elseif( $age == 20 )
                        <p> your age is 20</p>
                        @else
                        <p>your age is OK!</p>
                      @endif
                    </div>
                    <div class="">
                        @unless($mark > 18)
                          <p> your mark's weak</p>
                        @endunless
                    </div>
                    <div class="">
                      @php
                        $i = 'hellow';
                        echo $i;
                      @endphp
                    </div>
                    <div>


                      @for( $i=0 ; $i < count($foods) ; $i++ )
                        food : {{ $foods[$i] }}<br>
                      @endfor
                        <hr>
                      @foreach($foods as $food)
                      {{ $food }} . <br>
                      @endforeach
                    </div>
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
@endsection
