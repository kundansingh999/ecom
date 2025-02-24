@include('Admin.bin.header')
<div class="container">
@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="table-responsive mt-4">
        <table class="table table-bordered" style="width:100%">
            <a href="{{url('admin/product-create')}}" class="btn btn-info">Add Product</a>
            <thead>
                <tr>
                    <th scope="col">S.I</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $si = 1;
                @endphp
                @foreach($prodata as $prodatas)
                <tr>
                    <th scope="row">{{$si ++}}</th>
                    <td>{{$prodatas->product_name}}</td>
                    <td>{{$prodatas->product_price}}</td>
                    <td>
                        <img src="{{asset('assets/product-image'.'/'. $prodatas->image)}}" class="img-fluid category-image" alt="Mobile" style="height:120px;">
                    </td>
                    <td>Active</td>
                    <td>{{$prodatas->stock}}</td>
                    <td>
                        <a href="{{ url('admin/edit-product/'.$prodatas->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <button type="button" class="btn btn-secondary btn-sm">Delete</button>
                        <button type="button" class="btn btn-success btn-sm">Status</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $prodata->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@include('Admin.bin.footer')