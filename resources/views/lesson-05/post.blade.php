@extends('app')

@section('content')
    <div class="container">
        <div class="row col-12">
            <div class="px-4 py-5 text-center border-bottom">
                <h1 class="display-4 fw-bold text-body-emphasis">Posts</h1>
            </div>
        </div>
        <div class="row my-4">
            <div class="card col-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Writing</h5>
                        <h5 class="card-title">{{ $status->writing }}</h5>
                    </div>
                </div>
            </div>
            <div class="card col-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Planned</h5>
                        <h5 class="card-title">{{ $status->planned }}</h5>
                    </div>
                </div>
            </div>
            <div class="card col-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Completed</h5>
                        <h5 class="card-title">{{ $status->completed }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $posts->links() }}
        </div>
    </div>
@endsection
