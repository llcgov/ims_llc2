@extends('Layouts.main')

@section('content')

    <div class="container">
        <form action="{{ route('customer.store') }}" method="POST">
            @csrf
            <div class="">

            </div>
            <div class="row">
                <h4>Customer's Detials</h4>
                <div class="col-md-4">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Customer Name:</label>
                        <input type="text" class="form-control" placeholder="e.g., Victoriano Tonog" name="customer_name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Address:</label>
                        <input type="text" class="form-control" placeholder="e.g., Melbourg St., Budapest" name="address">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Contact No.:</label>
                        <input type="text" class="form-control" placeholder="e.g., 09000000001" name="contact_no">
                    </div>
                </div>
                
            </div>
            <h4>Order Details</h4>
            <div id="orderDetails">
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Request:</label>
                            <select class="form-select" name="service_type">
                                <option value="Repair">Repair</option>
                                <option value="replace">Replace</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Prodcuts:</label>
                            <select class="form-select" name="product_id">
                                @foreach ($products as $item)
                                <option value="{{ $item->id}}">{{$item->name}} - P{{ $item->supplies->first()->amount}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Quantity:</label>
                            <input type="number" class="form-control" placeholder="0" name="quantity">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="mb-3 mt-3">
                            <button class="btn btn-primary" id="dynamic-ar">Add Another</button>
                        </div>
                    </div>
                </div>
            </div>
            
{{-- 

            <table class="table table-bordered" id="dynamicAddRemove">
                <tr>
                    <th>Subject</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td><input type="text" name="addMoreInputFields[0][subject]" placeholder="Enter subject" class="form-control" />
                    </td>
                    <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Subject</button></td>
                </tr>
            </table> --}}
            <button type="submit" class="btn btn-outline-success btn-block">Save</button>
        </form>
    

    </div>

    
    @push('scripts')
        <script type="text/javascript">
            var i = 0;
            $("#dynamic-ar").click(function () {
                ++i;
                $("#orderDetails")
                .append('<tr><td><input type="text" name="addMoreInputFields[' + i +'][subject][phone no.][amount][quantity]" placeholder="Enter subject" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>');
            });

            $(document).on('click', '.remove-input-field', function () {
                $(this).parents('tr').remove();
            });
        </script>
    @endpush

@endsection

