@extends('app')

@section('content')
    <div class="container">
        <div class="row col-12">
            <div class="px-4 py-5 text-center">
                <h1 class="display-4 fw-bold text-body-emphasis">Customers</h1>
            </div>
        </div>
        <div class="row col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Company</th>
                    <th scope="col">City</th>
                    <th scope="col">Sales Representative</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    @can('view', $customer)
                    <tr>
                        <td>{{ $customer->name }}}</td>
                        <td>{{ $customer->city }}, {{ $customer->state }}</td>
                        <td>{{ $customer->salesRep->name }}</td>
                    </tr>
                    @endcan
                @endforeach
                </tbody>
            </table>
            {{ $customers->links() }}
        </div>
    </div>
@endsection
