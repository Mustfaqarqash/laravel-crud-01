@extends("layout.app")
@section("content")
<div class="container p-5">
  <form action="{{route('category.update' , $category->cat_id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputPassword4"> name</label>
        <input type="text" class="form-control" name="name" value="{{$category->name}}">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4"> descreption</label>
        <input type="text" class="form-control" name="description" value="{{$category->description}}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Created At</label>
      <input type="date" class="form-control" name="date"  value="{{date('Y-m-d', strtotime($category->created_at))}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection