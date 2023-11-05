@extends('app')
@section('content')
    <div class="container">
        <div class="row col-12">
            <div class="px-4 py-5 text-center">
                <h1 class="display-4 fw-bold text-body-emphasis">Bolg Posts</h1>
            </div>
        </div>
        <div class="row col-12">
            @foreach($years as $year => $posts)
                <h1>{{ $year }}</h1>
                <hr>
                @foreach($posts as $post)
                    <div class="col-6">
                        <a href="/{{ $post->slug }}">
                            <h5>{{ $post->title }}</h5>
                        </a>
                        <span>Posted {{ $post->publish_at->toFormattedDateString() }} by {{ $post->author->name }}</span>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
