@extends("layout.app")
@section("content")
<div class="container p-5">
  <form action="{{route('category.store')}}" method="POST">
    @csrf
    <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputPassword4"> name</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4"> descreption</label>
        <input type="text" class="form-control" name="description">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Created At</label>
      <input type="date" class="form-control" name="date" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection