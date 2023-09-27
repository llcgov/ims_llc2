@extends('Layouts.main')

@section('content')

    <a href="{{ route("supply.create") }}" class="btn btn-primary">+ Add Supply</a>
    
    <table  id="example" class="table table-striped" style="width:100%">
       <thead>
        <tr>
            <th>Product I.D.</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Measure Type</th>
            <th>Amount</th>
            <th>remarks</th>
            <th>Action</th>
        </tr>
       </thead>
       <tbody>
            @foreach ($supply as $item)
                <tr>
                    <td>{{ $item->product_id }}</td>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->measure_type }}</td>
                    <td>{{ $item->amount }}</td>
                    <td>{{ $item->remarks }}</td>
                    <td>
                        <a href="" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                        <a href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>

                    </td>
                </tr>
            @endforeach
       </tbody>
    </table>
@endsection