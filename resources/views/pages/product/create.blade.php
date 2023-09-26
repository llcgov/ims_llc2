@extends('Layouts.main')

@section('content')

    <div class="container">
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Name:</label>
                        <input type="text" class="form-control" placeholder="Product Name" name="name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Brand:</label>
                        <input type="text" class="form-control" placeholder="Brand" name="brand">
                    </div>
                </div>
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Model:</label>
                <input type="text" class="form-control" placeholder="Model" name="model">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Type:</label>
                <input type="text" class="form-control" placeholder="Type" name="type">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Type:</label>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection

