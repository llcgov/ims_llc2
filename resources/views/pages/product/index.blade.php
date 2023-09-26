@extends('Layouts.main')

@section('content')

    <a href="{{ route("product.create") }}" class="btn btn-primary">+ Create Product</a>
    
    <table  id="example" class="table table-striped" style="width:100%">
       <thead>
        <tr>
            <th>Inventory Action</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Type</th>
            <th>Action</th>
        </tr>
       </thead>
       <tbody>
            @foreach ($product as $item)
                <tr>
                    <td>
                        <a href="" class="btn btn-success">Stock In </a>
                        <a href="" class="btn btn-info">Checkout</a>
                    </td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->brand }}</td>
                    <td>{{ $item->model }}</td>
                    <td>{{ $item->type }}</td>
                    <td>
                        <a href="" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                        <a href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>

                    </td>
                </tr>
            @endforeach
       </tbody>
    </table>
@endsection