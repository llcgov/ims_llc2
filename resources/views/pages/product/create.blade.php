@extends('Layouts.main')

@section('content')

    <div class="container">
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Name:</label>
                        <input type="text" class="form-control" placeholder="e.g., Samsung A32 LCD Screen Replacement" name="prod_name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Brand:</label>
                        <select class="form-select" name="brand">
                            @foreach ($brands as $item)
                            <option value="{{ $item->brand}}">{{$item->brand}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Model:</label>
                <input type="text" class="form-control" placeholder="e.g., A32" name="model">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Type:</label>
                <input type="text" class="form-control" placeholder="e.g., Phone Essentials - LCD" name="type">
            </div>
            <div class="mb-3 mt-3">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection

