@include('Admin.bin.header')
<div class="container">
    <h1 class="text-center mt-4">Create Invoice</h1>
    <form action="{{url('create-invoice')}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product name">Customer Name</label>
                    <input type="text" class="form-control customername" id="customername" name="customer_name">
                    <h6 class="productnameError error"></h6>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product-price">Customer Mobile</label>
                    <input type="number" class="form-control productprice" id="customer-mobile" name="customer_mobile">
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
                    <label for="product-name">Invoive Date</label>
                    <input type="date" class="form-control productquantity" id="invoice-date"
                        name="invoice_date">
                    <h6 class="productquantityError error"></h6>
                </div>
            </div>

         </div>

 
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product-name">Product Name</label>
                    <select class="form-select" id="StatusProduct" name="product_name">
                        @foreach($product as $product)
                        <option value="{{$product->product_name}}">{{$product->product_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product-name">Product price</label>
                    <input type="number" class="form-control productquantity" id="product-price"
                        name="product_price">
                    <h6 class="productquantityError error"></h6>
                </div>
            </div>

         </div>
        <div class="row">
             <div class="col-md-6">
                <div class="form-group">
                    <label for="discount-price">Discount Price</label>
                    <input type="number" class="form-control discountprice" id="discount-price" name="discount_price">
                    <h6 class="discountpriceError error"></h6>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product-price">Payment Method</label>
                    <select class="form-select" id="StatusProduct" name="status">
                        <option value="cash">cash</option>
                        <option value="online">online</option>
                    </select>
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
                    <input class="form-check-input" value="m" name="product_size[]" type="checkbox">M
                </div>
            </div>

            <div class="col-md-1">
                <div class="form-group">
                    <input class="form-check-input" value="l" name="product_size[]" type="checkbox">L
                </div>
            </div>

            <div class="col-md-1">
                <div class="form-group">
                    <input class="form-check-input" value="xl" name="product_size[]" type="checkbox">XL
                </div>
            </div>

            <div class="col-md-1">
                <div class="form-group">
                    <input class="form-check-input" value="xxl" name="product_size[]" type="checkbox">XXL
                </div>
            </div>





        </div>
        <br>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>


@include('Admin.bin.footer')