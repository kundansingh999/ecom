@include('Admin.bin.header')
<div class="container">
    <div class="table-responsive mt-4">
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        <h4>User-page</h4>
        <table class="table table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">S.I</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile no</th>
                    <th scope="col">Status</th>
                    <th scope="col">User type</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $si = 1;

                @endphp

                @foreach($user as $user)
                <tr>
                    <th scope="row">{{$si++}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->mobile_no}}</td>

                    <td>Active</td>
                    @if($user->admin == 1)
                    <td>Admin</td>
                    @else
                    <td>User</td>
                    @endif

                    @if(in_array($user->id, [1, 2])) <td> </td>
                    @else
                    <td>
                        @if($user->admin == 1)
                        <a href="{{url('admin/convert-user/'.$user->id) }}" class="btn btn-success btn-sm">User</a>
                        @else
                        <a href="{{url('admin/convert-admin/'.$user->id)}}" class="btn btn-success btn-sm">Admin</a>

                        @endif

                        @if($user->status == 1)
                        <a href="{{url('admin/block-user/'.$user->id) }}" class="btn btn-danger btn-sm">Blocked</a>
                        @else
                        <a href="{{url('admin/unblock-user/'.$user->id)}}" class="btn btn-success btn-sm">Unblocked</a>
                        @endif
                    </td>
                    @endif
                </tr>
                @endforeach



            </tbody>
        </table>
    </div>
</div>
@include('Admin.bin.footer')