@extends('Layouts.main')

@section('content')

    <div class="container">
        <form action="{{ url('store-input-fields') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Name:</label>
                        <input type="text" class="form-control" placeholder="Customer Name" name="customerName">
                    </div>
                </div>
            </div>
            <div class="row">    
                <div class="col-md">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Address:</label>
                        <input type="text" class="form-control" placeholder="Barangay, City" name="address">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label"> Phone No.:</label>
                        <input type="text" class="form-control" placeholder="Phone Number" name="phoneNo">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label"> Request Type:</label>
                        <input type="text" class="form-control" placeholder="ex. LCD Replacement" name="rtype">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label"> Brand:</label>
                        <input type="text" class="form-control" placeholder="Brand" name="brand">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label"> Model:</label>
                        <input type="text" class="form-control" placeholder="Model" name="model">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Model" name="model">

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
        <div class="mb-3 mt-3">
            <input type="submit" value="Submit">
        </div>

    </div>

    
    {{-- @push('scripts')
            <script type="text/javascript">
        var i = 0;
        $("#dynamic-ar").click(function () {
            ++i;
            $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +'][subject][phone no.][amount][quantity]" placeholder="Enter subject" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>');
        });
        $(document).on('click', '.remove-input-field', function () {
            $(this).parents('tr').remove();
        });
    </script>
    @endpush --}}

@endsection

