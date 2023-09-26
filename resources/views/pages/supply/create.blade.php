@extends('Layouts.main')

@section('content')

    <div class="container">
        <form action="{{ route('supply.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Product:</label>
                        <select class="form-select" name="product_id">
                            @foreach ($products as $item)
                            <option value="{{ $item->id}}">ID: {{ $item->id}} - {{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Model:</label>
                        <input type="text" class="form-control" placeholder="Quantity" name="qty">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Brand:</label>
                        <input type="text" class="form-control" placeholder="Measure Type" name="mtype">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Brand:</label>
                        <input type="text" class="form-control" placeholder="Remarks/Status" name="remarks">
                    </div>
                </div>
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Type:</label>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection