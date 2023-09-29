@extends('Layouts.main')

@section('content')
   @if (auth()->user()->usertype == "Supplier")
    <a href="{{ route("product.create") }}" class="btn btn-primary">+ Add Product</a>   
   @endif

    <table  id="example" class="table table-striped" style="width:100%">
       <thead>
        <tr>
            <th>Name</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Type</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
       </thead>
       <tbody>
            @foreach ($product as $item)
           <?php  $total_qty = 0 ?>
                <tr>
                    
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->brand }}</td>
                    <td>{{ $item->model }}</td>
                    <td>{{ $item->type }}</td>
                    <td> 
                        <h5>
                            @foreach ($item->supplies as $sup)
                            <?php $total_qty += $sup->quantity ?>
                            @endforeach
                            {{ $total_qty }}
                        </h5>
                    </td>
                    <td>
                        @if (!empty($item->supplies->first()->amount))
                            P{{ $item->supplies->first()->amount }}
                        @else
                            <strong>UNAVAILABLE</strong>
                        @endif
                
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