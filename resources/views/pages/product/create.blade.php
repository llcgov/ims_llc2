@extends('Layouts.main')

@section('content')
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <input class="form-control" type="text" name="prod_name" placeholder="Product Name">
        <input class="form-control" type="text" name="model" placeholder="Model">
        <input class="form-control" type="text" name="brand" placeholder="Brand">
        <input class="form-control" type="text" name="type" placeholder="Type">
        <input type="submit" value="Submit">
    </form>
@endsection