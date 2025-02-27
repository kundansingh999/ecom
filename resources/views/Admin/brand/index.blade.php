@include('Admin.bin.header')
<div class="container">
    <div class="table-responsive mt-4">
        <h4>Brand-Page</h4>
        <a href="{{url('admin/brand-create')}}" class="btn btn-primary">Add Brand</a>

        <table class="table table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">S.I</th>
                    <th scope="col">Brand Name</th>
                    <th scope="col">Brand Discription</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $k=1;
                @endphp
                @foreach($data as $datas)
                <tr>
                    <th scope="row">{{$k++}}</th>
                    <td>{{$datas->name}}</td>
                    <td>{{$datas->discription}}</td>
                    <td>
                        <img src="{{ asset('assets/img/mobile.webp') }}" class="img-fluid category-image" alt="Mobile">
                    </td>
                    <td>{{$datas->status}}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm category-delete" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-id="{{$datas->id}}">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('Admin.bin.footer')