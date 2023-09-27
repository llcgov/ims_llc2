@extends('Layouts.main')

@section('content')
   
    <a href="{{ route("order.create") }}" class="btn btn-primary">+ Create Order</a>
    
    <table  id="example" class="table table-striped" style="width:100%">
       <thead>
        <tr>
            <th>Customer Name</th>
            <th>Request Type</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Action</th>
        </tr>
       </thead>
       <tbody>
            @foreach ($order as $item)
           <?php  $total_qty = 0 ?>
                    <td>{{ $item->customerName }}</td>
                    <td>{{ $item->rtye }}</td>
                    <td>{{ $item->brand }}</td>
                    <td>{{ $item->model }}</td>
                    <td> 
                        <h5>
                           
                            @foreach ($item->supplies as $sup)
                            <?php $total_qty += $sup->quantity ?>
                            
                            @endforeach
                            {{ $total_qty }}
                        </h5>
                    </td>
                    <td>
                        <a href="" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                        <a href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>

                    </td>
                </tr>
            @endforeach
       </tbody>
    </table>
@endsection