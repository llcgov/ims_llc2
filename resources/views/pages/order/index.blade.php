@extends('Layouts.main')

@section('content')
   
    <a href="{{ route("order.create") }}" class="btn btn-primary">+ Add Order</a>
    
    <table  id="example" class="table table-striped" style="width:100%">
       <thead>
        <tr>
            <th>Customer Name</th>
            <th>Request Type</th>
            <th>Product</th>
            <th>Stocks Remaining</th> 
            <th>Action</th>
        </tr>
       </thead>
       <tbody>
        <?php  $total_qty = 0 ?>
            @foreach ($order as $item)
           
                    <td>{{ $item->customer->customer_name }}</td>
                    <td>{{ $item->customer->service_type }}</td>
                    <td>{{ $item->product->name }}</td>
                    <td> 
                        <h5>

                            @foreach ($item->product->supplies as $sup)
                            <?php $total_qty += $sup->quantity ?>
                            
                            @endforeach
                            {{ $total_qty }}

                            {{-- {{ $item->product->supplies()->first()->quantity }} --}}
                        </h5>
                    </td>
                    <td>
                        <a href="{{ route('order.edit', $item->id) }}"><button class="btn btn-warning"><span id="boot-icon" class="bi bi-pencil"></span></button></a>
                    </td>
                </tr>
            @endforeach
       </tbody>
    </table>
@endsection