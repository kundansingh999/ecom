@include('Admin.bin.header')
     <div class="container">
        <h1 class="text-center mt-4">Add Brand</h1>
        <form>
            <div class="mb-3">
                <label for="productName" class="form-label">Brand Name</label>
                <input type="text" class="form-control" id="productName" placeholder="Enter Brand name">
            </div>
            <div class="mb-3">
                <label for="productDescription" class="form-label">Brand Description</label>
                <textarea class="form-control" id="productDescription" rows="3"></textarea>
            </div>
            <!-- <div class="mb-3">
                <label for="productPrice" class="form-label">Brand Price</label>
                <input type="number" class="form-control" id="productPrice" placeholder="Enter Brand price">
            </div> -->
            <!-- <div class="mb-3">
                <label for="productImage" class="form-label">Product Image</label>
                <input type="file" class="form-control" id="productImage">
            </div> -->
            <div class="mb-3">
                <label for="productCategory" class="form-label">Brand Category</label>
                <select class="form-select" id="productCategory">
                    <option value="electronics">Electronics</option>
                    <option value="fashion">Fashion</option>
                    <option value="home">Home & Kitchen</option>
                    </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Brand</button>
        </form>
    </div>

 
@include('Admin.bin.footer')