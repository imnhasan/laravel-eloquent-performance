@extends('app')

@section('content')
    <div class="container">
        <div class="row col-12">
            <div class="px-4 py-5 text-center">
                <h1 class="display-4 fw-bold text-body-emphasis">Users</h1>
            </div>
        </div>
        <form>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="search" value="{{ request('search') }}" placeholder="Search.." aria-label="search">
                <button class="btn btn-outline-primary" type="submit" id="button-addon2">🔍</button>
            </div>
       </form>
        <div class="row col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Company</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->company->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
@endsection
