@extends('layouts.app')

@section('main_content')

    <section class="comics-details-section">
        
        <div class="blue-banner">
        </div>

        {{--comic cover--}}
        <div class="comic-cover">
            <img src="{{ $details['thumb'] }} }}" alt="cover">
        </div>
         {{--comic cover--}}

         {{--comic details container--}}
        <div class="comics-details-container wrapper-xs">

           

            {{--details info --}}
            <div class="details-info-container">

                {{--Title --}}
                <div class="details-info-title">
                    <h1>{{ $details['title'] }}</h1>
                </div>
                {{--Title --}}

                {{--Price & availability section --}}

                <div class="availability-section">

                    <div class="availability-container">

                        <div class="first-column">
                            <p>U.S Price: <span>{{ $details['price'] }}</span> </p>
                        </div>
    
                        <div class="second-column">
                            <p>AVAILABLE</p>
                        </div>
    
                        <div class="third-column">
                            <p>Check Availability</p>
                        </div>

                    </div>

                    <div class="description">
                        <p>{{ $details['description'] }}</p>
                    </div>

                </div>
                {{--Price & availability section --}}

            </div>
            {{--details info --}}

            {{--details adv --}}
            <div class="adv-container">
                <span>
                    <p>ADVERTISMENT</p>
                </span>
                <img src="{{ asset('img/adv.jpg') }}" alt="logo">
            </div>
            {{--details adv --}}
        </div>
        {{--comic details container--}}
    </section>

    {{--Talent & Spec section--}}
    <section class="specs-section">
        <div class="wrapper-xs">

            <div class="talent-specs-container">

                <div class="talent">
                    <h3>Talent</h3>

                    <div class="content">
                        <p>Art by:</p>

                        <span>
                        @foreach ($details['artists'] as $artist)
                        {{ $artist }},
                        @endforeach
                        </span>
                        
                    </div>

                    <div class="content">
                        <p>Written by:</p>
                        <span>
                            @foreach ($details['writers'] as $writer)
                            {{ $writer }},
                            @endforeach
                        </span>
                    </div>


                </div>

                <div class="specs">

                    <h3>Specs</h3>

                    <div class="content">
                        <p>Series:</p>
                        <span>
                            <a href="#">{{ $details['series'] }}</a>
                        </span>
                    </div>

                    <div class="content">
                        <p>U.S Price:</p>
                        <span>{{ $details['price'] }}</span>
                    </div>

                    <div class="content">
                        <p>On Sale Date:</p>
                        <span>{{ $details['sale_date'] }}</span>
                    </div>
                </div>

            </div>

        </div>
    </section>
    {{--Talent & Spec section--}}


    
@endsection