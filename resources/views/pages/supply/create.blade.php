@extends('Layouts.main')

@section('content')
    <form action="{{ route('supply.store') }}" method="POST">
        @csrf
        <select name="" name="" id="">
            @foreach ($products as $item)
            <option value="{{ $item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        <input class="form-control" type="text" name="qty" placeholder="quantity">
        <input class="form-control" type="pcs" name="mtype" placeholder="Measure Type">
        <input class="form-control" type="float" name="amount" placeholder="Amount">
        <input class="form-control" type="text" name="remarks" placeholder="remarks">
        <input type="submit" value="Submit">
    </form>
@endsection