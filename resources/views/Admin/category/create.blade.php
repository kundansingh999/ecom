@include('Admin.bin.header')
<div class="container">
    <h1 class="text-center mt-4">Add Category</h1>
    <form action="{{url('add-category')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="category_name" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="CategoryName" name="category_name" placeholder="Enter Category name">
        </div>
        <div class="mb-3">
            <label for="Category_Description" class="form-label">Category Description</label>
            <textarea class="form-control" id="CategoryDescription" name="category_description" rows="3"></textarea>
        </div>
     
        <div class="mb-3">
            <label for="Category_Image" class="form-label">Category Image</label>
            <input type="file" class="form-control" id="CategoryImage" name="category-image">
        </div>
        <div class="mb-3">
            <label for="Status_Category" class="form-label">Status Category</label>
            <select class="form-select" id="StatusCategory" name="status">
                <option value="1">active</option>
                <option value="2">inactive</option>
             </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
</div>


@include('Admin.bin.footer')