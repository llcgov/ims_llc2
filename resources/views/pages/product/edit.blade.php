@extends('Layouts.main')

@section('content')

    <div class="container">
        <form action="{{ route('product.update', $product->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Name:</label>
                        <input type="text" class="form-control" placeholder="e.g., Samsung A32 LCD Screen Replacement" name="prod_name"  value="{{ $product->name}}">
                    </div>
                </div>
            </div>
           <div class="row">
                <div class="col-md-4">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Model:</label>
                        <input type="text" class="form-control" placeholder="e.g., A32" name="model" value="{{ $product->model }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Type:</label>
                        <input type="text" class="form-control" placeholder="e.g., Phone Essentials - LCD" name="type" value="{{ $product->type }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Brand:</label>
                        <input type="text" class="form-control" placeholder="e.g., Samsung" name="brand" value="{{ $product->brand }}">
                    </div>
                </div>
           </div>
            <div class="mb-3 mt-3">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection

