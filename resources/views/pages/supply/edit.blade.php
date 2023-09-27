@extends('Layouts.main')

@section('content')

    <div class="container">
        <form action="{{ route('supply.update', $supply->id) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                        <label  class="form-label">Product:</label>
                        <select class="form-select" name="product_id">
                            @foreach ($products as $item)
                            <option value="{{ $item->id}}" {{ ($supply->product->name == $item->name ? 'selected' : '' )}} disabled>ID: {{ $item->id}} - {{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                        <label  class="form-label">Quantity:</label>
                        <input type="text" class="form-control" placeholder="Quantity" name="qty" value="{{ $supply->quantity}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="mb-3 mt-3">
                        <label  class="form-label">Measure Type:</label>
                        <select class="form-select" name="mtype">
                            <option value="piece"  {{ ($supply->measure_type == 'piece' ? 'selected' : '' )}}>Pc/s</option>
                            <option value="bundle" {{ ($supply->measure_type == 'bundle' ? 'selected' : '' )}}>Bundle</option>
                            <option value="dozens" {{ ($supply->measure_type == 'dozens' ? 'selected' : '' )}}>Dozens</option>
                            <option value="roll" {{ ($supply->measure_type == 'roll' ? 'selected' : '' )}}>Roll</option>
                            <option value="box" {{ ($supply->measure_type == 'box' ? 'selected' : '' )}}>Box</option>
                            <option value="weight" {{ ($supply->measure_type == 'weight' ? 'selected' : '' )}}>Weight</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3 mt-3">
                        <label  class="form-label">Amount:</label>
                        <input type="text" class="form-control" placeholder="Amount" name="amount" value="{{ $supply->amount}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                        <label  class="form-label">Remarks/Status:</label>
                        <input type="text" class="form-control" placeholder="Remarks/Status" name="remarks" value="{{ $supply->remarks }}">
                    </div>
                </div>
            </div>
            <div class="mb-3 mt-3 fas fa-upload">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection