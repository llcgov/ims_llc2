@extends('Layouts.main')

@section('content')
   
    <a href="{{ route("product.create") }}" class="btn btn-primary">+ Add Product</a>
    
    <table  id="example" class="table table-striped" style="width:100%">
       <thead>
        <tr>
            <th>Inventory Action</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Type</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Action</th>
        </tr>
       </thead>
       <tbody>
            @foreach ($product as $item)
           <?php  $total_qty = 0 ?>
                <tr>
                    <td>
                        <a href="" class="btn btn-success">Stock In </a>
                    </td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->brand }}</td>
                    <td>{{ $item->model }}</td>
                    <td>{{ $item->type }}</td>
                    <td>P{{ $item->supplies->first()->amount }}</td>
                    <td> 
                        <h5>
                           
                            @foreach ($item->supplies as $sup)
                            <?php $total_qty += $sup->quantity ?>
                            @endforeach
                            {{ $total_qty }}
                        </h5>
                    </td>
                    <td>
                        <a href="{{ route('product.edit', $item) }}"><button class="btn btn-warning"><i id="boot-icon" class="bi bi-pencil"></i></button></a>
                        <form action="{{route('product.destroy', $item->id)}}" method="POST">
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