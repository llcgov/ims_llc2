@extends('Layouts.main')

@section('content')
   
    @if (auth()->user()->usertype == "Information")
       <a href="{{ route("order.create") }}" class="btn btn-primary">+ Add Order</a>    
    @endif
    
    <table  id="example" class="table table-striped" style="width:100%">
       <thead>
        <tr>
            @if (auth()->user()->usertype == "Supplier")
                <th>Inventory</th>
            @endif
            <th>Customer Name</th>
            <th>Request Type</th>
            <th>Product</th>
            <th>Quantity</th> 
            <th>Action</th>
        </tr>
       </thead>
       <tbody>
        <?php  $total_qty = 0 ?>
            @foreach ($order as $item)
                    @if (auth()->user()->usertype == "Supplier")
                        <td><a href="{{route('order.checkout', ['id'=> $item->id, 'quantity'=> $item->quantity])}}" class="btn btn-info" <?php $item->confirmed = 1 ? "disabled" : ""  ?>>Checkout</a></td>
                    @endif
                    <td>{{ $item->customer->customer_name }}</td>
                    <td>{{ $item->customer->service_type }}</td>
                    <td>{{ $item->product->name }}</td>
                    <td> {{ $item->quantity }}</td>
                    <td>
                        <a href="{{ route('order.edit', $item->id) }}"><button class="btn btn-warning"><span id="boot-icon" class="bi bi-pencil"></span></button></a>
                    </td>
                </tr>
            @endforeach
       </tbody>
    </table>
@endsection