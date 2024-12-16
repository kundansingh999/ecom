@include('Admin.bin.header')
<div class="container">
    <h1 class="text-center mt-4">Add Product</h1>
    <form action="{{url('add-product')}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product name">Product Name</label>
                    <input type="text" class="form-control productname" id="productname" name="product_name">
                    <h6 class="productnameError error"></h6>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product-price">Product Price</label>
                    <input type="number" class="form-control" id="product-price" name="product-price">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product-name">Product Quantity</label>
                    <input type="text" class="form-control" id="product-name" name="product-name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product-price">Product Image</label>
                    <input type="number" class="form-control" id="product-price" name="product-price">
                </div>
            </div>
        </div>

        <div class="col-mb-6">
            <label for="Product_Description" class="form-label">Product Description</label>
            <textarea class="form-control" id="ProductDescription" name="product_description" rows="3"></textarea>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product-name">Product Category</label>
                    <select class="form-select" id="StatusProduct" name="status">
                        @foreach($category as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product-price">Product Status</label>
                    <select class="form-select" id="StatusProduct" name="status">
                        <option value="electronics">active</option>
                        <option value="fashion">inactive</option>
                    </select>
                </div>
            </div>
        </div>

<br>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>


@include('Admin.bin.footer')