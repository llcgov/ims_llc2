@extends('Layouts.main')

@section('content')
   
    <a href="{{ route("customer.index") }}" class="btn btn-primary">add customer</a>
    
    <table  id="example" class="table table-striped" style="width:100%">
       <thead>
        <tr>
            <th>Customer Name</th>
            <th>Address</th>
            <th>Phone No.</th>
            <th>Request Type</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Action</th>
        </tr>
       </thead>
       <tbody>
            @foreach ($customer as $item)
           <?php  $total_qty = 0 ?>
                    <td>{{ $item->customerName }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->phoneNo }}</td>
                    <td>{{ $item->rtype }}</td>
                    <td>{{ $item->brand }}</td>
                    <td>{{ $item->model }}</td>
                    <td>{{ $item->action }}</td>

                    <td>
                        <a href="" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                        <a href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>

                    </td>
                </tr>
            @endforeach
       </tbody>
    </table>
@endsection