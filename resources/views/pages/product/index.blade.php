@extends('Layouts.main')

@section('content')
    <table  id="example" class="table table-striped" style="width:100%">
        <tr>
            <th>Name</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Type</th>
        </tr>
        @foreach ($product as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->brand }}</td>
                <td>{{ $item->model }}</td>
                <td>{{ $item->type }}</td>
            </tr>
        @endforeach
    </table>
@endsection