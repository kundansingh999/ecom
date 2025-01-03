@include('Admin.bin.header')
<div class="container">
    <h1 class="text-center mt-4">Add Slider</h1>
    <form action="{{url('add-slider')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="slider_name" class="form-label">Slider Name</label>
            <input type="text" class="form-control" id="sliderName" name="slider_name" placeholder="Enter slider name">
        </div>
        <div class="mb-3">
        <label for="slider_name" class="form-label">Category id</label>
            <select class="form-select" id="StatusProduct" name="category_id">
                @foreach($category as $category)
                <option value="{{$category->slug}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="slider_image" class="form-label">slider Image</label>
            <input type="file" class="form-control" id="sliderImage" name="slider-image">
        </div>
        <button type="submit" class="btn btn-primary">Add Slider</button>
    </form>
</div>


@include('Admin.bin.footer')