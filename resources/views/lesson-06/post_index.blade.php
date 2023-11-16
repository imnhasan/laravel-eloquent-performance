@extends('app')

@section('content')
    <div class="container">
        <div class="row col-12">
            <div class="px-4 py-5 text-center border-bottom">
                <h1 class="display-4 fw-bold text-body-emphasis">Users</h1>
            </div>
        </div>
        <div class="row col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td><a href="{{ route('post_show', $post) }}" class="link-underline-opacity-0 link-primary">show</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $posts->links() }}
        </div>
    </div>
@endsection
