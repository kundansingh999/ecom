@include('Admin.bin.header')
<div class="container">
<div class="table-responsive mt-4">
<h4>Payment-Page</h4>

    <table class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th scope="col">S.I</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Title</th>
                <th scope="col">Product Image</th>
                <th scope="col">Status</th>
                <th scope="col">Quantity</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Sparky Shirt</td>
                <td>Shirt</td>
                <td> 
                    <img src="{{ asset('assets/img/mobile.webp') }}" class="img-fluid category-image" alt="Mobile">
                </td>
                <td>Active</td>
                <td>500</td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                    <button type="button" class="btn btn-secondary btn-sm">Delete</button>
                    <button type="button" class="btn btn-success btn-sm">Status</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Dynamic T-Shirt</td>
                <td>T-Shirt</td>
                <td> 
                    <img src="{{ asset('assets/img/mobile.webp') }}" class="img-fluid category-image" alt="Mobile">
                </td>
                <td>Inactive</td>
                <td>300</td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                    <button type="button" class="btn btn-secondary btn-sm">Delete</button>
                    <button type="button" class="btn btn-success btn-sm">Status</button>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Sparky Shirt</td>
                <td>Shirt</td>
                <td> 
                    <img src="{{ asset('assets/img/mobile.webp') }}" class="img-fluid category-image" alt="Mobile">
                </td>
                <td>Active</td>
                <td>500</td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                    <button type="button" class="btn btn-secondary btn-sm">Delete</button>
                    <button type="button" class="btn btn-success btn-sm">Status</button>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Sparky Shirt</td>
                <td>Shirt</td>
                <td> 
                    <img src="{{ asset('assets/img/mobile.webp') }}" class="img-fluid category-image" alt="Mobile">
                </td>
                <td>Active</td>
                <td>500</td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                    <button type="button" class="btn btn-secondary btn-sm">Delete</button>
                    <button type="button" class="btn btn-success btn-sm">Status</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@include('Admin.bin.footer')
