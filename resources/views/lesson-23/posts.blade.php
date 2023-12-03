@extends('app')

@section('content')
    <div class="container">
        <div class="row col-12">
            <div class="px-4 py-5 text-center">
                <h1 class="display-4 fw-bold text-body-emphasis">Posts</h1>
            </div>
        </div>
        <div class="row">
            <form>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" value="{{ request('search') }}" placeholder="Search.." aria-label="search">
                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">🔍</button>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">TITLE</th>
                        <th scope="col">AUTHOR</th>
                        <th scope="col">PUBLISHED</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>
                                {{ $post->title }}
                                @if($post->score)
                                <span class="badge text-bg-primary">{{ number_format($post->score, 2) }}</span>
                                @endif
                            </td>
                            <td>{{ $post->author->name }}</td>
                            <td>{{ $post->published_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $posts->withQueryString()->links() }}
        </div>
    </div>
@endsection
