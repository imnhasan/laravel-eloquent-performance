@extends('app')

@section('content')
    <div class="container">
        <div class="row col-12">
            <div class="px-4 py-5 text-center">
                <h1 class="display-4 fw-bold text-body-emphasis">Devices</h1>
            </div>
        </div>
        <div class="row col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">NAME</th>
                    <th scope="col">BRAND</th>
                    <th scope="col">RESOLUTION</th>
                </tr>
                </thead>
                <tbody>
                @foreach($devices as $device)
                    <tr>
                        <td>{{ $device->name }}</td>
                        <td>{{ $device->brand }}</td>
                        <td>{{ $device->resolution }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $devices->links() }}
        </div>
    </div>
@endsection
