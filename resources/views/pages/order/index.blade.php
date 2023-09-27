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
                        
                        <a href="{{ route('order.edit', $item->id) }}"><button class="btn btn-warning"><span id="boot-icon" class="bi bi-pencil"></span></button></a>
                        <form action="{{route('order.destroy', $item->id)}}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger"><span id="boot-icon" class="bi bi-trash"></span></button>
                        </form>
                    </td>
                </tr>
            @endforeach
       </tbody>
    </table>
@endsection