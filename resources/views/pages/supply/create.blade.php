@extends('Layouts.main')

@section('content')

    <div class="container">
        <form action="{{ route('supply.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                        <label  class="form-label">Product:</label>
                        <select class="form-select" name="product_id">
                            @foreach ($products as $item)
                            <option value="{{ $item->id}}">ID: {{ $item->id}} - {{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                        <label  class="form-label">Quantity:</label>
                        <input type="text" class="form-control" placeholder="Quantity" name="qty">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="mb-3 mt-3">
                        <label  class="form-label">Measure Type:</label>
                        <select class="form-select" name="mtype">
                            <option value="piece">Pc/s</option>
                            <option value="bundle">Bundle</option>
                            <option value="dozens">Dozens</option>
                            <option value="roll">Roll</option>
                            <option value="box">Box</option>
                            <option value="weight">Weight</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3 mt-3">
                        <label  class="form-label">Amount:</label>
                        <input type="text" class="form-control" placeholder="Amount" name="amount">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                        <label  class="form-label">Remarks/Status:</label>
                        <input type="text" class="form-control" placeholder="Remarks/Status" name="remarks">
                    </div>
                </div>
            </div>
            <div class="mb-3 mt-3 fas fa-upload">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection