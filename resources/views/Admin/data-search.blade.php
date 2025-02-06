@include('Admin.bin.header')
<div class="container">
    <div class="table-responsive mt-4">
        <h4 class="text-center">Search data</h4>
         <table class="table table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">S.I</th>
                    <th scope="col">user search</th>
                     <th scope="col">Status</th>
                 </tr>
            </thead>
            <tbody>
                @php
                $i=1;
                @endphp
                @foreach($data as $datas)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$datas->search_name}}</td>
                    <td>{{$datas->status}}</td>
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