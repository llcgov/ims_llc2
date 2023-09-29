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
            {{-- <th>Amount</th> --}}
            {{-- <th>Remarks</th> --}}
            <th>Created/Supply Date</th>
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
                    {{-- <td>P {{ $item->amount }}</td> --}}
                    {{-- <td>{{ $item->remarks }}</td> --}}
                    <td>{{ $item->created_at->format('F d, Y G: i') }}</td>
                    <td>
                        <a href="{{ route('supply.edit', $item->id) }}"><button class="btn btn-warning"><i id="boot-icon" class="bi bi-pencil"></i></button></a>
                        <form action="{{route('supply.destroy', $item->id)}}" method="POST">
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