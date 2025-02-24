@include('Admin.bin.header')
<div class="container">
    <div class="table-responsive mt-4">
        <h4>Order-Page</h4>
        <table class="table table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">S.I</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Total Amount</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">PinCode</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            @php
            $si = 1;
            @endphp
            <tbody>
                @foreach($data as $data)
                <tr>
                    <th scope="row">{{$si ++}}</th>
                    <td>{{$data->product_name}}</td>
                    <td>{{$data->discount_price}}</td>
                    <td>{{$data->quantity}}</td>
                    <td>
                        <img src="{{ asset('assets/product-image/' . $data->image) }}" style="width:70px;" class="img-fluid category-image" alt="Mobile">
                    </td>
                    <td>{{$data->total_amount}}</td>
                    <td>{{$data->first_name}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->mobile_no}}</td>
                    <td>{{$data->pincode}}</td>
                    <td>
                        <select class="form-select orderstatus" data-id="{{$data->id}}" aria-label="Default select example">
                            <option selected>Select</option>
                            <option value="new" {{ $data->status == 'new' ? 'selected' : '' }}>New</option>
                            <option value="processing" {{ $data->status == 'processing' ? 'selected' : '' }}>processing</option>
                            <option value="dispatched" {{ $data->status == 'dispatched' ? 'selected' : '' }}>dispatched</option>
                            <option value="out for delivery" {{ $data->status == 'out for delivery' ? 'selected' : '' }}>out for delivery</option>
                            <option value="delivered" {{ $data->status == 'delivered' ? 'selected' : '' }}>delivered</option>
                            <option value="cancel" {{ $data->status == 'cancel' ? 'selected' : '' }}>cancel</option>
                        </select>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('Admin.bin.footer')