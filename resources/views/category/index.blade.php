
@extends("layout.app")
@section("content")
<a href="{{ route('category.create') }}" class="btn btn-warning">Add post</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th class="text-center" scope="col">#</th>
            <th class="text-center" scope="col">name</th>
            <th class="text-center" scope="col">description</th>
            <th class="text-center" scope="col">created_at</th>
            <th class="text-center" scope="col">opertation</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <th scope="row" class="text-center">{{$category->cat_id}}</th>
            <td class="text-center"> {{$category->name}}</td>
            <td class="text-center">{{$category->description}}</td>
            <td class="text-center">{{date('y/m/d' , strtotime($category->created_at))}}</td>
            <td class="text-center">
          <form action="" style="display:inline-block">
            <a href="{{ route('category.edit', $category->cat_id) }}" class="btn btn-primary">Edit post</a>
            <a href="{{ route('category.index', $category->cat_id) }}" class="btn btn-success">View</a>
          </form>
          <form action="{{ route('category.destroy',$category->cat_id)}}" method="POST" style="display:inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>

        </tr>
        @endforeach


    </tbody>
</table>
@endsection