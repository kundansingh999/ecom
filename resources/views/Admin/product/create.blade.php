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
                    <input type="number" class="form-control" id="product-price" name="product_price">
                </div>

            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product-name">Product Quantity</label>
                    <input type="number" class="form-control" id="product-quantity" name="product_quantity">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product-price">Product Image</label>
                    <input type="file" class="form-control" id="product-image" name="product-image">
                </div>
            </div>
        </div>

        <div class="col-mb-6">
            <label for="Product_Description" class="form-label">Product Description</label>
            <textarea class="form-control" id="ProductDescription" name="product_description" rows="10"></textarea>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product-name">Product Category</label>
                    <select class="form-select" id="StatusProduct" name="category_id">
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
                        <option value="1">active</option>
                        <option value="2">inactive</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product-name">Product Brand</label>
                    <select class="form-select" id="StatusProduct" name="brand">
                        @foreach($brand as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product-price">Discount Price</label>
                    <input type="number" class="form-control" id="discount-price" name="discount_price">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product-name">Product Size</label>
                    <select class="form-select" id="product-size" name="product_size">
                         <option value="s">S</option>
                         <option value="m">M</option>
                         <option value="l">L</option>
                         <option value="xl">XL</option>
                         <option value="xxl">XXL</option>
                     </select>
                </div>
            </div>


        </div>
        <br>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>


@include('Admin.bin.footer')