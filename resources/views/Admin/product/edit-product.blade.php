@include('Admin.bin.header')
<div class="container">
    <h1 class="text-center mt-4">Edit Product</h1>
    <form action="{{url('update-product')}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product name">Product Name</label>
                    <input type="text" class="form-control productname" id="productname" name="product_name" value="{{$pros->product_name}}" >
                    <h6 class="productnameError error"></h6>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product-price">Product Price</label>
                    <input type="number" class="form-control productprice" id="product-price" name="product_price" value="{{$pros->product_price}}">
                    <h6 class="productpriceError error"></h6>
                </div>

            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product-name">Product Quantity</label>
                    <input type="number" class="form-control productquantity" id="product-quantity"
                        name="product_quantity">
                    <h6 class="productquantityError error"></h6>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product-price">Product Image</label>
                    <input type="file" class="form-control productimage" id="product-image" name="product-image">
                    <h6 class="productimageError error"></h6>
                </div>
            </div>
        </div>

        <div class="col-mb-6">
            <label for="Product_Description" class="form-label">Product Description</label>
            <textarea class="form-control productdescription" id="ProductDescription" name="product_description"
                rows="10"></textarea>
            <h6 class="productdescriptionError error"></h6>
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
        <input type="text" value="{{$pros->id}}" name="id" hidden>
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
                    <label for="discount-price">Discount Price</label>
                    <input type="number" class="form-control discountprice" id="discount-price" name="discount_price">
                    <h6 class="discountpriceError error"></h6>
                </div>
            </div>
        </div>
        <label for="product-name">Product Size</label>

        <div class="row">
            <div class="col-md-1">
                <div class="form-group">
                    <input class="form-check-input" value="s" name="product_size[]" type="checkbox">S
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <input  class="form-check-input" value="m" name="product_size[]" type="checkbox">M
                </div>
            </div>

            <div class="col-md-1">
                <div class="form-group">
                    <input  class="form-check-input" value="l" name="product_size[]" type="checkbox">L
                </div>
            </div>

            <div class="col-md-1">
                <div class="form-group">
                    <input class="form-check-input" value="xl" name="product_size[]"  type="checkbox">XL
                </div>
            </div>

            <div class="col-md-1">
                <div class="form-group">
                    <input class="form-check-input" value="xxl" name="product_size[]" type="checkbox">XXL
                </div>
            </div>





        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>


@include('Admin.bin.footer')