@extends('app')

@section('content')
    <div class="container">
        <div class="row col-12">
            <div class="px-4 py-5 text-center">
                <h1 class="display-4 fw-bold text-body-emphasis">Locations</h1>
            </div>
        </div>
        <div class="row col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ADDRESS</th>
                    <th scope="col">CITY</th>
                    <th scope="col">DISTANCE</th>
                </tr>
                </thead>
                <tbody>
                @foreach($locations as $location)
                    <tr>
                        <td>{{ $location->address }}</td>
                        <td>{{ "$location->city, $location->state" }}</td>
{{--                        <td>{{ $location->distance }}</td>--}}
                        <td>{{ number_format($location->distance / 1000, 2) }} km</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $locations->links() }}
        </div>
    </div>
@endsection
