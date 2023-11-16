@extends('app')

@section('content')
    <div class="container">
        <div class="row col-12">
            <div class="px-4 py-5 text-center">
                <h1 class="display-4 fw-bold text-body-emphasis">{{ $post->title }}</h1>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                @foreach($post->comment as $comment)
                <div class="card my-4 {{ $loop->first ? '' : 'mx-4' }}">
                    <div class="card-header">
                        {{ $comment->user->name }}
                        @if($comment->isAuthor())
                            <strong>✒️Author</strong>
                        @endif
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>{{ $comment->comment }}</p>
                            <footer class="blockquote-footer">Date: <cite title="Source Title">{{ $comment->created_at->format('M,j Y \a\t g:i:a') }}</cite></footer>
                        </blockquote>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
