@extends('layouts.app')

@section('main_content')
    
  <section class="comics-section">

    {{-- comics list title --}}
    <div class="comics-section-title wrapper">
        <h1>CURRENT SERIES</h1>
    </div>
    {{-- comics list title --}}


    {{-- comics list --}}
    <div class="comics-list-container wrapper">
        @foreach ($comics as $comic)
        {{-- single comic--}}
        <div class="comic">
            <div>
                <img src="{{ $comic['thumb'] }}" alt="cover">
            </div>

            <div class="comic-title">
                <p> {{ $comic['title'] }} </p>    
            </div>
        </div>
        {{-- single comic--}}
        @endforeach
    </div>   
    {{-- comics list --}}


    {{-- button load --}}
    <div class="button">
        <button>LOAD MORE</button>
    </div>
    {{-- button load --}}




  </section>
@endsection