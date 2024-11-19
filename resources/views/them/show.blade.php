@extends('them.master')

@section('content')
<div class="container" style="margin-top: 100px;"> 
    <div class="row mb-5">
        <!-- صورة الفيلم -->
        <div class="col-md-4">
            <img src="{{ asset('storage/movies/' . $movie->image) }}" alt="{{ $movie->title }}" 
                 style="width: 100%; height: 400px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); object-fit: cover;">
        </div>

        <!-- تفاصيل الفيلم -->
        <div class="col-md-8">
            <h1 class="mb-3" style="color: red;">{{ $movie->title }}</h1>
            <p><strong>Description:</strong> {{ $movie->description }}</p>
            <p><strong style="color: red;">Category:</strong> {{ $movie->category->name ?? 'Uncategorized' }}</p>
            <div>
                <p><strong>Review:</strong></p>
                <div class="stars">
                    @php
                        $ratingOutOfFive = round(($movie->review ?? 0) / 20); 
                    @endphp
                    @for ($i = 1; $i <= 5; $i++)
                        <i class="fa fa-star {{ $i <= $ratingOutOfFive ? 'filled' : '' }}"></i>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <h2 >Related Movies</h2>
   
    <div class="row">
    @foreach ($relatedMovies as $relatedMovie)
        <div class="col-md-3 mb-4">
           
            <a href="{{ route('movie.show', $relatedMovie->id) }}" class="movie-link">
                <div class="movie-card">
                 
                    <img src="{{ asset('storage/movies/' . $relatedMovie->image) }}" alt="{{ $relatedMovie->title }}" 
                         style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
                 
                    <h5 class="mt-2" style="font-size: 1rem; font-weight: bold;">{{ $relatedMovie->title }}</h5>
                   
                    <p style="color: red; font-size: 0.9rem;">{{ $relatedMovie->category->name ?? 'Uncategorized' }}</p>
                </div>
            </a>
        </div>
    @endforeach
</div>

</div>
@endsection
