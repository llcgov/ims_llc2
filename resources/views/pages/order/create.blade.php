@extends('Layouts.main')

@section('content')

    <div class="container">
        {{-- <form action="{{ route('order.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Customer Name:</label>
                        <input type="text" class="form-control" placeholder="Customer Name" name="Customer_name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Brand:</label>
                        <input type="text" class="form-control" placeholder="e.g., Samsung" name="brand">
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
        </form> --}}

        <form action="{{ url('store-input-fields') }}" method="POST">
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
                        <input type="text" class="form-control" placeholder="e.g., Samsung" name="brand">
                    </div>
                </div>
            </div>

            <table class="table table-bordered" id="dynamicAddRemove">
                <tr>
                    <th>Subject</th>
                    <th>Address</th>
                    <th>Phone No.</th>
                    <th>Amount</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td><input type="text" name="addMoreInputFields[0][subject]" placeholder="Enter subject" class="form-control" />
                    </td>
                    <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Subject</button></td>
                </tr>
            </table>
            <button type="submit" class="btn btn-outline-success btn-block">Save</button>
        </form>

    </div>
    
    @push('scripts')
            <script type="text/javascript">
        var i = 0;
        $("#dynamic-ar").click(function () {
            ++i;
            $("#dynamicAddRemove").append
            ('<tr><td><input type="text" name="addMoreInputFields[' + i +
                '][subject][phone no.][amount][quantity]" placeholder="Enter subject" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>');
                
        });
        $(document).on('click', '.remove-input-field', function () {
            $(this).parents('tr').remove();
        });
    </script>
    @endpush

@endsection

