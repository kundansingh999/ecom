@include('Admin.bin.header')
<div class="container">
    <div class="table-responsive mt-4">
        <h4 class="text-center">Category-Page</h4>
        <a href="{{url('admin/category-create')}}" class="btn btn-primary">Add Category</a>
        <table class="table table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">S.I</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Category Summary</th>
                    <th scope="col">Category Image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i=1;
                @endphp
                @foreach($data as $datas)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$datas->name}}</td>
                    <td>{{$datas->summary}}</td>
                    <td>
                        <img src="{{ asset('assets/img/mobile.webp') }}" class="img-fluid category-image" alt="Mobile">
                    </td>
                    <td>{{$datas->status}}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm category-delete" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-id="{{$datas->id}}">
                            Delete
                        </button>
                        <button type="button" class="btn btn-success btn-sm">Status</button>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <h4 class="text-center">Would you like to delete</h4><br>
                    <form action="{{url('category-delete')}}" method="get">
                        <input class="virat" type="text" name="category_id" value="" hidden>
                        <button class="btn btn-danger"type="submit" > Confirm Delete</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@include('Admin.bin.footer')